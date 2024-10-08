<?php
/**
 * The template for displaying the footer
 */

?>
    <!-- Footer Section Begin --> 
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="<?php site_url() ?>"><img src="<?php echo get_theme_mod('ogani_footer_logo'); ?>" alt=""></a>
                        </div>
                        <ul>
                            <li><?php echo get_theme_mod('ogani_footer_address'); ?></li>
                            <li><?php echo get_theme_mod('ogani_footer_phone'); ?></li>
                            <li><?php echo get_theme_mod('ogani_footer_email'); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <div class="row">
                            <div class="col-6">
                                <?php
                                if ( has_nav_menu( 'footer-menu-1' ) ) {
                                    ?>
                                    <h6><?php echo wp_get_nav_menu_name( 'footer-menu-1' ); ?></h6>
                                    <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'footer-menu-1',
                                                'menu_id'        => 'footer-menu-1',
                                            )
                                        );
                                    ?>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="col-6">
                                <?php
                                if ( has_nav_menu( 'footer-menu-2' ) ) {
                                    ?>
                                    <h6><?php echo wp_get_nav_menu_name( 'footer-menu-2' ); ?></h6>
                                    <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'footer-menu-2',
                                                'menu_id'        => 'footer-menu-2',
                                            )
                                        );
                                    ?>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6><?php echo get_theme_mod('ogani_footer_newsletter_title'); ?></h6>
                        <p><?php echo get_theme_mod('ogani_footer_newsletter_desc'); ?></p>
                        <?php echo do_shortcode(get_theme_mod('ogani_footer_cnt_7')); ?>
                        <div class="footer__widget__social">
                            <a href="<?php echo get_theme_mod('ogani_footer_fb') ?>"><i class="fa-brands fa-facebook"></i></a>
                            <a href="<?php echo get_theme_mod('ogani_footer_insta') ?>"><i class="fa-brands fa-instagram"></i></a>
                            <a href="<?php echo get_theme_mod('ogani_footer_x') ?>"><i class="fa-brands fa-twitter"></i></a>
                            <a href="<?php echo get_theme_mod('ogani_footer_pr') ?>"><i class="fa-brands fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="<?php echo get_template_directory_uri() ?>/img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->


	<?php wp_footer(); ?>
</body>

</html>