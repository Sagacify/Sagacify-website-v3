$(document).ready(function () {
	
	// Navigation toggle
	$('body').on('click', '.header--navbutton--rdicon', function(event) {
		event.preventDefault();
		$(this).toggleClass('active');
		$('.navigation').toggleClass('active');
	});

	//sagacify.7274f0f9
});