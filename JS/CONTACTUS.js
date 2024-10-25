// Initialize the map and set its view to a given location and zoom level
var map = L.map('map').setView([23.0903, 72.5856], 13); // Coordinates (lat, lon)

// Set up the CartoDB Dark Matter tile layer (dark theme)
L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
    attribution: '&copy; <a href="https://www.carto.com/attributions">CartoDB</a>',
    subdomains: 'abcd',
    maxZoom: 19
}).addTo(map);

// Add a marker to the map
var marker = L.marker([23.0903, 72.5856]).addTo(map);

// Add a popup to the marker
marker.bindPopup("<h2>GUARDIAN FORTITUDE ,</h2><h4>Dispatch Center</h4>").openPopup();