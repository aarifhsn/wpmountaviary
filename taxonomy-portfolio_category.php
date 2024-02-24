<?php
// Get the current category object
$current_category = get_queried_object();

// Display category name
echo '<h1>' . esc_html( $current_category->name ) . '</h1>';

// Custom query to retrieve posts belonging to the current category
$category_posts = new WP_Query( array(
    'post_type'      => 'mav_portfolio', // Adjust post type as needed
    'posts_per_page' => -1, // Show all posts
    'tax_query'      => array(
        array(
            'taxonomy' => 'portfolio_category',
            'field'    => 'id',
            'terms'    => $current_category->term_id,
        ),
    ),
) );

// Check if category posts exist
if ( $category_posts->have_posts() ) {
    echo '<ul>';
    // Loop through posts and display them
    while ( $category_posts->have_posts() ) {
        $category_posts->the_post();
        echo '<li><a href="' . esc_url( get_permalink() ) . '">' . get_the_title() . '</a></li>';
    }
    echo '</ul>';
    // Reset post data
    wp_reset_postdata();
} else {
    echo '<p>No posts found.</p>';
}
?>
