<?php
/**
* Template Name: Wishlist
*/

get_header();
get_template_part('template-parts/global/breadcrumb');
// the_content();
?>


    <div class="container">
            <?php
                echo do_shortcode( '[yith_wcwl_wishlist]' );
            ?>
    </div>

    

<?php get_footer(); ?>