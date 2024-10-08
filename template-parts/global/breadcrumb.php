    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/breadcrumb.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php mj_wp_breadcrumb(); ?>
                    <div class="breadcrumb__option">
                            <a href="<?php echo site_url(); ?>">Home</a>
                            <span><?php echo wp_title(  ); ?></span>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->