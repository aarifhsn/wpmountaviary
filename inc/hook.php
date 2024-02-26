<?php

// Practice filter hook
// add a content(as domain name) in all pages title and posts title
// add_filter('the_title', 'replace_title_function');

// function replace_title_function($default) {
//     return $default . '<div class="text-xs block">Mountaviary</div>';
// }


// excerpt length
function mpuntaviary_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mpuntaviary_excerpt_length');

// Post Excerpt (Read More) Support 
function mountaviary_post_excerpt() {
    global $post;
    return '<a class="font-medium text-sm mt-4  hover:text-slate-900 block transition-all" href="'. get_permalink($post->ID). ' ">' . 'Read More...' . '</a>';
}
add_filter( 'excerpt_more', 'mountaviary_post_excerpt' );


// Display background image on custom page
function mountaviary_front_page_background() {
    if ( is_page_template( 'template-front.php' ) ) {
        $background_image_url = get_theme_mod( 'mountavaiary_front_background', '' );
        if ( ! empty( $background_image_url ) ) {
            echo '<style>
                .devs_top_info {
                    background-image: url("' . esc_url( $background_image_url ) . '");
                }
            </style>';
        }
    }
}
add_action( 'wp_head', 'mountaviary_front_page_background' );

// Remove custom_header section
function remove_customizer_options( $wp_customize ) {
    // Remove header image section
    $wp_customize->remove_section( 'header_image' );
}
add_action( 'customize_register', 'remove_customizer_options', 20 );
