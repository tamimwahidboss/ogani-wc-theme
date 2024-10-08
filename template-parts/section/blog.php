            <!-- Blog Section Begin -->
            <section class="from-blog spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title from-blog__title">
                                <h2>From The Blog</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $args = array(
                            'post_type'      => 'post',
                            'posts_per_page' => 1,
                            'orderby'        => 'date',
                            'order'          => 'DESC'
                        );
                        $loop = new WP_Query( $args );
                        if ( $loop->have_posts() ) {
                            while ( $loop->have_posts() ) : $loop->the_post();
                                ?>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="blog__item">
                                        <div class="blog__item__pic">
                                            <?php if ( has_post_thumbnail() ) : ?>
                                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?></a>
                                            <?php else : ?>
                                                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/blog/blog-default.jpg' ); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                                            <?php endif; ?>
                                        </div>
                                        <div class="blog__item__text">
                                            <ul>
                                                <li><i class="fa fa-calendar-o"></i> <?php echo get_the_date( 'M j, Y' ); ?></li>
                                                <li><i class="fa fa-comment-o"></i> <?php echo get_comments_number(); ?></li>
                                            </ul>
                                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                            <p><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        } else {
                            echo '<div class="col-lg-12"><p>' . esc_html__( 'No posts found', 'ogani' ) . '</p></div>';
                        }
                        ?>
                    </div>
                </div>
            </section>
            <!-- Blog Section End -->