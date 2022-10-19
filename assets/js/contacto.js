/* ::: Mapa ::: */
const FORM = document.querySelector('#contact-form');
FORM.addEventListener('submit', (e) => {
	e.preventDefault();
});

/* ::: Mapa ::: */
const MAP = document.querySelector('#map');
const LOCATION_BUTTONS = document.querySelectorAll('#locations button');
const MAP_MAX_ZOOM = 19;
const MAP_ZOOM = 18;
const LOCATIONS = {
	buenavista: { lat: 19.46762052976587, lng: -99.12371109219148 },
	mixcoac: { lat: 19.369188222902203, lng: -99.1832603699414 },
	villa: { lat: 19.46837484938124, lng: -99.09680912529379 },
	muzquiz: { lat: 19.502365739712502, lng: -99.04224538088167 },
};
const DEFAULT_LOCATION = [LOCATIONS.buenavista.lat, LOCATIONS.buenavista.lng];

LOCATION_BUTTONS.forEach((button) => {
	button.addEventListener('click', (e) => {
		updateMap(e.target.dataset.location);
	});
});

/* iniciar mapa */
// leaflet docs: https://leafletjs.com/examples/quick-start/
let map = L.map('map').setView(DEFAULT_LOCATION, MAP_ZOOM);

/* agregar créditos al mapa */
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: MAP_MAX_ZOOM,
	attribution: '© OpenStreetMap',
}).addTo(map);

/* configuración de marcador */
// config de ícono: https://leafletjs.com/reference.html#icon
const MARKER_ICON = L.icon({ iconUrl: './assets/img/map-marker.png', iconAnchor: [22, 94] });
let marker = L.marker(DEFAULT_LOCATION, { icon: MARKER_ICON }).addTo(map);

const updateMap = (location) => {
	const lat = LOCATIONS[location].lat;
	const lng = LOCATIONS[location].lng;

	/* cambiar de posición */
	map.setView([lat, lng], 19);

	/* restablecer marcador */
	marker.remove();
	marker.setLatLng([lat, lng]).addTo(map);

	scrollMap();
};

const scrollMap = () => {
	MAP.scrollIntoView({ behavior: 'smooth', block: 'center' });
};
