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
            initial: { fill: '#d51c21', stroke: '#d51c21' },
            hover: { stroke: '#d51c21' },
            selected: { strokeWidth: 2.5 },
            selectedHover: { fillOpacity: 1 },
        },
        markerLabelStyle: {
            initial: {
                // fontFamily: "'Inter', sans-serif",
                fontWeight: 500,
            },
            // You can control the hover and selected state for labels as well.
            hover: { fill: 'red' },
            selected: { fill: 'blue' },
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
}