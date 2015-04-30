$(document).ready(function () {
	
	// Navigation toggle
	$('body').on('click', '.header--navbutton--rdicon', function(event) {
		event.preventDefault();
		$(this).toggleClass('active');
		$('.navigation').toggleClass('active');
	});

});

window.onload=function(){
	if(window.outerWidth > 704 &&  document.querySelectorAll('.blocks').length > 0){
		matrix();
		var wow = new WOW(
		{
			boxClass:     'blocks--element',     
			animateClass: 'fadeInUp',
			offset:       0,         
			mobile:       true,      
			live:         true,      
			callback:     function(box) {
			}
		}
		);
		wow.init();
	}else{
		new WOW().init();
	}

	if($('#map').length > 0){
		// Provide your access token
		L.mapbox.accessToken = 'pk.eyJ1Ijoic2FnYWNpZnkiLCJhIjoiSEhlc0Y3OCJ9.oK-VhYtBUvM3zoVMJXekxg';
    	// Create a map in the div #map
    	L.mapbox.map('map', 'sagacify.7274f0f9').setView([50.826609, 4.399905999999987], 16);
    }
};