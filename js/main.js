var timeOut;
$(document).ready(function () {
	
	/* ----------------- NAVIGATION TOGGLE ----------------- */
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

	/* ----------------- SMOOTHSTATE ----------------- */
	var content   = $('#smooth').smoothState({
		prefetch: true,
		pageCacheSize: 4,
		onStart: {
			duration: 700,
			render: function (url, $container) {
				content.toggleAnimationClass('is-exiting');
			}
		},
		onEnd: {
			duration: 50,
			render: function(url, $container, $content){
				document.body.scrollTop = 0;
				$container.html($content);
			}
		},
		callback : function(url, $container, $content) {
			getInstagram();
			matrix();
			pathName();
			timeOut =  window.setTimeout( function() { content.toggleAnimationClass('is-coming'); }, 800);
		}
	}).data('smoothState');
});

window.onload=function(){

	/* ---------------- INIT THE GRID ---------------- */
	matrix();
	pathName();
	getInstagram();

	/* ---------------- INIT WOW.JS ---------------- */	
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

	var waw = new WOW({
		boxClass:     'blocks--image',     
		animateClass: 'fade',
		offset:       0,         
		mobile:       true,      
		live:         true,      
		callback:     function(box) {
		}
	});
	waw.init();

	var waw = new WOW({
		boxClass:     'blocks--iconbig',     
		animateClass: 'fade',
		offset:       0,         
		mobile:       true,      
		live:         true,      
		callback:     function(box) {
		}
	});
	waw.init();
};