<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class('font-poppins w-full mx-auto text-base transition-all scroll-smooth'); ?>>
    <header
      class="flex lg:hidden bg-white relative md:fixed top-0 left-0 min-h-[52px] z-50 w-full overflow-hidden items-center px-12"
    >
      <div class="site_title w-1/2 flex">
        <h2><a href="<?php echo home_url(); ?>" class="font-montserrat font-bold">mountAviary</a></h2>
      </div>
      <div class="top_menu w-1/2 z-[15]">
        <div
          class="navbar uppercase font-bold text-sm text-right relative"
        >
          <div class="menu-toggle mb-2">
            <span id="mobile-menu" class="cursor-pointer text-lg"
              ><i class="fa-solid fa-bars"></i
            ></span>
          </div>

          <!-- TOP MOBILE MENU - AS SCREEN MENU -->
          <?php $args = array(
                'theme_location'=> 'screen_menu',
                'container'     => '',
                'menu_class'    => 'nav-list text-right hidden p-6 pr-2 border border-slate-200 text-slate-700',
                'depth'         => 1,
                'fallback_cb'   => false,
                'add_li_class'  => 'mb-5 hover:text-slate-500',
                //'nav_anchor_class' => 'hover:text-slate-400'
              );
              wp_nav_menu($args);
          ?>
       
        </div>
      </div>
    </header>

    <div class="mount_body bg-slate-50">
      <div
        class="container px-3 md:px-6 xl:p-0 mx-auto relative overflow-hidden"
      >
        <div class="site_content flex flex-row-reverse relative">
          
          

          <div
            class="left_nav_content hidden lg:block 2xl:block flex-auto h-full z-50 top-0 left-0 fixed border-r-2 w-3/12 bg-left_nav-bg  bg-cover bg-no-repeat bg-center bg-white bg-opacity-80 backdrop-filter backdrop-blur-sm"
          >

            <div id="sidebar_icon_area" class="flex gap-8 px-12 pt-12 pb-4 text-lg shadow-sm ">
              <span class="sidebar_icon cursor-pointer"><i class="fa-solid fa-bars"></i></span>
              <span class="sidebar_icon cursor-pointer"><i class="fa-regular fa-window-restore"></i></span>
            </div>

            <div id="sidebar2" class="sidebar_toggle overflow-hidden overflow-y-auto px-8 pt-4 pb-4 hidden">
              <?php get_sidebar(); ?>
            </div>

            <div
              id="sidebar1" class="left_nav_info sidebar_toggle overflow-hidden overflow-y-auto  rounded h-full"
            >
              <div class="px-12 pt-4 pb-4">
                <div class="person_info">
                  <div class="persons_photo flex items-center justify-start">
                    <img
                      class="rounded border-2 border-solid border-slate-400 h-auto w-32 p-0.5"
                      src="<?php echo get_theme_mod('mountaviary_header_logo') ?>"
                      alt="Mountaviary Logo"
                    />
                  </div>
                  <h3
                    class="person_name text-left xl:text-center text-lg text-slate-900 font-bold my-4 font-poppins"
                  >
                    <a href="<?php echo home_url(); ?>"
                      >Mount<span class="text-slate-800">Aviary</span></a
                    >
                  </h3>
                </div>
                <!-- end person_info -->

                <div
                  class="left_nav text-left uppercase font-poppins font-bold text-sm text-slate-600 mt-8"
                > 
                <!-- LEFT NAV MENU -->
                  <?php $args = array(
                        'theme_location'=> 'screen_menu',
                        'container'     => '',
                        'menu_class'    => '',
                        'depth'         => 1,
                        'fallback_cb'   => false,
                        'add_li_class'  => 'mt-4',
                        'nav_anchor_class' => 'hover:text-slate-950'
                      );
                      wp_nav_menu($args);
                  ?>

                </div>
              </div>
            </div>
            <!-- end left_nav_info -->
          </div>
          <!--end left_nav_content-->

          <div
            class="body_content w-full lg:w-9/12 2xl:w-9/12 overflow-hidden relative"
          >