    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 3,
                                    'orderby' => 'date',
                                    'order' => 'DESC'
                                );
                                $loop = new WP_Query( $args );
                                    if( $loop->have_posts() ) {
                                        while( $loop->have_posts() ) : $loop->the_post();
                                            global $product;
                                            ?>
                                            <a href="<?php the_permalink(); ?>" class="latest-product__item">
                                                <div class="latest-product__item__pic">
                                                    <?php if ( has_post_thumbnail() ) : ?>
                                                        <?php the_post_thumbnail( 'woocommerce_thumbnail' ); ?>
                                                    <?php else : ?>
                                                        <img src="<?php echo esc_url( wc_placeholder_img_src() ); ?>" alt="<?php the_title(); ?>">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="latest-product__item__text">
                                                    <h6><?php the_title(); ?></h6>
                                                    <span><?php echo $product->get_price_html(); ?></span>
                                                </div>
                                            </a>
                                            <?php
                                        endwhile;
                                    } else {
                                        echo '<p>' . esc_html__( 'No products found', 'ogani' ) . '</p>';
                                    }
                                    wp_reset_postdata();
                                ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 3,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'offset' => 3
                                );
                                $loop = new WP_Query( $args );
                                if( $loop->have_posts() ) {
                                    while( $loop->have_posts() ) : $loop->the_post();
                                        ?>
                                        <a href="<?php the_permalink(); ?>" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <?php if ( has_post_thumbnail() ) : ?>
                                                    <?php the_post_thumbnail( 'woocommerce_thumbnail' ); ?>
                                                <?php else : ?>
                                                    <img src="<?php echo esc_url( wc_placeholder_img_src() ); ?>" alt="<?php the_title(); ?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?php the_title(); ?></h6>
                                                <span><?php echo $product->get_price_html(); ?></span>
                                            </div>
                                        </a>
                                        <?php
                                    endwhile;
                                } else {
                                    echo '<p>' . esc_html__( 'No products found', 'ogani' ) . '</p>';
                                }
                                wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php
                                    $args = array(
                                        'post_type' => 'product',
                                        'posts_per_page' => 3,
                                        'orderby' => 'meta_value_num',
                                        'meta_key' => 'total_sales',
                                        'order' => 'DESC',
                                    );
                                    $loop = new WP_Query( $args );
                                    if( $loop->have_posts() ) {
                                        while( $loop->have_posts() ) : $loop->the_post();
                                            ?>
                                            <a href="<?php the_permalink(); ?>" class="latest-product__item">
                                                <div class="latest-product__item__pic">
                                                    <?php if ( has_post_thumbnail() ) : ?>
                                                        <?php the_post_thumbnail( 'woocommerce_thumbnail' ); ?>
                                                    <?php else : ?>
                                                        <img src="<?php echo esc_url( wc_placeholder_img_src() ); ?>" alt="<?php the_title(); ?>">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="latest-product__item__text">
                                                    <h6><?php the_title(); ?></h6>
                                                    <span><?php echo $product->get_price_html(); ?></span>
                                                </div>
                                            </a>
                                            <?php
                                        endwhile;
                                    } else {
                                        echo '<p>' . esc_html__( 'No products found', 'ogani' ) . '</p>';
                                    }
                                    wp_reset_postdata();
                                ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 3,
                                    'orderby' => 'meta_value_num',
                                    'meta_key' => 'total_sales',
                                    'order' => 'DESC',
                                    'offset' => 3
                                );
                                $loop = new WP_Query( $args );
                                if( $loop->have_posts() ) {
                                    while( $loop->have_posts() ) : $loop->the_post();
                                        ?>
                                        <a href="<?php the_permalink(); ?>" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <?php if ( has_post_thumbnail() ) : ?>
                                                    <?php the_post_thumbnail( 'woocommerce_thumbnail' ); ?>
                                                <?php else : ?>
                                                    <img src="<?php echo esc_url( wc_placeholder_img_src() ); ?>" alt="<?php the_title(); ?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?php the_title(); ?></h6>
                                                <span><?php echo $product->get_price_html(); ?></span>
                                            </div>
                                        </a>
                                        <?php
                                    endwhile;
                                } else {
                                    echo '<p>' . esc_html__( 'No products found', 'ogani' ) . '</p>';
                                }
                                wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                            <?php
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 3,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'offset' => 3
                                );
                                $loop = new WP_Query( $args );
                                if( $loop->have_posts() ) {
                                    while( $loop->have_posts() ) : $loop->the_post();
                                        ?>
                                        <a href="<?php the_permalink(); ?>" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <?php if ( has_post_thumbnail() ) : ?>
                                                    <?php the_post_thumbnail( 'woocommerce_thumbnail' ); ?>
                                                <?php else : ?>
                                                    <img src="<?php echo esc_url( wc_placeholder_img_src() ); ?>" alt="<?php the_title(); ?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?php the_title(); ?></h6>
                                                <span><?php echo $product->get_price_html(); ?></span>
                                            </div>
                                        </a>
                                        <?php
                                    endwhile;
                                } else {
                                    echo '<p>' . esc_html__( 'No products found', 'ogani' ) . '</p>';
                                }
                                wp_reset_postdata();
                            ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 3,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'offset' => 3
                                );
                                $loop = new WP_Query( $args );
                                if( $loop->have_posts() ) {
                                    while( $loop->have_posts() ) : $loop->the_post();
                                        ?>
                                        <a href="<?php the_permalink(); ?>" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <?php if ( has_post_thumbnail() ) : ?>
                                                    <?php the_post_thumbnail( 'woocommerce_thumbnail' ); ?>
                                                <?php else : ?>
                                                    <img src="<?php echo esc_url( wc_placeholder_img_src() ); ?>" alt="<?php the_title(); ?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?php the_title(); ?></h6>
                                                <span><?php echo $product->get_price_html(); ?></span>
                                            </div>
                                        </a>
                                        <?php
                                    endwhile;
                                } else {
                                    echo '<p>' . esc_html__( 'No products found', 'ogani' ) . '</p>';
                                }
                                wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->