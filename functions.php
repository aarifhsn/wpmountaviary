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
	
	wp_register_style('tailwind_css', get_template_directory_uri() . './dist/output.css', array(), '3.4.0');
	wp_enqueue_style('tailwind_css');

	wp_enqueue_style( 'mountaviary-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_register_script( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js', array(), '6.5.1', true );
	wp_enqueue_script( 'fontawesome' );

	
	wp_register_style( 'mountaviary_google_fonts', 'https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,800&display=swap', false );
	wp_enqueue_style( 'mountaviary_google_fonts');

	wp_enqueue_script( 'mountaviary_script', get_template_directory_uri(  ). '/src/scripts.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'mountaviary_scripts' );


/*
*Theme logo customizar register
*Theme function
*/

function mountaviary_customizer_register ($wp_customize) {

	// HEADER LOGO 
    $wp_customize->add_section('mountaviary_sidebar_area', array(
        'title'    => __('Sidebar Area', 'mountaviary'),
        'description' => 'Change your desired logo.',
    ));

    $wp_customize->add_setting('mountaviary_sidebar_logo', array(
        'default'        => get_bloginfo('template_directory').'/img/profile.webp',
    ));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mountaviary_sidebar_logo', array(
        'label'    => __('Logo Upload', 'mountaviary'),
        'section'  => 'mountaviary_sidebar_area',
        'settings' => 'mountaviary_sidebar_logo',
    )));

    // USER FRONT INFO

    $wp_customize->add_section('mountaviary_front_area', array(
        'title'    => __('User Front Info', 'mountaviary'),
    ));

    $wp_customize->add_setting('mountaviary_front_name_text', array(
        'default'        => 'ARIF HASSAN',
    ));

	$wp_customize->add_control('mountaviary_front_name', array(
        'label'    => __('Change Name Text', 'mountaviary'),
        'section'  => 'mountaviary_front_area',
        'settings' => 'mountaviary_front_name_text',
    ));

    $wp_customize->add_setting('mountaviary_front_span_text', array(
        'default'        => 'HELLO, I AM...',
    ));

	$wp_customize->add_control('mountaviary_front_span', array(
        'label'    => __('Change Span Text', 'mountaviary'),
        'section'  => 'mountaviary_front_area',
        'settings' => 'mountaviary_front_span_text',
    ));

    $wp_customize->add_setting('mountaviary_front_content', array(
        'default'        => 'I am a Web Developer making a dynamic goal to enrich the web project and working in WordPress, PHP, JavaScript, Lavarel and so on.',
    ));

	$wp_customize->add_control('mountaviary_front_about_content_', array(
        'label'    => __('Change Front Content', 'mountaviary'),
        'section'  => 'mountaviary_front_area',
        'settings' => 'mountaviary_front_content',
    ));


    $wp_customize->add_setting( 'front_work_portfolio_option',
    array(
        'type'  => 'option',
        'default'   => 1,
        'sanitize_callback' => 'sanitize_front_checkbox',
        
    ));
 
    $wp_customize->add_control( 'front_work_portfolio_option',
    array(
        'label' => __( 'Show Front Page Work and Portfolio Option', 'mountaviary' ),
        'settings'  => 'front_work_portfolio_option',
        'section'  => 'mountaviary_front_area',
        'type'=> 'checkbox'
    ));

    function sanitize_front_checkbox($checked) {
        return $checked == 1 ? 1 : '';
    }

    // FRONT SOCIAL ICON SETUP

     /**
     * Social Media icon helper functions
     */
    function mountaviary_get_social_sites() {
    
        // Store social site names in array
        $social_sites = array(
            'twitter', 
            'facebook', 
            'google-plus',
            'flickr',
            'pinterest', 
            'youtube',
            'vimeo',
            'tumblr',
            'dribbble',
            'rss',
            'linkedin',
            'instagram',
            'email'
        );
    return $social_sites;
    }

    $social_sites = mountaviary_get_social_sites();
    $priority = 5;

    foreach( $social_sites as $social_site) {

        $wp_customize->add_setting($social_site, array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control( $social_site, array(
            'label' => ucwords( __( "$social_site URL:", 'social_icon' ) ),
            'section' => 'mountaviary_front_area',
            'type' => 'text',
            'priority' => $priority,
        ));
        $priority += 5;
    }

   


	// FOOTER BOTTOM TEXT CUSTOMIZE 

	$wp_customize->add_section('mountaviary_footer_area', array(
        'title'    => __('Footer Area', 'mountaviary'),
        'description' => 'Change Footer Text.',
    ));

    $wp_customize->add_setting('mountaviary_footer_text', array(
        'default'        => 'All Rights Reserved.',

    ));
	
    $wp_customize-> add_control('mountaviary_footer_text_control', array(
        'label'    => __('Footer Text', 'mountaviary'),
        'section'  => 'mountaviary_footer_area',
        'settings' => 'mountaviary_footer_text',
    ));

    $wp_customize->add_setting('mountaviary_footer_option_setting', array(
        'default'        => 1,
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_footer_checkbox',
    ));
	
    $wp_customize-> add_control('mountaviary_footer_option_control', array(
        'label'    => __('Show Copyright Option', 'mountaviary'),
        'section'  => 'mountaviary_footer_area',
        'settings' => 'mountaviary_footer_option_setting',
        'type'     => 'checkbox'
    ));

    function sanitize_footer_checkbox($checked) {
        return $checked == 1 ? 1 : '';
    }
}

add_action( 'customize_register', 'mountaviary_customizer_register' );


/*
* Register Menus
*/

if ( ! function_exists( 'mountaviary_register_nav_menu' ) ) {

	function mountaviary_register_nav_menu(){
		register_nav_menus( array(
	    	'screen_menu' => __( 'Screen Menu', 'mountaviary' ),
	    	'footer_menu'  => __( 'Footer Menu', 'mountaviary' ),
		) );
	}
	add_action( 'after_setup_theme', 'mountaviary_register_nav_menu', 0 );
}

// adding nav menu li class

function nav_menu_list_class($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'nav_menu_list_class', 1, 3);

// Adding nav menu anchor (a) class

function nav_menu_anchor_class($atts, $item, $args) {
    if(isset($args->nav_anchor_class)) {
        $atts['class'] = $args->nav_anchor_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'nav_menu_anchor_class', 1, 3);


// walker nav menu description 

function mountaviary_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( $args->link_after . '</a>', '<span class="font-sm text-slate-500 ml-2 lowercase block">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
    }
 
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'mountaviary_nav_description', 10, 4 );

// excerpt length
// function mpuntaviary_excerpt_length( $length ) {
//     return 15;
// }
// add_filter( 'excerpt_length', 'mpuntaviary_excerpt_length');

// Post Excerpt (Read More) Support 
function mountaviary_post_excerpt() {
    global $post;
    return '<a class="block mt-4 text-slate-700 hover:text-slate-900 duration-75" href="'. get_permalink($post->ID). ' ">' . 'Read More...' . '</a>';
}
add_filter( 'excerpt_more', 'mountaviary_post_excerpt' );


// REGISTERING WIDGET

function mountaviary_register_widgets() {
	
    register_sidebar( array(
        'name' => __( 'Right Sidebar', 'mountaviary' ),
        'id' => 'right_sidebar',
        'before_widget' => '<div class="single_widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget_title"><h2>',
        'after_title' => '</h2></div>',
    ) );
    
    //register_widget( 'popular_post' );
}
add_action( 'widgets_init', 'mountaviary_register_widgets' );



// METABOX CMB2

require_once __DIR__ . '/metabox/init.php';


add_action( 'cmb2_admin_init', 'mountaviary_cmb2_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function mountaviary_cmb2_metaboxes() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'test_metabox',
		'title'         => __( 'Test Metabox', 'cmb2' ),
		'object_types'  => array( 'page', 'post' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Sub Title', 'cmb2' ),
		'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => 'subtitle',
		'type'       => 'text',
		//'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );

	// URL text field
	$cmb->add_field( array(
		'name' => __( 'Website URL', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'web_url',
		'type' => 'text_url',
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	// Email text field
	$cmb->add_field( array(
		'name' => __( 'Set Color', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'meta_color',
		'type' => 'colorpicker',
		// 'repeatable' => true,
	) );

	// Add other metaboxes as needed

}