<?php



// Practice filter hook
// add a content(as domain name) in all pages title and posts title
// add_filter('the_title', 'replace_title_function');

// function replace_title_function($default) {
//     return $default . '<div class="text-xs block">Mountaviary</div>';
// }


// excerpt length
// function mpuntaviary_excerpt_length( $length ) {
//     return 15;
// }
// add_filter( 'excerpt_length', 'mpuntaviary_excerpt_length');

// Post Excerpt (Read More) Support 
function mountaviary_post_excerpt() {
    global $post;
    return '<a class="block mt-4 text-slate-700 hover:text-slate-900 duration-75" href="'. get_permalink($post->ID). ' ">' . 'Read More...' . '</a>';
}
add_filter( 'excerpt_more', 'mountaviary_post_excerpt' );