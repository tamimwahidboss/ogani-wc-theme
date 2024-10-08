<?php

// Enqueue scripts and styles.
function ogani_scripts() {
	wp_enqueue_style( 'ogani-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ogani-style', 'rtl', 'replace' );
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap');
	// wp_enqueue_style( 'font-awesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4' );
	    wp_enqueue_style( 'font-awesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	// wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'elegant-icons', get_template_directory_uri() . '/assets/css/elegant-icons.css', array(), _S_VERSION );
	wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), _S_VERSION );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );

	// wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script('jquery', array(), _S_VERSION, true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/assets/js/mixitup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ogani-navigation', get_template_directory_uri() . '/assets/assets/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ogani_scripts' );