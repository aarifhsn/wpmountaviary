<?php
/**
 * @version    1.0
 * @package    mountaviary
 * @author     aarif hassan
 * @copyright  Copyright (C) 2015 mountaviary.com. All Rights Reserved.
 * @license    GNU/GPL v3 or later http://www.gnu.org/licenses/gpl-3.0.html
 *
 * Websites: https://mountaviary.com/
 */

get_header();
?>
      <!-- PAGE SECTION  -->
      <section id="blog" class="blog_posts min-h-[100vh] my-4 lg:my-8 font-poppins">
    
    <div class="search_title my-4 py-4 border-b-2">
				<h1 class="page_title font-bold my-4">
					<?php _e('Search results:', 'mountaviary'); ?>
        </h1>
					
			</div>
			<?php if (have_posts( )) :
			while (have_posts( )) : the_post(); ?>

			<div class="single_post border-b-2 w-full mb-8 pb-4">

				<?php if ( has_post_thumbnail() ): ?>
				<div class="post_thumb overflow-hidden mb-4">
					<div class="hover:scale-110  duration-500">
						<a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail(); ?></a>
					</div>
				</div>
				<?php endif; ?>
				<div class="post_details my-4 py-4">
					<h3 class="post_title mb-2"><a class="text-lg text-slate-700 hover:text-slate-950 font-semibold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt( ); ?>
				</div>
			</div>

			<?php endwhile; ?>

        <?php the_posts_navigation(array(
          'mid_size'           => 1,
          'prev_text'          => _x( '&#8592; Previous Page', 'previous set of posts' ),
          'next_text'          => _x( 'Next Page &#8594;', 'next set of posts' ),

        )); ?>
        
			<?php	else : get_template_part('404');
			endif; ?>

    </section>

<?php get_footer(); ?>