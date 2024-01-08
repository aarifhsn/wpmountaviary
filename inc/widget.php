<?php



// REGISTERING WIDGET

function mountaviary_register_widgets() {
	
    register_sidebar( array(
        'name' => __( 'Right Sidebar', 'mountaviary' ),
        'id' => 'right_sidebar',
        'before_widget' => '<div class="single_widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget_title"><h2>',
        'after_title' => '</h2></div>',
    ) );
    
    //register_widget( 'popular_post' );
}
add_action( 'widgets_init', 'mountaviary_register_widgets' );