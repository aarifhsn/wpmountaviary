<?php


// METABOX CMB2

require_once __DIR__ . '/../metabox/init.php';


add_action( 'cmb2_admin_init', 'mountaviary_cmb2_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function mountaviary_cmb2_metaboxes() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'user_profile_metabox',
		'title'         => __( 'User Profile', 'cmb2' ),
		'object_types'  => array( 'user_about_profile' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'User Name', 'cmb2' ),
		'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => 'username',
		'type'       => 'text',
		//'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );

	// use designation
	$cmb->add_field( array(
		'name' => __( 'User Designation', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'user_designation',
		'type' => 'text',
		
	) );

	// USER BIRTHDAY
	$cmb->add_field( array(
		'name' => __( 'Birthday', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'user_birthday',
		'type' => 'text_date',
        'date_format' => 'd.m.Y',
		
	) );

	// User Age
	$cmb->add_field( array(
		'name' => __( 'User\'s age', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'user_age',
		'type' => 'text_small',
		
	) );

	// user address
	$cmb->add_field( array(
		'name' => __( 'User Designation', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'user_designation',
		'type' => 'text',
		
	) );

	// user email
	$cmb->add_field( array(
		'name' => __( 'User Designation', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'user_designation',
		'type' => 'text',
		
	) );

	// User Phone
	$cmb->add_field( array(
		'name' => __( 'User Phone Number', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'user_phone',
		'type' => 'text',
		
	) );

	// User's nationality
	$cmb->add_field( array(
		'name' => __( 'User Country', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'user_country',
		'type' => 'text',
		
	) );

	// user study
	$cmb->add_field( array(
		'name' => __( 'User Designation', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'user_designation',
		'type' => 'text',
		
	) );

	// user's degree
	$cmb->add_field( array(
		'name' => __( 'User Designation', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'user_designation',
		'type' => 'text',
	
	) );

	// users interest
	$cmb->add_field( array(
		'name' => __( 'User Designation', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'user_designation',
		'type' => 'text',
	
	) );

	// Freelance
	$cmb->add_field( array(
		'name' => __( 'User Designation', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'user_designation',
		'type' => 'text',
		
	) );


	/**
	 * Portfilio Custom Post metabox area
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'mountaviary_portfolio',
		'title'         => __( 'Portolio Section', 'cmb2' ),
		'object_types'  => array( 'mount_portfolio' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	
	// Portfolio Title Link
	$cmb->add_field( array(
		'name' => __( 'Portfolio Link', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'portfolio-item-link',
		'type' => 'text_url',
		
	) );

	/**
	 * Setvices Custom Post metabox area
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'mountaviary_services',
		'title'         => __( 'Service post Icon', 'cmb2' ),
		'object_types'  => array( 'mount_services' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	
	// Service Section
	$cmb->add_field( array(
		'name' => __( 'Service Post Icon', 'cmb2' ),
		'desc' => __('To add your favourite icon, <a href="https://developer.wordpress.org/resource/dashicons/">Follow this Link</a> and copy the icon name clicking on it. and paste the name here. For Example: <i>dashicons-index-card</i>', 'cmb2' ),
		'id'   => 'services-icon',
		'type' => 'text',
	) );

}
