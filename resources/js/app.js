import './bootstrap';
import { loadMap, serviceButtons } from './modules/map.js';

const allMarkers = [
    {
        name: 'Port Louis, Maurice',
        coords: [-20.1609, 57.5012], 
        service: 'port_agent'
    },
    {
        name: 'Dubai (Jebel Ali)',
        coords: [25.0112, 55.0611], 
        service: 'bqs_surveyor'
    },
    {
        name: 'Durban, South Africa',
        coords: [-29.8587, 31.0218], 
        service: 'port_agent'
    },
    {
        name: 'Mombasa, Kenya',
        coords: [-4.0435, 39.6682], 
        service: 'bqs_surveyor'
    },
    {
        name: 'Maputo, Mozambique',
        coords: [-25.9692, 32.5732], 
        service: 'port_agent'
    },
    {
        name: 'Singapore',
        coords: [1.3521, 103.8198], 
        service: 'port_agent'
    },
    {
        name: 'Colombo, Sri Lanka',
        coords: [6.9271, 79.8612], 
        service: 'bqs_surveyor'
    },
];

const mapInstance = loadMap({
    markers: allMarkers,
    backgroundColor: 'lightblue'
});

serviceButtons({ mapInstance, allMarkers });