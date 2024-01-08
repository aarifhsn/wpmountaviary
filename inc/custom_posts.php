 <?php 
 
/**
 * Register a custom post type called "benefit".
 *
 * @see get_post_type_labels() for label keys.
 */

function mountaviary_custom_posts_init() {

//key benefits area custom posts

   register_post_type( 'user_about_profile',
      array (
	      'labels' => array(
            'name'                  => __( 'About', 'mountaviary' ),
            'singular_name'         => __( 'About', 'mountaviary' ),
            'add_new'               => __( 'Add New', 'mountaviary' ),
            'add_new_item'          => __( 'Add New About', 'mountaviary'),
            'new_item'              => __( 'New About', 'mountaviary' ),
            'edit_item'             => __( 'Edit About', 'mountaviary' ),
            'view_item'             => __( 'View About', 'mountaviary' ),
            'all_items'             => __( 'All About', 'mountaviary' ),
            ),
         'menu_icon'          => 'dashicons-admin-appearance',
         'public'             => true, 
         'rewrite'            => array( 'slug' => 'about' ),
         'capability_type'    => 'post',
         'menu_position'      => 5,
         'taxonomies'         => array( 'category' ),
         'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
      )
   );
	
}

add_action( 'init', 'mountaviary_custom_posts_init' );