<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, there will also show few fixed sidebar contents.
 * @package Mountaviary
 * @since Mountaviary 1.0.0
 */
?>

<div class="sidebar_section">
<?php if ( is_active_sidebar( 'left_sidebar' ) ) { 
	dynamic_sidebar('left_sidebar');
} ?>
</div>