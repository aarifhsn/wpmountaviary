<?php

/**
 * Register meta box(es).
 */


function mountaviary_register_meta_box() {
    add_meta_box( 'services_id', 'My Meta Box', 'mountaviary_display_callback', 'mav_portfolio', 'normal', 'high' );
}
add_action('add_meta_boxes_mav_portfolio', 'mountaviary_register_meta_box' );

function mountaviary_display_callback() {
    return '<h1>Hello</h1>';
}