            </div>
          <!--end body_content-->
        </div>
        <!--end site_content-->
      </div>
      <!-- end container-->
    </div>
    <!--end mount body-->
    <footer
      class="p-4 bg-white md:px-6 md:py-8 border border-slate-300 border-solid relative z-50 font-poppins"
    >
      <div
        class="sm:flex sm:items-center justify-center sm:justify-between border-b border-b-slate-300 pb-4 md:pb-7"
      >
        <a
          href="#"
          target="_blank"
          class="flex items-center mb-4 sm:mb-0 uppercase"
        > 
          <span class="self-center text-md font-semibold whitespace-nowrap"
            >Mount<span class="text-red-900">Aviary</span></span
          >
        </a>

        <div class="uppercase font-bold text-sm text-slate-500">

        <!-- FOOTER MENU -->
        <?php $args = array(
              'theme_location'=> 'footer_menu',
              'container'     => '',
              'menu_class'    => 'flex flex-wrap items-center',
              'depth'         => 1,
              'fallback_cb'   => false,
              'add_li_class'  => 'mr-4 md:mr-6',
              'nav_anchor_class' => 'hover:text-slate-800'
            );
            wp_nav_menu($args);
        ?>
          
        </div>
      </div>
      
      <?php if (get_option('mountaviary_footer_option_setting')) { ?>
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400 font-sm pt-4 md:pt-7"
          >&copy;<?php the_date(); ?> &nbsp;&nbsp;
          <a href="<?php echo home_url(); ?>" class="font-semibold hover:text-slate-950"><?php echo bloginfo('name'); ?></a>
          &nbsp;
          <?php echo get_theme_mod('mountaviary_footer_text'); ?>
        </span>

      <?php } ?>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
