<!-- Blog Section Begin -->
<section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
                        <ul id="sidebar">
                            <?php dynamic_sidebar('blog-sidebar'); ?>
                        </ul>
                    <?php } ?>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">

                        <?php
                        if( have_posts() ) :
                            while(have_posts()) : the_post();
                            ?>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <?php the_post_thumbnail('medium') ?>
                                    </div>
                                    <div class="blog__item__text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i> <?php the_date() ?></li>
                                            <li><i class="fa fa-comment-o"></i> <?php echo get_comments_number() ?></li>
                                        </ul>
                                        <h5><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                                        <p><?php the_excerpt() ?> </p>
                                        <a href="<?php the_permalink() ?>" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile;
                        else:
                        ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->