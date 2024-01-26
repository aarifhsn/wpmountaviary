 <?php 
 
/**
 * Register a custom post type called "benefit".
 *
 * @see get_post_type_labels() for label keys.
 */

function mountaviary_custom_posts_init() {

//key benefits area custom posts

//    register_post_type( 'user_about_profile',
//       array (
// 	      'labels' => array(
//             'name'                  => __( 'About', 'mountaviary' ),
//             'singular_name'         => __( 'About', 'mountaviary' ),
//             'add_new'               => __( 'Add New', 'mountaviary' ),
//             'add_new_item'          => __( 'Add New About', 'mountaviary'),
//             'new_item'              => __( 'New About', 'mountaviary' ),
//             'edit_item'             => __( 'Edit About', 'mountaviary' ),
//             'view_item'             => __( 'View About', 'mountaviary' ),
//             'all_items'             => __( 'All About', 'mountaviary' ),
//             ),
//          'menu_icon'          => 'dashicons-format-chat',
//          'public'             => true, 
//          'rewrite'            => array( 'slug' => 'about' ),
//          'capability_type'    => 'post',
//          'menu_position'      => 5,
//          'taxonomies'         => array( 'category' ),
//          'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
//       )
//    );

   register_post_type( 'portfolio',
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
         'menu_icon'          => 'dashicons-images-alt',
         'public'             => true, 
         'rewrite'            => array( 'slug' => 'portfolio' ),
         'capability_type'    => 'post',
         'menu_position'      => 6,
         'supports'           => array( 'title', 'thumbnail' ),
      )
   );

   register_post_type( 'service',
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
         'menu_icon'          => 'dashicons-images-alt',
         'public'             => true, 
         'rewrite'            => array( 'slug' => 'service' ),
         'capability_type'    => 'post',
         'menu_position'      => 7,
         'supports'           => array( 'title', 'editor' ),
      )
   );
	
}

add_action( 'init', 'mountaviary_custom_posts_init' );