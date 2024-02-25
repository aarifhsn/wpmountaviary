<?php

function mountaviary_theme_option_css(){

$siteTitleColor = get_theme_mod('site_title_color_setting');
$blogTitleColor = get_theme_mod('blog_title_color_setting');
$themeContentColor = get_theme_mod('blog_p_color_setting');
$themeMetaColor = get_theme_mod('blog_meta_color_setting');
$themeMenuColor = get_theme_mod('nav_menu_color_setting');
$headerFooterBg = get_theme_mod('header_footer_bg_color');

if(!empty($blogTitleColor) || !empty($themeContentColor) || !empty($themeMetaColor) || !empty($themeMenuColor) || !empty($siteTitleColor) || !empty($headerFooterBg)):  
?>

<style type="text/css" id="mounaviary-theme-option-css">
    
    .site_title .site_context h1.site-title a, footer span.footer_site_title {
        color: <?php echo $siteTitleColor; ?>;
    } 
    header, footer {
        background-color: <?php echo $headerFooterBg; ?> !important;
    } 
    
    .single_blog .post_title h2 a, .blog_content h1.entry-title, .blog_content h1.entry-title  {
        color: <?php echo $blogTitleColor; ?>;
    } 
    .single_blog .post_title h4, .sidebar_section .single_widget p {
        color:<?php echo $themeContentColor; ?>;
    }
    
    .left_nav ul li a, .footer_menu ul li a, .navbar ul li a {
        color: <?php echo $themeMenuColor; ?>
    }

    .site_title .site_context h4, h4.author_name, h5.post_date, .post_title h4 a, .nav-links .nav-previous a, .nav-links .nav-next a {
        color: <?php echo $themeMetaColor; ?>
    }


</style>



<?php

endif;	
}

add_action( 'wp_head', 'mountaviary_theme_option_css' );
