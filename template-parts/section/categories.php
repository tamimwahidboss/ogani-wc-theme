<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <?php
                    // Get all product categories
                    $product_category_terms = get_terms( array(
                        'taxonomy'   => "product_cat",
                        'hide_empty' => 1,
                    ));

                    foreach ( $product_category_terms as $term ) {
                        // Get the term link
                        $term_link = get_term_link( $term, 'product_cat' );

                        // Get the term thumbnail
                        $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
                        $cat_thumb = wp_get_attachment_url( $thumbnail_id );
                        ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" style="background-image: url('<?php echo esc_url( $cat_thumb ); ?>')">
                                <h5><a href="<?php echo esc_url( $term_link ); ?>"><?php echo esc_html( $term->name ); ?></a></h5>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->