<?php
/**
* Template Name: Cart
*/

get_header();
get_template_part('template-parts/global/breadcrumb');
the_content();
echo do_shortcode('[woocommerce_cart]');

?>


    

    

<?php get_footer(); ?>