<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
get_template_part('template-parts/global/hero');
get_template_part('template-parts/global/breadcrumb');

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

$attributes = $product->get_attributes();


?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="product-details spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					

					<?php
						/**
						 * Hook: woocommerce_before_single_product_summary.
						 *
						 * @hooked woocommerce_show_product_sale_flash - 10
						 * @hooked woocommerce_show_product_images - 20
						 */
						do_action( 'woocommerce_before_single_product_summary' );
					?>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="summary entry-summary product__details__text">
						<div class="product__details__text">
							<h3><?php echo get_the_title(); ?></h3>
							<div class="product__details__rating">
								<?php woocommerce_template_single_rating(); ?>
							</div>
							<div class="product__details__price"><?php woocommerce_template_single_price(); ?></div>
							<?php woocommerce_template_single_excerpt(); ?>
							<?php echo woocommerce_template_single_add_to_cart(); ?>

							<a href="<?php site_url(); ?>/?add-to-cart=<?php echo get_the_ID(); ?>" aria-describedby="woocommerce_loop_add_to_cart_link_describedby_<?php echo get_the_ID(); ?>" class="primary-btn product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>">Add to cart</i></a>

							<a href="<?php site_url(); ?>/?add_to_wishlist=<?php echo get_the_ID(); ?>/&amp;_wpnonce=2361a25de4" class="heart-icon add_to_wishlist single_add_to_wishlist" data-product-id="<?php echo get_the_ID(); ?>" data-product-type="simple" data-original-product-id="<?php echo get_the_ID(); ?>"><i class="yith-wcwl-icon fa fa-heart-o"></i></a>
							<ul>
								<li><b>Availability</b><?php echo wc_get_stock_html( $product ); ?></li>
								<li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
								<li><b>Weight</b> <span><?php if ( $product->has_weight() ) {
	echo $product->get_weight();
} ?></span></li>
								<li><b>Share on</b>
									<div class="share">
										<?php echo woocommerce_template_single_sharing(); ?>
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-pinterest"></i></a>
									</div>
								</li>
							</ul>
						</div>

						<?php
							/**
							 * Hook: woocommerce_single_product_summary.
							 *
							 * @hooked woocommerce_template_single_title - 5
							 * @hooked woocommerce_template_single_rating - 10
							 * @hooked woocommerce_template_single_price - 10
							 * @hooked woocommerce_template_single_excerpt - 20
							 * @hooked woocommerce_template_single_add_to_cart - 30
							 * @hooked woocommerce_template_single_meta - 40
							 * @hooked woocommerce_template_single_sharing - 50
							 * @hooked WC_Structured_Data::generate_product_data() - 60
							 */
							// do_action( 'woocommerce_single_product_summary' );
						?>
					</div>
				</div>
				<div class="col-lg-12">
					<?php
						/**
						 * Hook: woocommerce_after_single_product_summary.
						 *
						 * @hooked woocommerce_output_product_data_tabs - 10
						 * @hooked woocommerce_upsell_display - 15
						 * @hooked woocommerce_output_related_products - 20
						 */
						do_action( 'woocommerce_after_single_product_summary' );
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
do_action( 'woocommerce_after_single_product' ); 
?>
