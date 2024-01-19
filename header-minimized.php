<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
    
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('font-montserrat w-full mx-auto text-base transition-all scroll-smooth'); ?>>
    <header
      class="flex lg:hidden bg-white relative md:fixed top-0 left-0 min-h-[52px] z-50 w-full overflow-hidden items-center px-12"
    >
      <div class="site_title w-1/2 flex">
        <h2><a href="<?php echo esc_url(home_url()); ?>" class="font-montserrat font-bold"><?php echo esc_html(get_bloginfo('name')); ?></a></h2>
      </div>
      <div class="top_menu w-1/2 z-[15]">
        <div
          class="navbar uppercase font-poppins font-bold text-sm text-right relative"
        >
          <div class="menu-toggle mb-2">
            <span id="mobile-menu" class="cursor-pointer text-lg"
              ><i class="fa-solid fa-bars"></i
            ></span>
          </div>

          <!-- TOP MOBILE MENU - AS SCREEN MENU -->
          <?php wp_nav_menu( array(
                'theme_location'=> 'screen_menu',
                'container'     => '',
                'menu_class'    => 'nav-list text-right hidden p-6 pr-2 border border-slate-200 text-slate-700',
                'depth'         => 1,
                'fallback_cb'   => false,
                'add_li_class'  => 'mb-5 hover:text-slate-500',
                //'nav_anchor_class' => 'hover:text-slate-400'
              ));
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
            class="body_content w-full lg:w-9/12 2xl:w-9/12 overflow-hidden relative"
          >