// Map

import jsVectorMap from 'jsvectormap';
import 'jsvectormap/dist/maps/world';

/**
 * Applique le style aux marqueurs selon leur service
 */
const styleMarkers = (markers) => markers.map(marker => {
    const isBQS = marker.service === 'bqs_surveyor';
    const color = isBQS ? '#02284d' : '#d51c21';
    const image = isBQS 
        ? './img/bqs-surveyor.svg' 
        : './img/port-agent.svg';

    return {
        ...marker,
        style: {
            initial: {
                fill: color,
                stroke: color,
                r: 10,
                image
            }
        }
    };
});

/**
 * Centre la carte sur les marqueurs fournis
 */
export function focusOnMarkers(mapInstance, markers) {
    if (!markers || markers.length === 0) return;

    let sumLat = 0.0;
    let sumLng = 0.0;

    markers.forEach(m => {
        sumLat += m.coords[0];
        sumLng += m.coords[1];
    });

    const avgLat = sumLat / markers.length;
    const avgLng = sumLng / markers.length;

    mapInstance.setFocus({
        lat: avgLat,
        lng: avgLng,
        scale: markers.length === 1 ? 5 : 3,
        animate: true
    });
}

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
        onLoaded(map) {
            window.addEventListener('resize', () => {
                map.updateSize()
            });
            // Focus initial sur tous les marqueurs
            if (markers.length > 0) {
                focusOnMarkers(map, markers);
            }
        }
    };
    const map = new jsVectorMap(options);

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
        const styledFiltered = styleMarkers(filtered);
        mapInstance.addMarkers(styledFiltered);

        // Focus sur les nouveaux marqueurs
        focusOnMarkers(mapInstance, filtered);
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
