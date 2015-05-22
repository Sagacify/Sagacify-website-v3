var collumns = 40;
var widthDocument = document.querySelector(".header").offsetWidth;
var gutterSize = widthDocument / collumns;
var percent = 100 / collumns;
var checkOp = 0;

function getHeight(argument) {
	var heightCount = 0,
	args = argument.querySelectorAll('.data--count');
	Array.prototype.forEach.call(args, function(el, i){
		heightCount += parseInt(el.offsetHeight);
	});
	return heightCount + gutterSize + "px";
}

function matrix(){
	if(window.outerWidth > 704 &&  document.querySelectorAll('.blocks').length > 0){
	//Move each .block--element on the good position and give good width
		var elem = document.querySelectorAll('.blocks--element');
		Array.prototype.forEach.call(elem, function(el, i){
			el.style.left = el.dataset.left * percent + "%";
			el.style.width = el.dataset.width * percent + "%";
		});

		//Get all .blocks
		var element = document.querySelectorAll('.blocks');
		Array.prototype.forEach.call(element, function(el, i){

			//Give the block a height and margin-bottom
			el.style.height = getHeight(el);
			el.style.marginBottom = gutterSize + "px";

			//Reset the previous height for left and right
			var heighetElementLeft = 0,
			heighetElementRight = 0;

			//Move element on top for left and right
			var dataLeft = el.querySelectorAll('.data-left');
			Array.prototype.forEach.call(dataLeft, function(el, i){
				if(el.hasAttribute('data-reset')){
					heighetElementLeft = 0;
				}
				el.style.top = heighetElementLeft + ( el.dataset.top * gutterSize) + "px";
				heighetElementLeft += el.offsetHeight;
			});

			var dataRight = el.querySelectorAll('.data-right');
			Array.prototype.forEach.call(dataRight, function(el, i){
				el.style.top = heighetElementRight + ( el.dataset.top * gutterSize) + "px";
				heighetElementRight += el.offsetHeight;
			});
		});

	}
	/* ---------------- INIT THE MAP ---------------- */	
	showMap();
	console.log(checkOp);
	if (checkOp == 0) {
		$('#smooth').addClass('is-coming');
		checkOp = 1;
	};
	console.log(checkOp);
}