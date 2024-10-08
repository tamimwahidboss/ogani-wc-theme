
    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <?php
                            $categories = get_terms( 'product_cat', array(
                                'hide_empty' => 0,
                                'orderby' => 'ASC'
                            ) );
                            if ( ! is_wp_error( $categories ) && ! empty( $categories ) ) {
                                foreach( $categories as $category ) {
                                    ?>
                                    <li data-filter=".<?php echo esc_attr( $category->slug ); ?>"><?php echo esc_html( $category->name ); ?></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 8,
                );
                $loop = new WP_Query( $args );
                if( $loop->have_posts() ) {
                    while( $loop->have_posts() ) : $loop->the_post();
                    $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
                    $cat_classes = '';
                    if ( ! is_wp_error( $product_cats ) && ! empty( $product_cats ) ) {
                        foreach ( $product_cats as $product_cat ) {
                            $cat_classes .= ' ' . esc_attr( $product_cat->slug );
                        }
                    }
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix<?php echo $cat_classes; ?>">
                        <?php wc_get_template_part('content', 'product'); ?>
                    </div>
                    <?php
                    endwhile;
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->