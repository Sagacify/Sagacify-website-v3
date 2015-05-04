//Distance from top
var scrolltop = window.pageYOffset,
bodyH = document.body,
htmlH = document.documentElement;

window.onscroll=function(){
	scrolltop = window.pageYOffset
	var height = Math.max( bodyH.scrollHeight, bodyH.offsetHeight, htmlH.clientHeight, htmlH.scrollHeight, htmlH.offsetHeight );
	var scrollPercentage = parseInt( 100 * scrolltop / (height - window.innerHeight) );

	//Get all element for the parralax effect
	var elemPara = document.querySelectorAll('[data-parralax]');
	Array.prototype.forEach.call(elemPara, function(el, i){
		var bottom_of_object = el.offsetTop + el.offsetHeight;
		var bottom_of_window = window.pageYOffset + window.innerHeight + 150;
		var speedi = ( el.dataset.parralax != 0 ) ? el.dataset.parralax : 1;
		if( bottom_of_window > bottom_of_object ){
			el.style.transform =
			"translate3d(0, " + scrollPercentage * speedi + "px, 0)";
		}
	});
};