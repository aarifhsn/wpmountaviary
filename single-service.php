<?php
/**
 * The Template for displaying all single posts
 *
 * @package Mountaviary
 * 
 * @since Mountaviary 1.0.0
 */

get_header();
?>
<!-- BLOG SECTION  -->
    <section id="blog" class="blog_posts single_page min-h-[100vh] my-4 font-poppins">
    <?php if ( have_posts() ) : ?>

<?php 
      while ( have_posts() ) :
          the_post(); ?>
  <div <?php post_class( 'single_blog bg-white shadow-sm mb-4 rounded-lg' ); ?>>
    <?php if ( has_post_thumbnail() ): ?>
    <?php echo the_post_thumbnail('large', array('class' => 'w-full h-auto hover:grayscale duration-100')); ?>
    <?php endif; ?>
    <div class="blog_content px-4 py-3">
      <?php
          if ( is_singular() ) :
            the_title( '<h1 class="entry-title text-xl font-semibold">', '</h1>' );
          else :
            the_title( '<h2 class="entry-title text-lg font-semibold"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
          endif;
      ?>
          <div class="author_info flex items-center">
            <h4
              class="author_name text-slate-500 hover:text-slate-900 my-3 mr-2 text-xs font-bold"
            >
            <?php the_author_posts_link(); ?>
            </h4>
            <h5 class="post_date text-slate-500 text-xs">
            <?php the_date('M d, Y'); ?>
            </h5>
          </div>
      <div
        class="single_content text-slate-800 mb-2 overflow-hidden leading-6"
      >
      <?php the_content(); ?>
        </div>
    </div>
  </div>

<!-- Displaying post pagination links in case we have multiple page posts -->
<?php wp_link_pages('before=<div class="post-pagination">&after=</div>&pagelink=Page %'); ?>

  <?php // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
          comments_template();
      endif;
?>
  <?php endwhile;

// NOT WORKING 
  posts_nav_link();
          
  else : ?>
              <h3><?php _e('404 Error&#58; Not Found', 'mountaviary'); ?></h3>
          <?php endif; ?>
      
    </section>

<?php get_footer(); ?>