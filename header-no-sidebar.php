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
                  <div class="mount_top_menu">
                      <?php wp_nav_menu( array(
                            'theme_location'=> 'screen_menu',
                            'container'     => '',
                            'menu_class'    => 'menu_list',
                            'add_li_class'  => '',
                            'nav_anchor_class' => ''
                          )); 
                      ?>
                    </div>
                </div>
            </div>
            
            <div class="menu-toggle block lg:hidden">
              <span id="mobile-menu" class="cursor-pointer text-lg"
                ><i class="fa-solid fa-bars"></i
              ></span>
            </div>

            <!-- TOP MOBILE MENU - AS SCREEN MENU -->
            <div class="mount_top_mobile_menu">
              <?php wp_nav_menu(array(
                    'theme_location'=> 'screen_menu',
                    'container'     => '',
                    'menu_class'    => '',
                    'add_li_class'  => '',
                    'nav_anchor_class' => ''
                  ));
              ?>
            </div>
        
          </div>
        </div>
      </div><!--end header_container-->
    </header>

    <div class="mount_body">
      <div
        class="container px-3 md:px-4 xl:p-0 mx-auto relative"
      >
        <div class="site_content relative">
          <div
            class="body_content w-full overflow-hidden relative mt-10 md:mt-20"
          >