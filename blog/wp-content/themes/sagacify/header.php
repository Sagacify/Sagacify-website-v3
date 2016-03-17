<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php if ( is_category() ) {
    echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
} elseif ( is_tag() ) {
    echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
} elseif ( is_archive() ) {
    wp_title(''); echo ' Archive | '; bloginfo( 'name' );
} elseif ( is_search() ) {
    echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
} elseif ( is_home() || is_front_page() ) {
    bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
}  elseif ( is_404() ) {
    echo 'Error 404 Not Found | '; bloginfo( 'name' );
} elseif ( is_single() ) {
    wp_title('');
} else {
    echo wp_title( ' | ', false, right ); bloginfo( 'name' );
} ?></title>


<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@sagacify">
<meta name="twitter:title" content="Blog - Sagacify">
<meta name="twitter:description" content="Sagacify creates smart data-driven solutions to solve the challenges of the digital age.">
<meta name="twitter:creator" content="@sagacify">
<meta name="twitter:image" content="http://sagacify.com/<?php bloginfo('template_directory');?>/img/social/twitter.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Blog - Sagacify" />
<meta property="og:type" content="Website" />
<meta property="og:url" content="http://sagacify.com/" />
<meta property="og:image" content="http://sagacify.com/<?php bloginfo('template_directory');?>/img/social/facebook.jpg" />
<meta property="og:description" content="Sagacify creates smart data-driven solutions to solve the challenges of the digital age." />
<meta property="og:site_name" content="Sagacify" />
	
	<!-- Viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1">	
	<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory');?>/img/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory');?>/img/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/img/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory');?>/img/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/img/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory');?>/img/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory');?>/img/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory');?>/img/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/img/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/img/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/img/favicons/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/img/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/img/favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/img/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php bloginfo('template_directory');?>/img/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php bloginfo('template_directory');?>/img/favicons/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">	

	<!-- Stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/application.css">
<script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.css' rel='stylesheet' />
<?php wp_head(); ?>
</head>
<body>

	<header class="header">
	<div class="header--navbutton clearfix">
		<h1 class="header--navbutton--logo">
			<a href="index" title="Sagacify website">
				<img src="<?php bloginfo('template_directory');?>/img/base/Logo.svg" alt="Sagacify's logo" class="header--logo--thelogo">
			</a>
		</h1>
		<a href="#" class="header--navbutton--rdicon">
			<span></span>
			<span></span>
			<span></span>
		</a>
	</div>
	<nav class="navigation">
	<ul class="navigation--list">
		<li class="navigation--list--element">
			<a href="index" title="Welcome to Sagacify website">home</a>		</li>
		<li class="navigation--list--element">
			<a href="about-us" title="About Sagacify">about us</a>		</li>
		<li class="navigation--list--element">
			<a href="solutions" title="Solutions of Sagacify">solutions</a>		</li>
		<li class="navigation--list--element">
			<a href="/blog" class="selected" title="Our blog">blog</a>		</li>
		<li class="navigation--list--element">
			<a href="products" title="products Sagacify">products</a>		</li>
		<li class="navigation--list--element">
			<a href="contact" title="Contact Sagacify">contact</a>		</li>
	</ul>
</nav></header>