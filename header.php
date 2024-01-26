<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class('font-poppins w-full mx-auto transition-all scroll-smooth'); ?>>

    <?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>
    <header
      class=" lg:hidden bg-white relative md:fixed top-0 left-0 min-h-[40px] z-50 w-full overflow-hidden items-center"
    >
      <div class="header_container flex container px-3 md:px-6 mx-auto py-1">
        <div class="site_title w-1/2 font-poppins">
            <?php if ( function_exists( 'the_custom_logo' ) ) : 
            
            the_custom_logo();
                
            else : ?>

              <?php if ( display_header_text() ) : // If user chooses to display header text. ?>
                
                <h1 class="site-title"><a href="<?php echo esc_url(home_url( '/' )); ?>" class="font-bold" rel="home"><?php echo get_bloginfo('name'); ?></a></h1>
            
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                <h4 class="text-xs my-2 text-slate-500"><?php echo $description; ?></h4>
                <?php endif; ?>
              <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="top_menu w-1/2 z-[15]">
          <div
            class="navbar uppercase font-bold text-sm text-right relative"
          >
            <div class="menu-toggle pt-4">
              <span id="mobile-menu" class="cursor-pointer text-lg"
                ><i class="fa-solid fa-bars"></i
              ></span>
            </div>

            <!-- TOP MOBILE MENU - AS SCREEN MENU -->
            <?php wp_nav_menu(array(
                  'theme_location'=> 'screen_menu',
                  'container'     => '',
                  'menu_class'    => 'nav-list text-right hidden p-6 pr-2 border border-slate-200 text-slate-700',
                  'depth'         => 1,
                  'fallback_cb'   => false,
                  'items_wrap'    => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'add_li_class'  => 'mb-5 hover:text-slate-500',
                  //'nav_anchor_class' => 'hover:text-slate-400'
                ));
            ?>
        
          </div>
        </div>
      </div><!--end header_container-->
    </header>

    <div class="mount_body bg-slate-50">
      <div
        class="container px-3 md:px-6 xl:p-0 mx-auto relative"
      >
        <div class="site_content flex flex-row-reverse relative">
          <div
            class="left_nav_content hidden lg:block 2xl:block flex-auto h-full z-50 top-0 left-0 fixed border-r-2 w-3/12 bg-left_nav-bg  bg-cover bg-no-repeat bg-center bg-white bg-opacity-80 backdrop-filter backdrop-blur-sm"
          >
            <div class="mountaviary_logo px-12 py-8 border-t-4 border-solid border-t-red-600">
            <?php if ( function_exists( 'the_custom_logo' ) ) : 
           
           the_custom_logo();
           else : ?>
              <?php if ( display_header_text() ) : // If user chooses to display header text. ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url( '/' )); ?>" class="font-bold" rel="home"><?php echo get_bloginfo('name'); ?></a></h1>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                  <h4 class="text-xs my-2 text-slate-500"><?php echo $description; ?></h4>
                <?php endif; ?>
              <?php endif; ?>

            <?php endif; ?>
              
            </div>
            <div id="sidebar_icon_area" class="flex bg-gray dark:bg-dark-3 rounded text-xs font-medium gap-2 justify-between pl-8 pt-4 pb-2 shadow-sm">
              <span class="sidebar_icon cursor-pointer  border boder-solid border-slate-200 px-2 py-1 rounded text-slate-900 hover:text-slate-900 hover:border-slate-500" title="Menu"><i class="fa-solid fa-bars mr-2"></i>Menu Bar</span>
              <span class="sidebar_icon cursor-pointer text-slate-600 border boder-solid border-slate-200 p-1 rounded hover:text-slate-900 hover:border-slate-500 mr-2" title="Show Sidebar Widget"><i class="fa-regular fa-window-restore mr-2"></i>Sidebar Widgets</span>
            </div>
 
            <div class="sidebar_section_front overflow-y-auto max-h-80  mb-20">
              
              <div id="sidebar2" class="sidebar_toggle  px-8 pt-4 pb-4 hidden ">
                <?php get_sidebar(); ?>
              </div>

              <div
                id="sidebar1" class="left_nav_info sidebar_toggle"
              >
                <div class="pl-8 pr-4 pt-4 pb-4">
                  <div class="person_info">
                    <h3
                      class="person_name text-left xl:text-center text-lg text-slate-900 font-bold font-poppins"
                    >
                      <a href="<?php echo esc_url(home_url()); ?>">
                        <?php echo get_bloginfo('name'); ?></a>
                    </h3>
                  </div>
                  <!-- end person_info -->
                  <div
                    class="left_nav text-left uppercase font-poppins font-bold text-sm text-slate-600 mt-4 relative overflow-hidden"
                  > 
                  <!-- LEFT NAV MENU -->
                    <?php wp_nav_menu( array(
                          'theme_location'=> 'screen_menu',
                          'container'     => '',
                          'menu_class'    => 'overflow-visible',
                          'add_li_class'  => 'mt-4',
                          'nav_anchor_class' => 'hover:text-slate-950'
                        )); ?>
                  </div>
                </div>
              </div>
              <!-- end left_nav_info -->
            </div>
            <!-- end sidebar_section_front  -->
          </div>
          <!--end left_nav_content-->

          <div
            class="body_content w-full lg:w-9/12 2xl:w-9/12 overflow-hidden relative"
          >