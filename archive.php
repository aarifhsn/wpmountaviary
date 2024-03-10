<?php
/**
 * The template for displaying archive pages
 * @package Mountaviary
 * @since Mountaviary 1.0.0
 */
get_header(); ?>

<!-- BLOG SECTION -->
    <section id="blog" class="blog_posts min-h-[100vh] my-4 lg:my-8 font-poppins">

    <div class="archieve_title my-4 py-4 border-b-2">
				<?php 
					the_archive_title( '<h1 class="page_title font-bold my-4">', '</h1>' );
					the_archive_description( '<div class="italic">', '</div>' ); 
				?>

			</div>
			<?php if (have_posts( )) :
			while (have_posts( )) : the_post(); ?>

			<div class="single_post border-b-2 last:border-b-0 w-full mb-8 pb-4">

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

			<?php endwhile;
				else : _e('No post Found', 'mountaviary');
			endif; ?>

    </section>

<?php get_footer(); ?>