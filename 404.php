<?php get_header(); ?>

<!-- BLOG SECTION  -->
    <section id="blog" class="blog_posts min-h-[100vh] my-24 lg:my-48">
        
        <div class="not_found_page my-4 py-4 text-center">
            <h1 class=" p-4 font-bold">404 Not Found</h1>
            <p>The query you are looking for is not found. Please search again.</p>

            <div class="error_search m-4 ">
                <?php echo get_search_form(); ?>

                <div class="error_home my-8">
                    <p>Go to <a class="text-blue-400" href="<?php echo home_url(); ?>">Homepage</a> </p>
                </div>
            </div>
        </div>

    </section>

<?php get_footer(); ?>