var number_image = 0;


/* Init Instagram feed */



var feed = new Instafeed({
	// get: 'tagged',
	// tagName: 'sagacify',
	get: 'user',
	userId : 1230988578,
	accessToken : '1230988578.467ede5.b594ac78ce2e4bfca4850a98b79c888d',
	clientId: 'ef2d5aa309194730bafedd6272ce196d',
	limit : 60,
	template: '<a class="animation" href="{{link}}"><img src="{{image}}" /><br>{{model.created_time}}</a>',
	resolution: 'standard_resolution',
	sortBy : 'most-recent',
	mock : true,
	success: function(feed) {
		/* Get data from the DB*/
		$.get('/php/crawler_instafeed.php', function(data) {
			
		}).done(function(data) {
			console.log(data);
			//Get our data to a JSON usable array
			the_array = $.parseJSON(data);
			var caption = '';
			$.each( feed.data, function( key, value ) {
				//Check if the entered data already exist
				caption = value.caption.text;
				if (!($.inArray(value.id, the_array) > -1)) {				
					post_image(
						value.id, 
						value.link, 
						value.images.standard_resolution.url,
						value.images.low_resolution.url,
						caption, 
						value.user.username, 
						value.user.profile_picture, 
						value.created_time
					)
					number_image++;
				}
			});
			check_if_next();

		});//End done ajax
	}//End success
});

function check_if_next(){
	if(feed.hasNext()){
		feed.next();
		$('body').append('<h2>Still parsing images from Instagram</h2><br>');
	}else{
		$('body').append('<h2>I\'m fucking done dude!</h2><br>');
		$('body').append('<h2>' + number_image + ' image(s) added to the Database</h2>');
	}
}


function post_image(id_photo, url, img, img_small, caption, user, user_photo, date_photo){
	$.post('/php/post_instafeed.php',
	{
		id_photo : id_photo,
		url : url,
		img : img,
		img_small : img_small,
		caption : caption,
		user : user,
		user_photo : user_photo,
		date_photo : date_photo
	},function(data, textStatus, xhr) {
		console.log(data);
	});
}

feed.run();