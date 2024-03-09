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
      class="bg-white relative md:fixed top-0 left-0 min-h-[60px] z-[9999] w-full shadow-sm"
    >
      <div class="header_container flex justify-between items-center py-2 px-8">
        <div class="site_title flex font-poppins items-center">
            <div class="logo mr-4">
              <?php if ( function_exists( 'the_custom_logo' ) ) { 
                the_custom_logo();
              } ?>
            </div> 
            <div class="site_context">
             <?php if ( display_header_text() ) : // If user chooses to display header text. ?> 
                <h1 class="site-title"><a href="<?php echo esc_url(home_url( '/' )); ?>" class="font-bold" rel="home"><?php echo get_bloginfo('name'); ?></a></h1>
            
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                <h4 class="text-xs text-slate-500 italic "><?php echo $description; ?></h4>
                <?php endif; ?>
              <?php endif; ?>
            </div>
        </div>
        <div class="top_menu z-[15]">
          <div
            class="navbar  text-sm relative"
          >
            <div class="screen_menu">
                <div
                  class="left_nav capitalize font-poppins py-4 relative lg:block hidden"
                > 
                <!-- SCREEN MENU -->
                  <?php wp_nav_menu( array(
                        'theme_location'=> 'screen_menu',
                        'container'     => '',
                        'menu_class'    => 'menu_list flex flex-wrap justify-end gap-4 px-4',
                        'add_li_class'  => 'relative',
                        'nav_anchor_class' => ' text-slate-800 font-semibold hover:text-slate-950'
                      )); ?>
                </div>
            </div>
            
            <div class="menu-toggle block lg:hidden">
              <span id="mobile-menu" class="cursor-pointer text-lg"
                ><i class="fa-solid fa-bars"></i
              ></span>
            </div>

            <!-- TOP MOBILE MENU - AS SCREEN MENU -->
            <?php wp_nav_menu(array(
                  'theme_location'=> 'screen_menu',
                  'container'     => '',
                  'menu_class'    => 'nav-list mobile_menu text-right hidden p-6 pr-2 border border-slate-200 text-slate-700 max-w-40 max-h-96 overflow-y-scroll',
                  'add_li_class'  => 'mb-5 relative hover:text-slate-500',
                  'nav_anchor_class' => 'font-semibold hover:text-slate-400'
                ));
            ?>
        
          </div>
        </div>
      </div><!--end header_container-->
    </header>

    <div class="mount_body">
      <div
        class="container px-3 md:px-4 xl:p-0 mx-auto relative"
      >
        <div class="site_content w-full relative">
        <?php if(get_option('show_sidebar_area', 1)) { ?>
          <div
            class="left_nav_content hidden lg:block 2xl:block flex-auto h-full z-50 top-0 left-0 bottom-0 fixed border-r-2 w-3/12 bg-left_nav-bg  bg-cover bg-no-repeat bg-center bg-white bg-opacity-80 backdrop-filter backdrop-blur-sm"
          >
 
            <div class="sidebar_section_front mb-16 pl-8 pr-0 mt-20">
               
              <div class="sidebar_area overflow-y-auto max-h-96 pr-1">
                <?php get_sidebar(); ?>
              </div>

            </div>
            <!-- end sidebar_section_front  --> 
          </div>
          <!--end left_nav_content-->
        <?php } ?>

          <div
            class="body_content w-full lg:w-9/12 overflow-hidden relative mt-6 md:mt-14 ml-0 lg:ml-[25%]"
          >