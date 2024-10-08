<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ogani
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php
    wp_head();
    if ( ! function_exists( 'is_woocommerce_activated' ) ) {
        global $woocommerce;
        $total = $woocommerce->cart->total;
    }
    ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="<?php site_url(); ?>"><img src="<?php echo get_theme_mod('header_logo') ?>" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="<?php echo get_page_link('wishlist'); ?>"><i class="fa fa-heart"></i> <span>
                <?php $count = 0;
                    if( function_exists( 'yith_wcwl_count_products' ) ){
                    $count = yith_wcwl_count_products();
                    }
                    echo $count;
                ?>
                </span></a></li>
                <li><a href="<?php echo wc_get_cart_url() ?>"><i class="fa fa-shopping-bag"></i> <span><?php echo WC()->cart->get_cart_contents_count(); ?></span></a></li>
            </ul>
            <div class="header__cart__price">item: <span><?php echo $total; ?></span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="<?php echo get_template_directory_uri() ?>/img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
            ?>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="<?php echo get_theme_mod('fb_social'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="<?php echo get_theme_mod('x_social'); ?>"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="<?php echo get_theme_mod('in_social'); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="<?php echo get_theme_mod('pr_social'); ?>"><i class="fa-brands fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa-regular fa-envelope"></i> <?php echo get_theme_mod('header_email') ?></li>
                <li><?php echo get_theme_mod('header_notice') ?></li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> <?php echo get_theme_mod('header_email') ?></li>
                                <li><?php echo get_theme_mod('header_notice') ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="<?php echo get_theme_mod('fb_social'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="<?php echo get_theme_mod('x_social'); ?>"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="<?php echo get_theme_mod('in_social'); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="<?php echo get_theme_mod('pr_social'); ?>"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/language.png" alt="">
                                <div>English</div>
                                <span class="fa-solid fa-chevron-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                
                            <?php
                                if ( is_user_logged_in() ) :
                                    $current_user = wp_get_current_user();
                                    ?>
                                        <a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>"><?php printf( 'Welcome, %s!', esc_html( $current_user->first_name ) ); ?></a>
                                    <?php
                                    
                                else :
                                    ?>
                                    <a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>"> <i class="fa-regular fa-user"></i><?php _e( 'Login', 'ogani' ); ?></a>
                                    <?php
                                endif;
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('header_logo'); ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                )
                            );
                        ?>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                        <li><a href="<?php echo get_page_link(2691); ?>"><i class="fa fa-heart"></i> 
                        <span><?php $count = 0;
                                    if( function_exists( 'yith_wcwl_count_products' ) ){
                                    echo $count = yith_wcwl_count_products();
                                    }
                                ?></span></a></li>
                            <li><a href="<?php echo wc_get_cart_url() ?>"><i class="fa fa-shopping-bag"></i> <span><?php echo WC()->cart->get_cart_contents_count(); ?></span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span><?php echo $total; ?></span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->







	
	
