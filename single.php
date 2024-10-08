<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header();
get_template_part('template-parts/content/breadcrumb');
?>


    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
                        <ul id="sidebar">
                            <?php dynamic_sidebar('blog-sidebar'); ?>
                        </ul>
                    <?php } ?>
                </div>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <?php
                        // Get product categories
                        $category = get_the_category();
                        if ( ! empty( $category ) ) {
                            $category_name = esc_html( $category[0]->name );
                        } else {
                            $category_name = esc_html__( 'Uncategorized', 'text-domain' );
                        }

                        // Get product tags
                        $product_tags = get_the_terms( get_the_ID(), 'product_tag' );
                        if ( ! empty( $product_tags ) && ! is_wp_error( $product_tags ) ) {
                            $tag_names = array();
                            foreach ( $product_tags as $tag ) {
                                $tag_names[] = esc_html( $tag->name );
                            }
                            $tags_list = implode( ', ', $tag_names );
                        } else {
                            $tags_list = esc_html__( 'No tags', 'text-domain' );
                        }
                        if( have_posts() ) {
                            while( have_posts() ) : the_post();
                            ?>
                            <div class="blog__details__text">
                                <?php the_content(); ?>
                            </div>
                            <div class="blog__details__content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog__details__author">
                                            <div class="blog__details__author__pic">
                                                <img src="<?php echo esc_url( get_avatar_url( get_the_author_meta( 'ID' ) ) ); ?>" alt="<?php echo esc_attr( get_the_author_meta( 'display_name' ) ); ?>">
                                            </div>
                                            <div class="blog__details__author__text">
                                                <h6><?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?></h6>
                                                <span>
                                                    <?php
                                                    $user_meta = get_userdata( get_the_author_meta( 'ID' ) );
                                                    if ( ! empty( $user_meta->roles ) ) {
                                                        echo esc_html( ucfirst( $user_meta->roles[0] ) );
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog__details__widget">
                                        <ul>
                                            <li><span>Categories:</span> 
                                                <?php
                                                $categories = get_the_category();
                                                if ($categories) {
                                                    foreach ($categories as $category) {
                                                        echo esc_html($category->name) . ', ';
                                                    }
                                                } else {
                                                    echo 'No categories';
                                                }
                                                ?>
                                            </li>
                                            <li><span>Tags:</span> 
                                                <?php
                                                $tags = get_the_tags();
                                                if ($tags) {
                                                    foreach ($tags as $tag) {
                                                        echo esc_html($tag->name) . ', ';
                                                    }
                                                } else {
                                                    echo 'No tags';
                                                }
                                                ?>
                                            </li>
                                        </ul>
                                            <div class="blog__details__social">
                                                <?php
                                                $post_title = get_the_title();
                                                $post_url = get_permalink();
                                                $post_url_encoded = urlencode($post_url);
                                                $post_title_encoded = urlencode($post_title);
                                                ?>

                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= get_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                                                    <i class="fa-brands fa-facebook"></i>
                                                </a>
                                                <a href="https://twitter.com/intent/tweet?text=<?php echo $post_title_encoded; ?>&url=<?php echo $post_url_encoded; ?>" target="_blank" rel="noopener noreferrer">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                                <a href="https://plus.google.com/share?url=<?php echo $post_url_encoded; ?>" target="_blank" rel="noopener noreferrer">
                                                    <i class="fa-brands fa-google-plus"></i>
                                                </a>
                                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $post_url_encoded; ?>&title=<?php echo $post_title_encoded; ?>" target="_blank" rel="noopener noreferrer">
                                                    <i class="fa-brands fa-linkedin"></i>
                                                </a>
                                                <a href="mailto:?subject=<?php echo $post_title_encoded; ?>&body=<?php echo $post_url_encoded; ?>" target="_blank" rel="noopener noreferrer">
                                                    <i class="fa-solid fa-envelope"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        } else {
                            __('No post found', 'ogani');
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    
    <?php get_footer() ?>