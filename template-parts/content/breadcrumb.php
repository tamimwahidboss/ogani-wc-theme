    <!-- Blog Details Hero Begin -->
    <section class="blog-details-hero set-bg"style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/blog/details/details-hero.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2><?php the_title(); ?></h2>
                        <ul>
                            <li>By 
                                <?php
                                    $author_id = $post->post_author;
                                    echo get_the_author_meta( 'display_name', $author_id );
                                ?>
                            </li>
                            <li><?php echo get_the_date( 'F j, Y' ); ?></li>
                            <li><?php echo get_comments_number(); ?> Comments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->