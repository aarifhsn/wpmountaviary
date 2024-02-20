<?php

/**
 * Register meta box(es).
 */

function mountaviary_register_meta_box() {
    add_meta_box( 'project_id', 'Enter Your Project Link', 'mountaviary_project_metabox', 'mav_portfolio', 'normal', 'low' );

    add_meta_box( 'services_id', 'Add your favourite icon', 'mountaviary_services_metabox', 'mav_service', 'normal', 'low' );
}
add_action('add_meta_boxes', 'mountaviary_register_meta_box' );

// Portfolio Custom post Field Function
function mountaviary_project_metabox($post) {
    wp_nonce_field(basename(__FILE__),'portfolio_nonce');
    ?>
        <div>
             <input type="url" name="project-link" class="widefat" placeholder="Enter Link" value="<?php echo get_post_meta($post->ID, 'project-link', true); ?>">
       </div>
   <?php
}
// Save the Portfolio Custom post Field value
function mountaviary_save_metabox($post_id) {
    if (isset($_POST['project-link'])) {
        // Update the post meta with the submitted 'link' value
        update_post_meta($post_id, 'project-link', $_POST['project-link']);
    }
}
add_action('save_post', 'mountaviary_save_metabox');


// SERVICE Custom post Field Function
function mountaviary_services_metabox($post) {
    wp_nonce_field(basename(__FILE__),'service_nonce');
    ?>
        <div>
             <input type="text" name="service-icon" class="widefat" placeholder="Put your icon name" value="<?php echo get_post_meta($post->ID, 'service-icon', true); ?>">
             <label for="service-icon">To add your favourite icon, <a target="_blank" href="https://developer.wordpress.org/resource/dashicons/">Follow this Link</a> and copy the icon name clicking on it. and paste the name here. For Example: <i>dashicons-index-card</i></label>
       </div>
   <?php
}

// Save the Portfolio Custom post Field value

function mountaviary_save_service_metabox($post_id) {
    if (isset($_POST['service-icon'])) {
        // Update the post meta with the submitted value
        update_post_meta($post_id, 'service-icon', $_POST['service-icon']);
    }
}
add_action('save_post', 'mountaviary_save_service_metabox');