<?php
/**
 * Product loop sale flash
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/sale-flash.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

 global $product;
 
 // Check if the product is not a variable, grouped, or affiliate product
 if ( $product->is_type( 'simple' )) {
	 $price = get_post_meta( get_the_ID(), '_regular_price', true ); // Get the product regular price
	 $sale = get_post_meta( get_the_ID(), '_sale_price', true );     // Get the product sale price
 
	 if ( ! empty( $price ) && ! empty( $sale ) && $price > $sale ) {
		 // Calculate the discount percentage
		 $discount_percentage = round( ( ( $price - $sale ) / $price ) * 100 );
		 $flash_sale = $discount_percentage . '%';
	 }
 
	 if ( $product->is_on_sale() ) : ?>
 
		 <?php echo apply_filters( 'woocommerce_sale_flash', '<div class="product__discount__percent">' . esc_html( $flash_sale ) . '</div>', $product ); ?>
 
	 <?php endif;
 }

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
