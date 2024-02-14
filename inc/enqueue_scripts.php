
<?php

/**
 * Enqueue scripts and styles.
 */
function mountaviary_scripts() {
	
	// enqueue tailwind css 
	wp_register_style('tailwind_css', get_template_directory_uri() . './dist/output.css', array(), '3.4.0');
	wp_enqueue_style('tailwind_css');

	// enqueue font-awesome
	wp_register_style('font-awesome-all', get_template_directory_uri() . '/inc/fontawesome-css/all.min.css', array(), '6.5.1');
	wp_enqueue_style('font-awesome-all');

	// enqueue theme stylesheet
	wp_enqueue_style( 'mountaviary-style', get_stylesheet_uri(), array(), _S_VERSION );

	// enqueue google fonts
	wp_register_style( 'mountaviary_google_fonts', 'https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,800&display=swap', false );
	
	wp_enqueue_style( 'mountaviary_google_fonts');

	// enqueue dashicons 
	wp_enqueue_style( 'dashicons' );

	wp_enqueue_script( 'mountaviary_script', get_template_directory_uri(  ). '/src/scripts.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && ( get_option( 'thread_comments' ) ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'mountaviary_scripts' );