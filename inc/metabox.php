<?php 

// Add meta box to the post editing screen
function custom_meta_box() {
    add_meta_box(
        'custom-meta-box', // Unique ID
        'Custom Meta Box', // Box title
        'display_custom_meta_box', // Callback function to display content
        'mav_portfolio', // Post type
        'normal', // Context
        'high' // Priority
    );
}
add_action('add_meta_boxes', 'custom_meta_box');

// Callback function to display content inside the meta box
function display_custom_meta_box($post) {
    // Retrieve existing value from the database
    $custom_value = get_post_meta($post->ID, '_custom_value_key', true);
    ?>
    <label for="custom-meta-box">Custom Field:</label>
    <input type="text" id="custom-meta-box" name="custom-meta-box" value="<?php echo esc_attr($custom_value); ?>" />
    <?php
}

// Save the meta box data
function save_custom_meta_box($post_id) {
    // Check if nonce is set
    if (!isset($_POST['custom_meta_box_nonce'])) {
        return;
    }
    // Verify nonce
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], 'save_custom_meta_box')) {
        return;
    }
    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    // Check user's permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    // Save the meta box value
    if (isset($_POST['custom-meta-box'])) {
        update_post_meta($post_id, '_custom_value_key', sanitize_text_field($_POST['custom-meta-box']));
    }
}
add_action('save_post', 'save_custom_meta_box');
