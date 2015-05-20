$.get('/php/moderate_instafeed.php', function(data) {
	
}).done(function(data) {
	$('#instafeed').append(data);
});



$('body').on('click', 'button.refuse, button.accept', function(event) {
	event.preventDefault();
	var id_photo = $(this).data('id');
	var state = 0;
	var this_element = $(this);
	if($(this).hasClass('accept')){
		state = 1;
	}else if($(this).hasClass('refuse')){
		state = 2;
	}
	$.post('/php/update_instafeed.php', 
		{
		id_photo : id_photo,
		state : state
		},
		function(data, textStatus, xhr) {
			if(data == true){
				this_element.parent().slideUp( 200, function() {
					this.remove();
				});
			}else{
				console.log(data);
			}
		}
	);
});