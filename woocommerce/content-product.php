<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
$categories = get_categories(array(
	'orderby' => 'name',
	'order' => 'ASC',
  ));
?>

<li <?php wc_product_class( 'product__item', $product ); ?>>
  	<p>content-product.php</p>
	<div class="product__discount__item">
		<div class="product__discount__item__pic set-bg" style="background-image: url('<?php the_post_thumbnail_url() ?>');">
			<?php woocommerce_show_product_loop_sale_flash(); ?>
			<ul class="product__item__pic__hover">
				<li><a href="<?php site_url(); ?>/?add_to_wishlist=<?php echo get_the_ID(); ?>/&amp;_wpnonce=2361a25de4" class="add_to_wishlist single_add_to_wishlist" data-product-id="<?php echo get_the_ID(); ?>" data-product-type="simple" data-original-product-id="<?php echo get_the_ID(); ?>"><i class="yith-wcwl-icon fa fa-heart-o"></i></a></li>

				<li><a href="<?php site_url(); ?>/?action=yith-woocompare-add-product&amp;id=<?php echo get_the_ID(); ?>" class="compare" data-product_id="<?php echo get_the_ID(); ?>" rel="nofollow"><i class="fa-solid fa-code-compare"></i></a></li>

				<li><a href="<?php site_url(); ?>/?add-to-cart=<?php echo get_the_ID(); ?>" aria-describedby="woocommerce_loop_add_to_cart_link_describedby_<?php echo get_the_ID(); ?>" class="product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>"><i class="fa fa-shopping-cart"></i></a>
				</li>
			</ul>
		</div>
		<div class="product__discount__item__text">
			<span><?php echo $product->get_categories();?></span>
			<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			<?php woocommerce_template_loop_price(); ?>
		</div>
	</div>

	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	// do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>
