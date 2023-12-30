<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mountaviary
 */

get_header();
?>


<!-- BLOG SECTION  -->
    <section id="blog" class="blog_posts single_page min-h-[100vh] my-4 font-poppins">
    
      <div
        class="blog_info_area "
      >
      <?php if ( have_posts() ) : ?>

      <?php 
			while ( have_posts() ) :
				the_post(); ?>
        
        <div class="single_blog bg-white shadow-sm mb-4 rounded-lg">
          <?php if ( has_post_thumbnail() ): ?>
          <?php echo the_post_thumbnail('thumbnail', array('class' => 'w-full h-auto hover:grayscale duration-100')); ?>
          <?php endif; ?>
         
          <div class="blog_content px-4 py-3">
            <?php
                if ( is_singular() ) :
                  the_title( '<h1 class="entry-title text-lg font-semibold">', '</h1>' );
                else :
                  the_title( '<h2 class="entry-title text-base font-semibold"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
            ?>
                <div class="author_info flex items-center">
                  
                  <h4
                    class="author_name text-slate-500 hover:text-slate-900 my-3 mr-2 text-xs font-bold"
                  >
                    <a href="#">Arif Hassan</a>
                  </h4>
                  <h5 class="post_date text-slate-500 text-xs">
                    Dec 12, 2023
                  </h5>
                </div>
            <div
              class="single_content text-sm text-slate-800 mb-2 leading-7 overflow-hidden"
            >
            <?php the_content(); ?>
              </div>
        
          </div>
        </div>
		<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
 ?>
        <?php endwhile;

        the_posts_navigation();
                
        else : ?>
                    <h3><?php _e('404 Error&#58; Not Found', 'Mountaviary'); ?></h3>
                <?php endif; ?>

      </div>
    </section>

<?php get_footer(); ?>