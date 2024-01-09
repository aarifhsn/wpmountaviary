<?php 
/*
*Theme customizar register
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



    // PORTFOLIO CUSTOM POSTS TYPE AREA 

    $wp_customize->add_section('mountaviary_portfolio_front_page_area', array(
        'title'    => __('Front Page Portfolio Section', 'mountaviary'),
        'description' => 'Change Footer Text.',
    ));

    $wp_customize->add_setting('mountaviary_portfolio_title_text', array(
        'default'        => 'PORTFOLIO',

    ));
	
    $wp_customize-> add_control('mountaviary_portfolio_title_text', array(
        'label'    => __('Portfolio Title Text', 'mountaviary'),
        'section'  => 'mountaviary_portfolio_front_page_area',
        'settings' => 'mountaviary_portfolio_title_text',
    ));

    $wp_customize->add_setting('mountaviary_portfolio_subtitle', array(
        'default'        => 'A few recent design and coding projects',

    ));
	
    $wp_customize-> add_control('mountaviary_portfolio_subtitle_control', array(
        'label'    => __('Portfolio Sub Title', 'mountaviary'),
        'section'  => 'mountaviary_portfolio_front_page_area',
        'settings' => 'mountaviary_portfolio_subtitle',
    ));
}

add_action( 'customize_register', 'mountaviary_customizer_register' );