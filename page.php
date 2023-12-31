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
      <section id="blog" class="blog_posts min-h-[100vh] my-4 text-sm text-slate-800 mb-2 leading-7 font-poppins">

        <div
          class="blog_info_area"
        >
        
		    <?php while(have_posts())  : the_post(); ?>
          <div class="single_blog bg-white shadow-sm mb-4 rounded-lg">
            
         
            <div class="blog_content px-4 py-3">
              <h2 class="font-bold text-lg my-4 capitalize"><?php the_title(); ?></h2>
              <p
                class="text-sm text-slate-700 hover:text-slate-950 mb-2 font-medium"
              >
                <?php the_content(); ?>
              
              </p>
             
            </div>
          </div>
          
          <?php 
          endwhile; ?>
        
        </div>
      </section>

    

<?php get_footer(); ?>