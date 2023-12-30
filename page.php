<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mountaviary
 */

get_header();
?>

      <!-- BLOG SECTION  -->
      <section id="blog" class="blog_posts min-h-[100vh] my-24">

        <div
          class="blog_info_area"
        >
        
		    <?php while(have_posts())  : the_post(); ?>
          <div class="single_blog bg-white shadow-sm mb-4 rounded-lg">
            
         
            <div class="blog_content px-4 py-3">
              <h2 class="font-bold text-lg mb-8"><?php the_title(); ?></h2>
              <h4
                class="text-sm text-slate-700 hover:text-slate-950 mb-2 font-medium"
              >
                <?php the_content(); ?>
              
              </h4>
             
            </div>
          </div>
          
          <?php 

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;

          endwhile; ?>
        
         
        </div>
      </section>

    

<?php get_footer(); ?>