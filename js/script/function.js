/* ---------------- INIT MAP ---------------- */
function showMap(){
	if( document.getElementById('map')) {
    	// Provide your access token
    	L.mapbox.accessToken = 'pk.eyJ1Ijoic2FnYWNpZnkiLCJhIjoiSEhlc0Y3OCJ9.oK-VhYtBUvM3zoVMJXekxg';
    	// Create a map in the div #map
    	var map = L.mapbox.map('map', 'sagacify.7274f0f9').setView([50.826609, 4.399905999999987], 16);	
    	map.touchZoom.disable();
    	map.doubleClickZoom.disable();
    	map.scrollWheelZoom.disable();
    }
}