<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ogani_Woocommerce_Theme
 */

if ( ! is_active_sidebar( 'blog-sidebar' ) ) {
	return;
}
?>

<sidebar id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'shop-sidebar' ); ?>
</sidebar><!-- #secondary -->
