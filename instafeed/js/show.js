$.get('/php/show_instafeed.php', function(data) {
	
}).done(function(data) {
	$('#instafeed').append(data);
});