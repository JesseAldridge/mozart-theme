<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Erica+One|Roboto|Roboto+Slab" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<div class='menu closed'>
	  <div class='option close'>
	    <i class="fas fa-window-close"></i>
	  </div>
	  <a href="https://preply.com/en/skype/tutors-piano"><div class='option'>PIANO TUTORING</div></a>
	  <a href="http://eepurl.com/gcDgY5"><div class='option'>MAILING LIST</div></a>
	</div>

	<div class='topbar'><a href="https://preply.com/en/skype/tutors-piano">🎶 SIGN UP FOR PIANO TUTORING TODAY 🎶</a></div>

	<header id="masthead" class="site-header">
	  <div class='second-bar'>
	    <i class="fas fa-bars menu-button"></i>
	    <div class='second-bar-main'>
	      <div class='title'><?php bloginfo( 'name' ); ?></div>
	    </div>
	  </div>

	  <div class='img-container'>
	  	<img class='splash-img'
	  	     src="<?php bloginfo('template_directory'); ?>/images/violinist-wide.jpeg">
	    <img class='img-play-overlay'
	    		 src="<?php bloginfo('template_directory'); ?>/images/btn-play-hover.png">
	  </div>

	  <div class='video-overlay closed'>
	    <div id="player"></div>
	  </div>

	  <div class='subscribe-row'>
	    <a href="http://eepurl.com/gcDgY5"><div class='subscribe-button'>Subscribe</div></a>
	  </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
