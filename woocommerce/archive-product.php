<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;
global $product;

get_header( 'shop' );
/* Get WP10MS Template Parts */
get_template_part('template-parts/global/hero');
get_template_part('template-parts/global/breadcrumb');
?>
	<div class="product">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-5">
					<?php
						/**
						 * Hook: woocommerce_sidebar.
						 *
						 * @hooked woocommerce_get_sidebar - 10
						 */
						do_action( 'woocommerce_sidebar' );
					?>
				</div>
				<div class="col-lg-9 col-md-7">
					<p>archive-product.php</p>
					<div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
								<?php
									$args = array(
										'post_type' => 'product',
										'posts_per_page' => -1,
										'meta_query'     => array(
											array(
												'key'           => '_sale_price',
												'value'         => 0,
												'compare'       => '>',
												'type'          => 'numeric'
											)
										)
									);
									
									$query = new WP_Query( $args ); // Fix: Pass $args instead of $query to WP_Query
									
									if ( $query->have_posts() ) {
										while ( $query->have_posts() ) {
											$query->the_post();
											global $product; // Ensure global $product is defined for WooCommerce functions
											?>
											<div class="col-lg-4">
												<div class="product__discount__item">
													<div class="product__discount__item__pic set-bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
													<?php woocommerce_show_product_loop_sale_flash(); ?>
														<ul class="product__item__pic__hover">
															<li><a href="<?php echo site_url(); ?>/?add_to_wishlist=<?php echo get_the_ID(); ?>/&amp;_wpnonce=2361a25de4" class="add_to_wishlist single_add_to_wishlist" data-product-id="<?php echo get_the_ID(); ?>" data-product-type="simple" data-original-product-id="<?php echo get_the_ID(); ?>"><i class="yith-wcwl-icon fa fa-heart-o"></i></a></li>
									
															<li><a href="<?php echo site_url(); ?>/?action=yith-woocompare-add-product&amp;id=<?php echo get_the_ID(); ?>" class="compare" data-product_id="<?php echo get_the_ID(); ?>"><i class="fa fa-shopping-cart"></i></a></li>
									
															<li><a href="<?php echo site_url(); ?>/?add-to-cart=<?php echo get_the_ID(); ?>" aria-describedby="woocommerce_loop_add_to_cart_link_describedby_<?php echo get_the_ID(); ?>" class="product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>"><i class="fa fa-shopping-cart"></i></a></li>
														</ul>
													</div>
													<div class="product__discount__item__text">
														<span><?php echo $product->get_categories(); ?></span>
														<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
														<?php woocommerce_template_loop_price(); ?>
													</div>
												</div>
											</div>
											<?php
										}
										wp_reset_postdata(); // Fix: Reset post data after custom query
									} else {
										echo '<p>' . esc_html__( 'No products found', 'ogani' ) . '</p>'; // Fix: Added fallback for no products found
									}
								?>
                            </div>
                        </div>
                    </div>
					<?php
						if ( woocommerce_product_loop() ) {
							
							/**
							 * Hook: woocommerce_before_shop_loop.
							 *
							 * @hooked woocommerce_output_all_notices - 10
							 * @hooked woocommerce_result_count - 20
							 * @hooked woocommerce_catalog_ordering - 30
							 */
							do_action( 'woocommerce_before_shop_loop' );
						
							woocommerce_product_loop_start();
						
							if ( wc_get_loop_prop( 'total' ) ) {
								while ( have_posts() ) {
									the_post();
						
									/**
									 * Hook: woocommerce_shop_loop.
									 */
									do_action( 'woocommerce_shop_loop' );
						
									wc_get_template_part( 'content', 'product' );
								}
							}
						
							woocommerce_product_loop_end();
						
							/**
							 * Hook: woocommerce_after_shop_loop.
							 *
							 * @hooked woocommerce_pagination - 10
							 */
							do_action( 'woocommerce_after_shop_loop' );
						} else {
							/**
							 * Hook: woocommerce_no_products_found.
							 *
							 * @hooked wc_no_products_found - 10
							 */
							do_action( 'woocommerce_no_products_found' );
						}
					?>
				</div>
			</div>
		</div>
	</div>
<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action( 'woocommerce_before_main_content' );

/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @hooked woocommerce_product_taxonomy_archive_header - 10
 */
// do_action( 'woocommerce_shop_loop_header' );

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
// do_action( 'woocommerce_after_main_content' );



get_footer( 'shop' );
