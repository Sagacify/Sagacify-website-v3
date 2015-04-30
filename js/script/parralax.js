window.onscroll=function(){
	$('[data-parralax]').each(function(index, el) {
		$(this).css({
			"transform":"translate3d(-"+ $(this).data('parralax') * 20 +"px," + $(this).data('parralax') * 20 +"px, 0)"
		});​
	});
};

$('.blocks--element').on(
	"transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd",function() {
		console.log('odod');
		$(this).removeClass("fadeInUp");
	});