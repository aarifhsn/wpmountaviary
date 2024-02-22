<?php 
/*
*Theme customizar register
*Theme function
*/

function mountaviary_customizer_register ($wp_customize) {

    // USER FRONT INFO
    $wp_customize->add_panel('front_page_theme_option', array(
        'title' => __(' Custom Front Page Template', 'mountaviary'),
        'description' => __('User Front Page Template description', 'mountaviary'),
        'priority' => 100,
    ));
    $wp_customize->add_section('mountaviary_front_area', array(
        'title'    => __('Front Page User Info', 'mountaviary'),
        'panel'     => 'front_page_theme_option',
    ));
    $wp_customize->add_setting( 'front_page_user_info',
    array(
        'type'  => 'option',
        'default'   => 1,
        'sanitize_callback' => 'sanitize_userinfo_checkbox',
    ));
    $wp_customize->add_control('front_page_user_info',
    array(
        'label' => __( 'Display User Info Area', 'mountaviary' ),
        'settings'  => 'front_page_user_info',
        'section'  => 'mountaviary_front_area',
        'type'=> 'checkbox'
    ));
    function sanitize_userinfo_checkbox($checked) {
        return $checked == 1 ? 1 : '';
    }

    $wp_customize->add_setting( 
        'mountavaiary_front_background', 
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default'           => get_template_directory_uri(). '/img/home_bg.png',
        )
    );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mountavaiary_front_background',
	array(
		'label'    => __( 'Upload Background Image', 'mountaviary' ),
		'section'  => 'mountaviary_front_area',
		'settings' => 'mountavaiary_front_background',
	)
    ));

    $wp_customize->add_setting('mountaviary_front_name_text', array(
        'default'        => 'ARIF HASSAN',
        'sanitize_callback' => 'sanitize_text_field',
    ));

	$wp_customize->add_control('mountaviary_front_name', array(
        'label'    => __('Change Name Text', 'mountaviary'),
        'section'  => 'mountaviary_front_area',
        'settings' => 'mountaviary_front_name_text',
        'type'      => 'text',
    ));

    $wp_customize->add_setting('mountaviary_front_span_text', array(
        'default'        => 'HELLO, I AM...',
        'sanitize_callback' => 'sanitize_text_field',
    ));

	$wp_customize->add_control('mountaviary_front_span', array(
        'label'    => __('Change Span Text', 'mountaviary'),
        'section'  => 'mountaviary_front_area',
        'settings' => 'mountaviary_front_span_text',
        'type'      => 'text',
    ));

    $wp_customize->add_setting('mountaviary_front_content', array(
        'default'        => 'I am a Web Developer making a dynamic goal to enrich the web project and working in WordPress, PHP, JavaScript, Lavarel and so on.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

	$wp_customize->add_control('mountaviary_front_about_content_', array(
        'label'    => __('Change Front Content', 'mountaviary'),
        'section'  => 'mountaviary_front_area',
        'settings' => 'mountaviary_front_content',
        'type'      => 'text',
    ));

    $wp_customize->add_setting( 'front_work_portfolio_option',
    array(
        'type'  => 'option',
        'default'   => 1,
        'sanitize_callback' => 'sanitize_front_work_portfolio_option',
    ));
 
    $wp_customize->add_control('front_work_portfolio_option',
    array(
        'label' => __( 'Show Front Page Work and Portfolio Option', 'mountaviary' ),
        'settings'  => 'front_work_portfolio_option',
        'section'  => 'mountaviary_front_area',
        'type'=> 'checkbox'
    ));

    function sanitize_front_work_portfolio_option($checked) {
        return $checked == 1 ? 1 : '';
    }

    // FRONT SOCIAL ICON SETUP

    // Define an array of social media platforms and their corresponding labels
    $social_platforms = array(
        'facebook' => 'Facebook',
        'github' => 'Github',
        'instagram' => 'Instagram',
        'linkedin' => 'linked-in',
        'youtube' => 'Youtube',
        'whatsapp' => 'whatsApp',
        'telegram' => 'Telegram',
        'twitter' => 'Twitter',
        'discord' => 'Discord',
        'email' => 'Email',
        // Add more social platforms as needed
    );

    // Loop through the social platforms and add settings and controls
    foreach ($social_platforms as $platform => $label) {
        $setting_id = "{$platform}_url";
        $wp_customize->add_setting($setting_id, array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        if($platform !== 'whatsapp') {
        $wp_customize->add_control($setting_id, array(
            'label' => sprintf(__('Enter %s URL', 'mountaviary'), $label),
            'section' => 'mountaviary_front_area',
            'type' => 'text',
        ));
        }
        if($platform == 'whatsapp') {
        $wp_customize->add_control($setting_id, array(
            'label' => sprintf(__('Enter %s URL', 'mountaviary'), $label),
            'section' => 'mountaviary_front_area',
            'type' => 'text',
            'description'   => 'Copy the below example & change the number with your number. <span class"block">https://wa.me/01712123456</span>',
        ));
        }

        if($platform == 'email') {
        $wp_customize->add_control($setting_id, array(
            'label' => sprintf(__('Enter your %s Address', 'mountaviary'), $label),
            'section' => 'mountaviary_front_area',
            'type' => 'text',
        ));
        }
    }

    // FRONT PAGE USER ABOUT PAGE SECTION

    $wp_customize->add_section('mountaviary_front_about_area', array(
        'title'    => __('User About Section', 'mountaviary'),
        'panel'     => 'front_page_theme_option',
    ));

    $wp_customize->add_setting('mountaviary_show_about_option', array(
        'default'        => 1,
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_about_section_checkbox',
    ));
	
    $wp_customize-> add_control('mountaviary_show_about_option', array(
        'label'    => __('Show About Section', 'mountaviary'),
        'section'  => 'mountaviary_front_about_area',
        'type'     => 'checkbox'
    ));

    function sanitize_about_section_checkbox($checked) {
        return $checked == 1 ? 1 : '';
    }

    $wp_customize->add_setting( 'mountaviary_about_username_text',
    array(
        'default'   => 'I\'m Arif',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mountaviary_about_username_text',
    array(
        'label' => __( 'User Name', 'mountaviary' ),
        'settings'  => 'mountaviary_about_username_text',
        'section'  => 'mountaviary_front_about_area',
        'type'=> 'text'
    ));

    $wp_customize->add_setting( 'mountaviary_about_user_designation',
    array(
        'default'   => 'A Freelance Web Developer. From Bangladesh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mountaviary_about_user_designation',
    array(
        'label' => __( 'User Designation', 'mountaviary' ),
        'settings'  => 'mountaviary_about_user_designation',
        'section'  => 'mountaviary_front_about_area',
        'type'=> 'text'
    ));
    $wp_customize->add_setting( 'mountaviary_about_user_content',
    array(
        'default'   => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mountaviary_about_user_content',
    array(
        'label' => __( 'Input Your Content', 'mountaviary' ),
        'settings'  => 'mountaviary_about_user_content',
        'section'  => 'mountaviary_front_about_area',
        'type'=> 'text'
    ));

    $wp_customize->add_setting( 
        'mountavaiary_about_profile', 
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default'           => 'https://pixabay.com/get/g5d98e04901ad7b021a34314a0d48208c294242157632fc16dcd54a7f63dc784f3526f53aaa2668ed249f1fcca1912a3b50c6e2e55434a7159df6946739d2faf9_1280.png'
        )
    );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mountavaiary_about_profile',
	array(
		'label'    => __( 'Upload your desired Profile Photo', 'mountaviary' ),
		'section'  => 'mountaviary_front_about_area',
		'settings' => 'mountavaiary_about_profile',
	)
    ));

    //file input sanitization function
    function mountaviary_sanitize_file( $file, $setting ) {
          
        //allowed file types
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png'
        );
          
        //check file type from file name
        $file_ext = wp_check_filetype( $file, $mimes );
          
        //if file has a valid mime type return it, otherwise return default
        return ( $file_ext['ext'] ? $file : $setting->default );
    }

    $wp_customize->add_setting( 'mountaviary_about_resume_link',
    array(
        'default'   => '',
        'sanitize_callback' => 'mountaviary_sanitize_file'
    ));
    $wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'mountaviary_about_resume_link', array(
        'label'             => __('PDF Upload', 'mountaviary'),
        'section'           => 'mountaviary_front_about_area',
        'settings'          => 'mountaviary_about_resume_link'
    )));

    // USER BASIC INFO CUSTOMIZE

    $wp_customize->add_section('mountaviary_user_info_section', array(
        'title'    => __('User Basic Info', 'mountaviary'),
        'panel'     => 'front_page_theme_option',
    ));
    $wp_customize->add_setting('user_birthday',
    array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('user_birthday',
    array(
        'label' => __('Add your Birthday', 'mountaviary'),
        'section'  => 'mountaviary_user_info_section',
        'type'=> 'text'
    ));
    $wp_customize->add_setting('user_age',
    array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('user_age',
    array(
        'label' => __('Add your Age', 'mountaviary'),
        'section'  => 'mountaviary_user_info_section',
        'type'=> 'text'
    ));
    $wp_customize->add_setting('user_address',
    array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('user_address',
    array(
        'label' => __('Add your Address', 'mountaviary'),
        'section'  => 'mountaviary_user_info_section',
        'type'=> 'text'
    ));
    $wp_customize->add_setting('user_email',
    array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('user_email',
    array(
        'label' => __('Add your Email Address', 'mountaviary'),
        'section'  => 'mountaviary_user_info_section',
        'type'=> 'text'
    ));
    $wp_customize->add_setting('user_phone',
    array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('user_phone',
    array(
        'label' => __('Add your Phone Number', 'mountaviary'),
        'section'  => 'mountaviary_user_info_section',
        'type'=> 'text'
    ));
    $wp_customize->add_setting('user_nationality',
    array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('user_nationality',
    array(
        'label' => __('Add your Nationality', 'mountaviary'),
        'section'  => 'mountaviary_user_info_section',
        'type'=> 'text'
    ));
    $wp_customize->add_setting('user_study',
    array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('user_study',
    array(
        'label' => __('Add your Study', 'mountaviary'),
        'section'  => 'mountaviary_user_info_section',
        'type'=> 'text'
    ));
    $wp_customize->add_setting('user_degree',
    array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('user_degree',
    array(
        'label' => __('Add your Education', 'mountaviary'),
        'section'  => 'mountaviary_user_info_section',
        'type'=> 'text'
    ));
    $wp_customize->add_setting('user_interest',
    array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('user_interest',
    array(
        'label' => __('Add your Interest', 'mountaviary'),
        'section'  => 'mountaviary_user_info_section',
        'type'=> 'text'
    ));
    $wp_customize->add_setting('user_freelance',
    array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('user_freelance',
    array(
        'label' => __('Add Freelance. Available or Not', 'mountaviary'),
        'section'  => 'mountaviary_user_info_section',
        'type'=> 'text'
    ));


	// FOOTER BOTTOM TEXT CUSTOMIZE 
	$wp_customize->add_section('mountaviary_footer_area', array(
        'title'    => __('Footer Area', 'mountaviary'),
        'description' => 'Change Footer Text.',
    ));

    $wp_customize->add_setting('mountaviary_footer_text', array(
        'default'        => 'All Rights Reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
	
    $wp_customize-> add_control('mountaviary_footer_text', array(
        'label'    => __('Footer Text', 'mountaviary'),
        'section'  => 'mountaviary_footer_area',
        'settings' => 'mountaviary_footer_text',
        'type'      => 'text',
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
        'panel'     => 'front_page_theme_option',
    ));
    $wp_customize->add_setting('mountaviary_show_portfolio_option', array(
        'default'        => 1,
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_portfolio_section_checkbox',
    ));
	
    $wp_customize-> add_control('mountaviary_show_portfolio_option', array(
        'label'    => __('Show Portfolio Section', 'mountaviary'),
        'section'  => 'mountaviary_portfolio_front_page_area',
        'type'     => 'checkbox'
    ));

    function sanitize_portfolio_section_checkbox($checked) {
        return $checked == 1 ? 1 : '';
    }

    $wp_customize->add_setting('mountaviary_portfolio_title_text', array(
        'default'        => 'PORTFOLIO',
        'sanitize_callback' => 'sanitize_text_field',
    ));
	
    $wp_customize-> add_control('mountaviary_portfolio_title_text', array(
        'label'    => __('Portfolio Title Text', 'mountaviary'),
        'section'  => 'mountaviary_portfolio_front_page_area',
        'settings' => 'mountaviary_portfolio_title_text',
        'type'      => 'text',
    ));

    $wp_customize->add_setting('mountaviary_portfolio_subtitle', array(
        'default'        => 'A few recent design and coding projects',
        'sanitize_callback' => 'sanitize_text_field',

    ));
	
    $wp_customize-> add_control('mountaviary_portfolio_subtitle_control', array(
        'label'    => __('Portfolio Sub Title', 'mountaviary'),
        'section'  => 'mountaviary_portfolio_front_page_area',
        'settings' => 'mountaviary_portfolio_subtitle',
        'type'      => 'text',
    ));


    // SERVICES CUSTOM POSTS TYPE AREA 

    $wp_customize->add_section('mountaviary_services_front_page_area', array(
        'title'    => __('Front Page Service Section', 'mountaviary'),
        'description' => 'Change Services Area Text.',
        'panel'     => 'front_page_theme_option',
    ));

    // Option to show or hide section
    $wp_customize->add_setting('mountaviary_show_service_option', array(
        'default'        => 1,
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_service_section_checkbox',
    ));
    $wp_customize-> add_control('mountaviary_show_service_option', array(
        'label'    => __('Show Service Section', 'mountaviary'),
        'section'  => 'mountaviary_service_front_page_area',
        'type'     => 'checkbox'
    ));
    function sanitize_service_section_checkbox($checked) {
        return $checked == 1 ? 1 : '';
    }

    $wp_customize->add_setting('mountaviary_service_title_text', array(
        'default'        => 'SERVICES',
        'sanitize_callback' => 'sanitize_text_field',

    ));
	
    $wp_customize-> add_control('mountaviary_service_title_text', array(
        'label'    => __('Services Title Text', 'mountaviary'),
        'section'  => 'mountaviary_services_front_page_area',
        'settings' => 'mountaviary_service_title_text',
        'type'      => 'text',
    ));

    $wp_customize->add_setting('mountaviary_services_subtitle', array(
        'default'        => 'What I can Support',
        'sanitize_callback' => 'sanitize_text_field',

    ));
	
    $wp_customize-> add_control('mountaviary_services_subtitle_control', array(
        'label'    => __('Services Sub Title', 'mountaviary'),
        'section'  => 'mountaviary_services_front_page_area',
        'settings' => 'mountaviary_services_subtitle',
        'type'      => 'text',
    ));

    // CUSTOM FRONT PAGE BLOG AREA CUSTOMIZE

    $wp_customize->add_section('mountaviary_front_blog_area', array(
        'title'    => __('User Blog Section', 'mountaviary'),
        'panel'     => 'front_page_theme_option',
    ));
    // Option to show or hide section
    $wp_customize->add_setting('mountaviary_show_blog_option', array(
        'default'        => 1,
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_blog_section_checkbox',
    ));
    $wp_customize-> add_control('mountaviary_show_blog_option', array(
        'label'    => __('Show Blog Section', 'mountaviary'),
        'section'  => 'mountaviary_front_blog_area',
        'type'     => 'checkbox'
    ));
    function sanitize_blog_section_checkbox($checked) {
        return $checked == 1 ? 1 : '';
    }
    // CUSTOM FRONT PAGE BLOG POSTS NUMBER
    $wp_customize->add_setting( 'front_blog_post_count',
    array(
        'default'        => 6,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('front_blog_post_count',
    array(
        'label' => __( 'Number of Posts to display', 'mountaviary' ),
        'section'  => 'mountaviary_front_blog_area',
        'type'=> 'number'
    ));


    // CUSTOM FRONT PAGE CONTACT AREA CUSTOMIZE

    $wp_customize->add_section('mountaviary_front_contact_area', array(
        'title'    => __('User Contact Section', 'mountaviary'),
        'panel'     => 'front_page_theme_option',
    ));
    // Option to show or hide section
    $wp_customize->add_setting('mountaviary_show_contact_option', array(
        'default'        => 1,
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_contact_section_checkbox',
    ));
    $wp_customize-> add_control('mountaviary_show_contact_option', array(
        'label'    => __('Show Contact Section', 'mountaviary'),
        'section'  => 'mountaviary_front_contact_area',
        'type'     => 'checkbox'
    ));
    function sanitize_contact_section_checkbox($checked) {
        return $checked == 1 ? 1 : '';
    }

    $wp_customize->add_setting( 'mountaviary_front_contact_page_title',
    array(
        'default'   => 'Find Me Here',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mountaviary_front_contact_page_title',
    array(
        'label' => __( 'Contact Area Title', 'mountaviary' ),
        'section'  => 'mountaviary_front_contact_area',
        'type'=> 'text'
    ));
    $wp_customize->add_setting( 'mountaviary_frontpage_map_url',
    array(
        'default'   => 'https://www.google.com/maps/embed/v1/place?q=Dhaka,+Bangladesh&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('mountaviary_frontpage_map_url',
    array(
        'label' => __( 'Paste your embeded-map source code', 'mountaviary' ),
        'description' => __('Paste only the src code here', 'mountaviary'),
        'section'  => 'mountaviary_front_contact_area',
        'type'=> 'url'
    ));

    // USER CONTACT INFO 
    $wp_customize->add_setting( 'mountaviary_front_contact_page_phone',
    array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mountaviary_front_contact_page_phone',
    array(
        'label' => __( 'Add your Contact Number', 'mountaviary' ),
        'section'  => 'mountaviary_front_contact_area',
        'type'=> 'text'
    ));
    $wp_customize->add_setting( 'mountaviary_front_contact_page_email',
    array(
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('mountaviary_front_contact_page_email',
    array(
        'label' => __( 'Add your email', 'mountaviary' ),
        'section'  => 'mountaviary_front_contact_area',
        'type'=> 'email'
    ));
    $wp_customize->add_setting( 'mountaviary_front_contact_page_location_text',
    array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mountaviary_front_contact_page_location_text',
    array(
        'label' => __( 'Add Address', 'mountaviary' ),
        'section'  => 'mountaviary_front_contact_area',
        'type'=> 'text'
    ));

}

add_action( 'customize_register', 'mountaviary_customizer_register' );