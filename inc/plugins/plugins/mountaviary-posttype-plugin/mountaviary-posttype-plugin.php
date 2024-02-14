<?php
/**
 * @package Mountaviary
 */
/*
    Plugin Name: Mountavaiary Custom Posts Plugin
    Plugin URI: https://mountaviary.com/
    Description: Declares a plugin that will create a custom post type displaying Custom Template.
    Version: 1.0.0
    Requires at least: 5.8
    Requires PHP: 5.6.20
    Author: Arif Hassan 
    Author URI: https://mountaviary.com/
    License: GPLv2 or later
    Text Domain: mountaviary
    */
 
 /**
  * Register a custom post type called "benefit".
  *
  * @see get_post_type_labels() for label keys.
  */
 
 function mountaviary_custom_posts_init() {
 
    register_post_type( 'mav_portfolio',
       array (
           'labels' => array(
             'name'                  => __( 'Portfolio', 'mountaviary' ),
             'singular_name'         => __( 'Portfolio', 'mountaviary' ),
             'add_new'               => __( 'Add New', 'mountaviary' ),
             'add_new_item'          => __( 'Add New Portfolio', 'mountaviary'),
             'new_item'              => __( 'New Portfolio', 'mountaviary' ),
             'edit_item'             => __( 'Edit Portfolio', 'mountaviary' ),
             'view_item'             => __( 'View Portfolio', 'mountaviary' ),
             'all_items'             => __( 'All Portfolio', 'mountaviary' ),
             ),
          'menu_icon'          => 'dashicons-portfolio',
          'public'             => true, 
          'rewrite'            => array( 'slug' => 'portfolio' ),
          'capability_type'    => 'post',
          'menu_position'      => 6,
          'supports'           => array( 'title', 'thumbnail','editor'),
       )
    );
 
    register_post_type( 'mav_service',
       array (
           'labels' => array(
             'name'                  => __( 'Services', 'mountaviary' ),
             'singular_name'         => __( 'Service', 'mountaviary' ),
             'add_new'               => __( 'Add New', 'mountaviary' ),
             'add_new_item'          => __( 'Add New Service', 'mountaviary'),
             'new_item'              => __( 'New Service', 'mountaviary' ),
             'edit_item'             => __( 'Edit Service', 'mountaviary' ),
             'view_item'             => __( 'View Service', 'mountaviary' ),
             'all_items'             => __( 'All Service', 'mountaviary' ),
             ),
          'menu_icon'          => 'dashicons-index-card',
          'public'             => true, 
          'rewrite'            => array( 'slug' => 'service' ),
          'capability_type'    => 'post',
          'menu_position'      => 7,
          'supports'           => array( 'title', 'editor' ),
       )
    );
     
 }
 
 add_action( 'init', 'mountaviary_custom_posts_init' );