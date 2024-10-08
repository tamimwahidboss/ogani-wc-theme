<?php
/**
* Template Name: My Account
*/

get_header();
get_template_part('template-parts/global/breadcrumb');
// the_content();
?>

<div class="container">
    <?php 
echo do_shortcode('[woocommerce_my_account]');
?>
</div>

<?php get_footer(); ?>