<?php 

/*
* Register Menus
*/

if (! function_exists( 'mountaviary_register_nav_menu' ) ) {

	function mountaviary_register_nav_menu(){
		register_nav_menus( array(
	    	'screen_menu' => __( 'Screen Menu', 'mountaviary' ),
	    	'footer_menu'  => __( 'Footer Menu', 'mountaviary' ),
		) );
	}
	add_action( 'after_setup_theme', 'mountaviary_register_nav_menu', 0 );
}



// adding nav menu li class

function nav_menu_list_class($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'nav_menu_list_class', 1, 3);

// Adding nav menu anchor (a) class

function nav_menu_anchor_class($atts, $item, $args) {
    if(isset($args->nav_anchor_class)) {
        $atts['class'] = $args->nav_anchor_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'nav_menu_anchor_class', 1, 3);


// walker nav menu description 

function mountaviary_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( $args->link_after . '</a>', '<span class="font-sm text-slate-500 ml-2 lowercase block">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
    }
 
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'mountaviary_nav_description', 10, 4 );