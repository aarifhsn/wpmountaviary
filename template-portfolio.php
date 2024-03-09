<?php /* Template Name: Portfolio Page */

get_header(); ?>

<!--PORTFOLIO SECTION-->
<?php if(get_option('mountaviary_show_portfolio_option', true)) { ?>
<?php 
$args= (array('post_type' => 'mav_portfolio', 'post_status' => 'publish','posts_per_page' => -1));
$portfolio_query = new WP_Query($args);
if($portfolio_query->have_posts()) :
?>
<section id="portfolio" class="portfolio_area min-h-[480px] md:min-h-screen my-20 md:mb-12 lg:mb-24">
  <div class="portfolio_title my-4">
    <h3 class="bg-slate-200 px-4 py-2 inline-block font-bold text-2xl text-slate-700 tracking-wider  uppercase border-l-4 border-solid border-l-red-500">
      <?php echo esc_html(get_theme_mod('mountaviary_portfolio_title_text','PROJECTS')); ?>
    </h3>
  </div>
  <div class="about_content mt-4 mb-6">
    <h5 class="text-sm leading-8 text-slate-500 font-semibold">
    <?php echo esc_html(get_theme_mod('mountaviary_portfolio_subtitle','A few recent design and coding projects')); ?>
    </h5>
      
  </div>
  <div
    class="portfolio_page grid gap-4 grid-cols-1 md:grid-cols-2 xl:grid-cols-3"
  >
    <?php while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
    <div class="single_port relative <?php foreach (get_the_terms( get_the_ID(), 'portfolio_category' ) as $cat) echo $cat->slug . ' '; ?>">
        <?php if ( has_post_thumbnail() ) { ?>
          <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post_temp', array('class' => 'w-full h-auto')); ?></a>
        <?php } else {?>
          <a href="<?php the_permalink(); ?>"><img class="w-full h-auto wp-post-image" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/redBackground_port.png" alt="Portfolio Default"></a>
        <?php } ?>
        
      <div
        class="overlay absolute flex top-0 left-0 h-full w-full opacity-0 hover:opacity-80 z-40 bg-slate-700 justify-center items-center cursor-pointer transition"
      >
        <div class="text-slate-100 font-bold text-center">
        <?php
            // Check if the meta box value exists
            $portfolio_link = get_post_meta($post->ID, 'project-link', true);
            if (!empty($portfolio_link)) { ?>
              <a href="<?php echo esc_url($portfolio_link); ?>" target="_blank"><?php echo the_title(); ?></a>
             <?php }
            ?>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</section>

<?php endif; ?>
<!-- reset global post variable. After this point, we are back to the Main Query object -->
<?php wp_reset_postdata(); ?>
<?php } ?>
<!-- END OF PORTFOLIO SECTION  -->
<?php get_footer(); ?>