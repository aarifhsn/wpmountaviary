<?php
function mount_postsbycategory($atts) {
    // Extract shortcode attributes
    $atts = shortcode_atts(array(
        'posts_per_page' => 5, // Default value for posts per page
        'category_name' => 'curated', // Default value for category name
    ), $atts);

    // Initialize the string variable
    $string = '';

    // Get the current page number
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    // the query
    $the_query = new WP_Query( array( 
        'category_name' => $atts['category_name'], // Use the dynamic category name
        'posts_per_page' => $atts['posts_per_page'], // Use the dynamic value
        'paged' => $paged // Pagination
    ) ); 
        
    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            // Get the post ID
            $post_id = get_the_ID();
            
            // Start output buffering
            ob_start();
            // Start post_page_content div
            $string .= '<div class="post_page_content py-8 border-b-2 border-slate-200">';
                if ( has_post_thumbnail() ) {
                $string .= '<div class="thumbnail overflow-hidden">';
                    $string .= '<a href="' . get_permalink() . '">' . get_the_post_thumbnail( null, 'medium', array("class" => "w-full h-auto hover:scale-110 duration-300 rounded-t-lg")) . '</a>';
                $string .= '</div>';
                }
                $string .= '<div class="my-4 text-xl font-semibold text-slate-700 break-words">';
            
                    $string .= '<h2 class="entry-title"><a class="hover:text-slate-950" href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . get_the_title() . '</a></h2>';

                    $string .= '<h4 class="text-sm text-slate-500 mb-2 py-4 font-medium leading-6">' . get_the_excerpt() . '</h4>';
                
                $string .= '</div>';

            // End post_page_content div
            $string .= '</div>';
            // End output buffering, get contents, and append to the string
            $string .= ob_get_clean();
        }
        // Pagination
        $string .= '<div class="pagination">';
        $string .= paginate_links(array(
            'total' => $the_query->max_num_pages
        ));
        $string .= '</div>';
    } else {
        // no posts found
        ob_start();
        get_template_part("404");
        $string .= ob_get_clean();
    }
        
    // Restore original Post Data
    wp_reset_postdata();

    // Return the result
    return $string;
}
// Add a shortcode
add_shortcode('categoryposts', 'mount_postsbycategory');
