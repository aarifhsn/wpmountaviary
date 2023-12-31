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
    <section id="blog" class="blog_posts min-h-[100vh] my-4 font-poppins">
    

    <?php if ( have_posts() ) : ?>

      <div
        class="blog_info_area grid gap-8 grid-cols-1 lg:grid-cols-2 xl:grid-cols-3"
      >

      <?php /* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
        
        <div class="single_blog bg-white shadow-sm mb-4 rounded-lg">
        
        
          <?php if ( has_post_thumbnail() ): ?>
          <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('thumbnail', array('class' => 'w-full h-auto hover:grayscale duration-100')); ?></a>
          <?php endif; ?>

       
         
          <div class="author_info flex items-center mt-4 px-4">
            <img
              class="author_photo h-7 w-7 rounded-full"
              src="<?php echo get_template_directory_uri() ;?>/img/project-7.jpg"
              alt=""
            />
            <h4
              class="author_name text-slate-500 hover:text-slate-900 mx-3 text-xs font-bold"
            >
              <?php the_author_posts_link(); ?>
            </h4>
            <h5 class="post_date text-slate-500 text-xs">
              <?php the_date('M d, Y'); ?>
            </h5>
          </div>

          <div class="post_title my-4  text-md font-semibold px-4 text-slate-700">
            <?php
              if ( is_singular() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
              else :
                the_title( '<h2 class="entry-title"><a class="hover:text-slate-950" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
              endif; ?>

              <h4
                class="text-xs text-slate-500 mb-2 py-4 font-medium leading-5"
              >
                <?php the_excerpt(); ?>
              
              </h4>
          </div>
          

        </div>


        <?php endwhile; ?>

        

      </div>

      <?php the_posts_navigation();
                
                else : ?>
                            <h3><?php _e('404 Error&#58; Not Found', 'mountaviary'); ?></h3>
                        <?php endif; ?>
    </section>

<?php get_footer(); ?>