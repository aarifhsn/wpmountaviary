<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Essential theme supports
 * */
function mountaviary_theme_setup(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);

    /**
     * Enable support for Post Thumbnails on posts and pages
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     *
     * Enable support for Post Formats
     */
    add_theme_support( 'post-thumbnails', array( 'post', 'page', 'mav_portfolio') );
	
	//set_post_thumbnail_size( 200, 200, true ); // Normal post thumbnails, hard crop mode
	
	add_image_size( 'media_thumb', 420, 420, true );
	add_image_size( 'post_temp', 420, 380, true );
	//add_image_size( 'post-full-image', 9999, 500, false);

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    /** custom background **/
    $bg_defaults = array(
        'default-color'          => 'F8FAFC',
        'default-image'          => '',
        'default-preset'         => 'default',
        'default-size'           => 'cover',
        'default-repeat'         => 'no-repeat',
        'default-attachment'     => 'scroll',
    );
    add_theme_support( 'custom-background', $bg_defaults );

    /** custom header **/
    $header_defaults = array(
        'default-image'          => '',
        'width'                  => 300,
        'height'                 => 60,
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '#333',
        'header-text'            => true,
        'uploads'                => true,
    );
    add_theme_support( 'custom-header', $header_defaults );

    /** custom logo **/
    add_theme_support( 'custom-logo', array(
        'height'      => 300,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

	add_theme_support( "wp-block-styles" );
	add_theme_support( "responsive-embeds" );
	add_theme_support( "align-wide" );

}
add_action('after_setup_theme','mountaviary_theme_setup');

include_once ('inc/enqueue_scripts.php');
include_once ('inc/customizer.php');
include_once ('inc/register_menu.php');
include_once ('inc/widget.php');
include_once ('inc/metabox.php');
include_once ('inc/hook.php');
include_once ('inc/custom_posts.php');
require ('inc/customizer_panel.php');

//--------- All CPT ---------------- //

require_once get_template_directory() . '/inc/plugins/main.php';
