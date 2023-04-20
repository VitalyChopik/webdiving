<?php
// Enqueue scripts and styles.
function px_site_scripts()
{
	// Load our main stylesheet.
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/dist/css/style.min.css' );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/dist/js/app.min.js', array(), null, true );
	wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'px_site_scripts' );





