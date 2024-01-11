<?php
/**
 * The template for displaying 404 pages (Not Found)
 * @package Mountaviary
 * @since Mountaviary 1.0
 */

get_header();
?>

<section id="blog" class="blog_posts min-h-[100vh] my-12">
        
    <div class="error-404 not-found font-poppins">
		<div class="error_icon text-3xl text-center">
			<i class="fa-solid fa-circle-exclamation"></i>
		</div>
		<h1 class="page-title text-center text-4xl font-semibold"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mountaviary' ); ?></h1>

		<div class="page-content my-6">
			<p class="text-sm my-4 text-center"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'mountaviary' ); ?></p>

			<div id="search_404" class="search_404 text-center my-12">
				<?php get_search_form(); ?>
			</div>

			<div class="widget_404 my-8">
				<?php
					the_widget( 'WP_Widget_Recent_Posts' );
				?>
			</div>
				<div class="widget widget_categories my-8">
					<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'mountaviary' ); ?></h2>
					<ul>
					<?php
					wp_list_categories(
						array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						)
					);
					?>
					</ul>

					</div><!-- .widget -->

				<?php
					/* translators: %1$s: smiley */
					$mountaviary_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'mountaviary' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$mountaviary_archive_content" );
					

					// WP TAG
					the_widget( 'WP_Widget_Tag_Cloud' );
				?>

		</div><!-- .page-content -->
	</div><!-- .error-404 -->

</section>

<?php get_footer(); ?>