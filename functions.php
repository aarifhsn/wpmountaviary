<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Theme Title
 */

add_theme_support('title-tag');

/**
 * Enqueue scripts and styles.
 */
function mountaviary_scripts() {
	
	wp_enqueue_style('tailwind_css', get_template_directory_uri() . './dist/output.css', array(), '3.4.0');

	wp_enqueue_style( 'mountaviary-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js', array(), '6.5.1', true );

	wp_enqueue_style( 'mountaviary_google_fonts', 'https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,800&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'mountaviary_scripts' );