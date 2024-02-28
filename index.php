<?php
/**
 * The main template file
 *
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package Mountaviary
 * @since Mountaviary 1.0
 */

get_header();
?>

<!-- BLOG SECTION  -->
    <section id="blog" class="blog_posts min-h-[100vh] my-8 font-poppins">
    

    <?php if ( have_posts() ) : ?>

      <div
        class="blog_info_area grid gap-8 grid-cols-1 lg:grid-cols-2 xl:grid-cols-3"
      >

      <?php /* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
        
        <div <?php post_class( 'single_blog bg-white shadow-sm mb-4 rounded-lg  backdrop-blur-sm' ); ?>>
        
          <div class="thumbnail overflow-hidden">
            <?php if ( has_post_thumbnail() ): ?>
            <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('medium', array('class' => 'w-full h-auto hover:scale-110 duration-300 rounded-t-lg')); ?></a>
            <?php endif; ?>
          </div>

          <div class="author_info flex items-center mt-4 px-4">
            
            <?php echo get_avatar( get_the_author_meta( 'ID' ), $size = '28', $default = '', $alt = '', $args = array( 'class' => 'author_photo rounded-full' ) );  ?>
            <h4
              class="author_name  hover:text-slate-900 mx-3 text-xs font-bold"
            >
              <?php the_author_posts_link(); ?>
            </h4>
            <h5 class="post_date  text-xs">
              <?php the_date('M d, Y'); ?>
            </h5>
          </div>

          <div class="post_title my-4 text-xl font-semibold px-4 text-slate-700 break-words">
            <?php
              if ( is_singular() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
              else :
                the_title( '<h2 class="entry-title"><a class="hover:text-slate-950" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
              endif; ?>

              <h4
                class="text-sm text-slate-500 mb-2 py-4 font-medium leading-6"
              >
                <?php the_excerpt(); ?>
              
              </h4>
          </div>
          

        </div>
        <?php endwhile; ?>
      </div>

      <?php the_posts_navigation(array(
				'mid_size'           => 1,
        'prev_text'          => _x( '&#8592 Previous Page', 'Navigation previous page', 'mountaviary' ),
        'next_text'          => _x( 'Next Page &#8594', 'Navigation Next page', 'mountaviary' ),
		
			));
                
          else : ?>
          <?php get_template_part('404'); ?>
      <?php endif; ?>
    </section>

<?php get_footer(); ?>