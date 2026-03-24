// Map

import jsVectorMap from 'jsvectormap';
import 'jsvectormap/dist/maps/world';

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
        markers,
        // selectedMarkers: [0],
        markersSelectable: true,
        markersSelectableOne: true,
        markerStyle: {
            initial: {
                r: 7,
                fill: '#d51c21',
                stroke: '#d51c21'
            },
            hover: {
                // stroke: '#d51c21' 
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
            // You can control the hover and selected state for labels as well.
            hover: { fill: 'red' },
            selected: { fill: 'red', fontWeight: 500, fontStyle: 'italic' },
        },
        markerRendering: function(marker) {
            const config = marker.config;
            console.debug({ marker });

            // Si le marqueur a une icône spécifique définie dans les données
            if (config.icon) {
                marker.element.style.initial.image = config.icon;
            }
            // Ou on change la couleur selon le type de service
            else if (config.service === 'port_agent') {
                marker.element.style.initial.fill = '#d51c21'; // Rouge
            } else if (config.service === 'bqs_surveyor') {
                marker.element.style.initial.fill = '#02284d'; // Bleu foncé
            }
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
        // On retire tous les marqueurs
        console.debug({ mapInstance });
        mapInstance.removeMarkers();

        // On filtre
        const filtered = type === 'all'
            ? allMarkers
            : allMarkers.filter(m => m.service === type);

        // On réajoute les marqueurs correspondants
        mapInstance.addMarkers(filtered);
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