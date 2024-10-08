<?php
/**
 * Ogani Woocommerce Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ogani_Woocommerce_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp10ms_ogani_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp10ms_ogani_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp10ms_ogani_content_width', 0 );

/**
 * Implement the enqueue script.
 */
require get_template_directory() . '/inc/theme-support.php';

/**
* Implement the enqueue script.
*/
require get_template_directory() . '/inc/enqueue.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * MJ-WP-Breadcrumb
 */
require get_template_directory() . '/inc/mj-wp-breadcrumb.php';

/**
 * Load register functions
 */
require get_template_directory() . '/inc/register.php';