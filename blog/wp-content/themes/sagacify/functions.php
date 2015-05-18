<?php

	// Images à la une
	add_theme_support( 'post-thumbnails' );

	// Enlever les attributs height,width sur les images
	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

	function remove_width_attribute( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return $html; 
	}

	// Recadrage images à la une
	add_image_size( 'thumbnail', 700, 250, true );
	add_image_size( 'fullsize', 800, 300, true );
	add_image_size( 'prevnext-thumbnails', auto, 155, true );

	if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'name' => 'Social',
'id' => 'social'
)); }

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');