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
          <ul class="flex flex-wrap items-center">
            <li class="mr-4 md:mr-6">
              <a class="hover:text-slate-800" href="#home">Home</a>
            </li>
            <li class="mr-4 md:mr-6">
              <a class="hover:text-slate-800" href="#about">About Me</a>
            </li>
            <li class="mr-4 md:mr-6">
              <a class="hover:text-slate-800" href="#service">What I Do</a>
            </li>
            <li class="mr-4 md:mr-6">
              <a class="hover:text-slate-800" href="#portfolio">Portfolio</a>
            </li>
            <li class="mr-4 md:mr-6">
              <a class="hover:text-slate-800" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>

      <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400 font-sm pt-4 md:pt-7"
        ><?php echo get_theme_mod('mountaviary_footer_selection'); ?>&nbsp;&nbsp;
        <a href="<?php echo home_url(); ?>" class="font-semibold hover:text-slate-950"><?php echo bloginfo('name'); ?></a>
        &nbsp;
        <?php echo get_theme_mod('mountaviary_footer_text'); ?>
      </span>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
