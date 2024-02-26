<?php

// REGISTERING WIDGET
function mountaviary_register_widgets() {
	
    register_sidebar( array(
        'name' => esc_html__( 'Left Sidebar', 'mountaviary' ),
        'id' => 'left_sidebar',
        'before_widget' => '<div class="single_widget mb-6 overflow-hidden">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
    
    //register_widget( 'popular_post' );
}
add_action( 'widgets_init', 'mountaviary_register_widgets' );