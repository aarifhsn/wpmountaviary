<?php


/* theme options inline colors */

function mountaviary_inline_color() { ?>
	
	<style type="text/css">
		<?php if(get_theme_mod('bg_color')) : ?>
			.mount_body  {background-color: <?php echo get_theme_mod('bg_color'); ?> none repeat scroll 0 0}
		<?php endif; ?>
	
		/* <?php if(get_theme_mod('theme_color')) : ?>
			.menu_section, 
			.owl-theme .owl-controls .owl-buttons div,
			.footer, .signup_form .subscription-form #subscribe-button,
			.follow_us ul li a, 
			#respond input#submit,
			.woocommerce #respond input#submit, 
			.woocommerce a.button, 
			.woocommerce button.button, 
			.woocommerce input.button, 
			.addresses .address header a, 
			.post_thumbnail h3 span.year, 
			.pagination span,
			.pagination a.inactive,
			.archive_short_category,
			.post_content p a.moretag,
			.woocommerce legend	{background: <?php echo get_theme_mod('theme_color'); ?> none repeat scroll 0 0 !important}
		<?php endif; ?> */
		
		<?php if(get_theme_mod('contact_info_area_background')) : ?>	
			.address_n_signup {background: url('<?php echo get_theme_mod('contact_info_area_background'); ?>') no-repeat fixed center center / cover rgba(0,0,0,0)}
		<?php endif; ?>
		
	
		
	</style>
	
<?php }

add_action('wp_footer', 'mountaviary_inline_color');
