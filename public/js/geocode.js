// import { OpenStreetMapProvider } from './leaflet-geosearch';
import * as GeoSearch from 'node_modules/leaflet-geosearch/dist/geosearch.css';
import 'node_modules/leaflet-geosearch/dist/geosearch.css';


var latitude = 20.6109151
var longitude = -103.3009833

var map = L.map('mapa').setView([latitude, longitude], 15);

L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
}).addTo(map);


const buscador = document.querySelector('#address');
buscador.addEventListener('input',searchAddress);


async function searchAddress(e){
    if(e.target.value.length > 8){
        const provider = new GeoSearch.OpenStreetMapProvider();
        const results = await provider.search({ query: input.value });


        console.log(results);
    }
}
