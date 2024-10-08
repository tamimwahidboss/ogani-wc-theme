    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Departments</span>
                            <span class="fa-solid fa-chevron-down"></span>
                        </div>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-2',
                            'menu_id' => 'categories-menu',
                        ));
                        ?>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">All Categories <span class="fa-solid fa-chevron-down"></span></div>
                                <input type="text" name="s" id="search" placeholder="What do you need?" value="<?php esc_html(the_search_query()); ?>" />
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5><?php echo get_theme_mod('hero_num'); ?></h5>
                                <span><?php echo get_theme_mod('hero_support'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

