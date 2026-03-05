import './bootstrap';
import { loadMap } from './modules/map.js';

const markers = [
    { name: 'Port Louis, Maurice', coords: [-20.1609, 57.5012] },
    { name: 'Dubai (Jebel Ali)', coords: [25.0112, 55.0611] },
    { name: 'Durban, South Africa', coords: [-29.8587, 31.0218] },
    { name: 'Mombasa, Kenya', coords: [-4.0435, 39.6682] },
    { name: 'Maputo, Mozambique', coords: [-25.9692, 32.5732] },
    // { name: 'Fujairah, UAE', coords: [25.1288, 56.3265] },
    // { name: 'Port of Hamad, Qatar', coords: [25.0125, 51.6250] },
    { name: 'Singapore', coords: [1.3521, 103.8198] },
    { name: 'Colombo, Sri Lanka', coords: [6.9271, 79.8612] },
    // { name: 'Port Klang, Malaysia', coords: [3.0011, 101.3928] },
];

loadMap({
    markers,
    backgroundColor: 'lightblue'
});