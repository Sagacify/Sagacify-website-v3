$(document).ready(function () {
	
	// Navigation toggle
	var elements = document.querySelector('.header--navbutton--rdicon');
	var navigation = document.querySelector('.navigation');
	elements.addEventListener("click", function(event){
		event.preventDefault;
		var el = elements;
		if (el.classList) {
			el.classList.toggle('active');
		} else {
			var classes = el.className.split(' ');
			var existingIndex = classes.indexOf('active');
			if (existingIndex >= 0)
				classes.splice(existingIndex, 1);
			else
				classes.push('active');
			el.className = classes.join(' ');
		}

		el = navigation;
		if (el.classList) {
			el.classList.toggle('active');
		} else {
			var classes = el.className.split(' ');
			var existingIndex = classes.indexOf('active');
			if (existingIndex >= 0)
				classes.splice(existingIndex, 1);
			else
				classes.push('active');
			el.className = classes.join(' ');
		}
	});

	var $body    = $('html, body'),
	content  = $('#smooth').smoothState({
		prefetch: true,
		pageCacheSize: 4,
		onStart: {
			duration: 250,
			render: function (url, $container) {
				content.toggleAnimationClass('is-exiting');
				$body.animate({
					scrollTop: 0
				});
			}
		}
	}).data('smoothState');
});

window.onload=function(){
	if(window.outerWidth > 704 &&  document.querySelectorAll('.blocks').length > 0){
		matrix();
	}

	var wow = new WOW({
		boxClass:     'blocks--element',     
		animateClass: 'fadeInUp',
		offset:       0,         
		mobile:       true,      
		live:         true,      
		callback:     function(box) {
		}
	});
	wow.init();

	if( document.getElementById('map')) {
    	// Provide your access token
    	L.mapbox.accessToken = 'pk.eyJ1Ijoic2FnYWNpZnkiLCJhIjoiSEhlc0Y3OCJ9.oK-VhYtBUvM3zoVMJXekxg';
    	// Create a map in the div #map
    	var map = L.mapbox.map('map', 'sagacify.7274f0f9').setView([50.826609, 4.399905999999987], 16);	
		map.touchZoom.disable();
		map.doubleClickZoom.disable();
		map.scrollWheelZoom.disable();
    }
};