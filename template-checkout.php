<?php
/**
* Template Name: Checkout
*/

get_header();
get_template_part('template-parts/global/breadcrumb');
// the_content();
echo do_shortcode('[woocommerce_checkout]');

?>


    

    

<?php get_footer(); ?>