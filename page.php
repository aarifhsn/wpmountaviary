<?php get_header(); ?>

      <!-- BLOG SECTION  -->
      <section id="blog" class="blog_posts min-h-[100vh] my-24 lg:my-48">
        

        <div
          class="blog_info_area"
        >
        <?php if(have_posts()) : ?>
		    <?php while(have_posts())  : the_post(); ?>
          <div class="single_blog bg-white shadow-sm mb-4 rounded-lg">
            
          <?php if ( has_post_thumbnail() ): ?>  
          <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('thumbnail', array('class' => 'w-full h-auto hover:grayscale duration-100')); ?></a>
          <?php endif; ?>

            <!-- <div class="author_info flex items-center px-4 py-2 mt-2">
              <img
                class="author_photo h-7 w-7 rounded-full"
                src="<?php echo get_template_directory_uri() ;?>/img/project-7.jpg"
                alt=""
              />
              <h4
                class="author_name text-slate-500 hover:text-slate-900 mx-3 text-xs font-bold"
              >
                <a href="#"><?php get_the_author(); ?></a>
              </h4>
              <h5 class="post_date text-slate-500 text-xs">
                Dec 12, 2023
              </h5>
            </div> -->
            <div class="blog_content px-4 py-3">
              <h2 class="font-bold text-lg mb-8"><?php the_title(); ?></h2>
              <h4
                class="text-sm text-slate-700 hover:text-slate-950 mb-2 font-medium"
              >
                <?php the_content(); ?>
              
              </h4>
             
            </div>
          </div>
          
          <?php endwhile; ?>
                
        <?php else : ?>
            <h3><?php _e('404 Error&#58; Not Found', 'attitude'); ?></h3>
        <?php endif; ?>
         
        </div>
      </section>

    

<?php get_footer(); ?>