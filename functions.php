<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


/**
 * Theme Title
 */

add_theme_support('title-tag');
add_theme_support( 'post-thumbnails');
add_theme_support( 'custom-header');
add_theme_support( 'custom-background');

include_once ('inc/enqueue_scripts.php');
include_once ('inc/customizer.php');
include_once ('inc/register_menu.php');
include_once ('inc/widget.php');
include_once ('inc/metabox.php');
include_once ('inc/hook.php');
include_once ('inc/custom_posts.php');