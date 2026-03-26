// Map

import jsVectorMap from 'jsvectormap';
import 'jsvectormap/dist/maps/world';

/**
 * Applique le style aux marqueurs selon leur service
 */
const styleMarkers = (markers) => markers.map(marker => {
    const isBQS = marker.service === 'bqs_surveyor';
    const color = isBQS ? '#02284d' : '#d51c21';

    return {
        ...marker,
        style: {
            initial: {
                fill: color,
                stroke: color,
                r: 7,
                ...(marker.icon ? { image: marker.icon } : {})
            }
        }
    };
});

export function loadMap({
    selector = '#map',
    mapName = 'world',
    backgroundColor = 'transparent',
    markers = [],
} = {}) {
    const options = {
        selector,
        map: mapName,
        backgroundColor,
        regionStyle: {
            initial: { fill: '#e7f1fb' },
            hover: { fill: '#02284d' }
        },
        zoomOnScroll: false,
        markers: styleMarkers(markers),
        markersSelectable: true,
        markersSelectableOne: true,
        markerStyle: {
            initial: {
                r: 7,
                fill: '#d51c21',
                stroke: '#d51c21'
            },
            hover: {
                strokeWidth: 2
            },
            selected: {
                strokeWidth: 3
            },
            selectedHover: { fillOpacity: 1 },
        },
        markerLabelStyle: {
            initial: {
                fontWeight: 500,
            },
            hover: { fill: 'red' },
            selected: { fill: 'red', fontWeight: 500, fontStyle: 'italic' },
        },
        labels: {
            markers: {
                render(marker, index) {
                    return marker.labelName || marker.name || ''
                },
            },
        },
    };
    const map = new jsVectorMap(options);
    console.debug({ map });

    return map;
}

export function serviceButtons({ mapInstance, allMarkers }) {
    const buttons = document.querySelectorAll('.btn-services');
    if (buttons.length == 0) {
        console.debug("No service button found");
        return;
    }

    const filterService = (type) => {
        console.debug({ mapInstance });
        mapInstance.removeMarkers();

        // On filtre
        const filtered = type === 'all'
            ? allMarkers
            : allMarkers.filter(m => m.service === type);

        // On réajoute les marqueurs correspondants avec leur style
        mapInstance.addMarkers(styleMarkers(filtered));
    }

    buttons.forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();
            const service = btn.dataset.service;
            console.debug({ service });
            filterService(service);
            buttons.forEach(btn => {
                btn.classList.remove('active');
            });
            btn.classList.add('active');
        });
    });
}
