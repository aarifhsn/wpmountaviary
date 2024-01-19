<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package Mountaviary
 * 
 * @since Mountaviary 1.0
 */

get_header();
?>
      <!-- PAGE SECTION  -->
      <section id="blog" class="blog_posts min-h-[100vh] my-4 text-sm text-slate-800 mb-2 leading-7 font-poppins">

        <div
          class="blog_info_area"
        >
        <?php if(have_posts()) : ?>
		    <?php while(have_posts())  : the_post(); ?>
          <div <?php post_class( 'single_blog bg-white shadow-sm mb-4 rounded-lg' );?>>
            
            <div class="blog_content px-4 py-3">
              <h2 class="font-bold text-lg my-4 capitalize"><?php the_title(); ?></h2>
              <p
                class="text-sm text-slate-700 hover:text-slate-950 mb-2 font-medium"
              >
                <?php the_content(); ?>
              
              </p>
              <div class="page_comments mt-12">
              <?php // If comments are open or we have at least one comment, load up the comment template.
                  if ( comments_open() || get_comments_number() ) :
                    comments_template();
                  endif;
              ?>
              </div>
            </div>
          </div>
          
          <?php 
          endwhile; ?>
          <?php endif; ?>
        
        </div>
      </section>
<?php get_footer(); ?>