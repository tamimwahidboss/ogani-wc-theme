<?php

// Theme header customizer options
// esc_html__('', 'ogani'),
function ogani_theme_customizer($wp_customize) {
    // Add a panel for header customization
    $wp_customize->add_panel('ogani_panel_01', array(
        'priority'    => 10, // Set the priority of the panel
        'title'       => esc_html__('Header', 'ogani'), // Set the title of the panel
        'description' => esc_html__('If you want to modify header elements, you can do it here.', 'ogani'), // Set the description of the panel
    ));
    
    // Add a section within the panel for top header settings
    $wp_customize->add_section('top_header', array(
        'title'       => esc_html__('Top Header', 'ogani'), // Set the title of the section
        'description' => esc_html__('If you want to modify top header elements, you can do it here.', 'ogani'), // Set the description of the section
        'panel'       => 'ogani_panel_01', // Associate this section with the previously created panel
    ));
    
    // Add a setting for the header email
    $wp_customize->add_setting('header_email', array(
        'default'           => esc_attr__('hello@colorlib.com', 'ogani'), // Set the default value for the setting
        'sanitize_callback' => 'sanitize_email', // Add a callback to sanitize the email input
    ));
    
    // Add a control for the header email setting
    $wp_customize->add_control('header_email', array(
        'label'       => esc_html__('Header email', 'ogani'), // Set the label for the control
        'description' => esc_html__('If you want to change the top header email, you can do it here.', 'ogani'), // Set the description for the control
        'section'     => 'top_header', // Associate this control with the top header section
        'settings'    => 'header_email', // Link the control to the header email setting
    ));

    // Add a setting for the header notice (this appears to duplicate the header email setting, consider changing the default value and callback)
    $wp_customize->add_setting('header_notice', array(
        'default'           => esc_attr__('Free Shipping for all Order of $99', 'ogani'), // Set a default value for the notice
        'sanitize_callback' => 'sanitize_text_field', // Add a callback to sanitize the notice input
    ));
    
    // Add a control for the header notice setting
    $wp_customize->add_control('header_notice', array(
        'label'       => esc_html__('Header Notice', 'ogani'), // Set the label for the control
        'description' => esc_html__('If you want to change the top header notice, you can do it here.', 'ogani'), // Set the description for the control
        'section'     => 'top_header', // Associate this control with the top header section
        'settings'    => 'header_notice', // Link the control to the header notice setting
    ));

    // Add a setting for the Facebook link
    $wp_customize->add_setting('fb_social', array(
        'default'           => '#', // Set the default value for the setting
        'sanitize_callback' => 'esc_url_raw', // Add a callback to sanitize the input as a URL
    ));
    
    // Add a control for the Facebook link setting
    $wp_customize->add_control('fb_social', array(
        'label'       => esc_html__('Facebook Link', 'ogani'), // Set the label for the control
        'description' => esc_html__('If you want to change the Facebook link, you can do it here.', 'ogani'), // Set the description for the control
        'section'     => 'top_header', // Associate this control with the top header section
        'settings'    => 'fb_social', // Link the control to the Facebook link setting
        'type'        => 'url', // Specify the control type as a URL input
    ));

    // Add a setting for the Twitter (X) link
    $wp_customize->add_setting('x_social', array(
        'default'           => '#', // Set the default value for the setting
        'sanitize_callback' => 'esc_url_raw', // Add a callback to sanitize the input as a URL
    ));
    
    // Add a control for the Twitter (X) link setting
    $wp_customize->add_control('x_social', array(
        'label'       => esc_html__('Twitter (X) Link', 'ogani'), // Set the label for the control
        'description' => esc_html__('If you want to change the Twitter (X) link, you can do it here.', 'ogani'), // Set the description for the control
        'section'     => 'top_header', // Associate this control with the top header section
        'settings'    => 'x_social', // Link the control to the Twitter (X) link setting
        'type'        => 'url', // Specify the control type as a URL input
    ));

    // Add a setting for the Instagram link
    $wp_customize->add_setting('in_social', array(
        'default'           => '#', // Set the default value for the setting
        'sanitize_callback' => 'esc_url_raw', // Add a callback to sanitize the input as a URL
    ));
    
    // Add a control for the Instagram link setting
    $wp_customize->add_control('in_social', array(
        'label'       => esc_html__('Instagram Link', 'ogani'), // Set the label for the control
        'description' => esc_html__('If you want to change the Instagram link, you can do it here.', 'ogani'), // Set the description for the control
        'section'     => 'top_header', // Associate this control with the top header section
        'settings'    => 'in_social', // Link the control to the Instagram link setting
        'type'        => 'url', // Specify the control type as a URL input
    ));

    // Add a setting for the Pinterest link
    $wp_customize->add_setting('pr_social', array(
        'default'           => '#', // Set the default value for the setting
        'sanitize_callback' => 'esc_url_raw', // Add a callback to sanitize the input as a URL
    ));
    
    // Add a control for the Pinterest link setting
    $wp_customize->add_control('pr_social', array(
        'label'       => esc_html__('Pinterest Link', 'ogani'), // Set the label for the control
        'description' => esc_html__('If you want to change the Pinterest link, you can do it here.', 'ogani'), // Set the description for the control
        'section'     => 'top_header', // Associate this control with the top header section
        'settings'    => 'pr_social', // Link the control to the Pinterest link setting
        'type'        => 'url', // Specify the control type as a URL input
    ));
    
    // Add a section within the panel for main header settings
    $wp_customize->add_section('main_header', array(
        'title'       => esc_html__('Main Header', 'ogani'), // Set the title of the section
        'description' => esc_html__('If you want to modify main header elements, you can do it here.', 'ogani'), // Set the description of the section
        'panel'       => 'ogani_panel_01', // Associate this section with the previously created panel
    ));
    
    // Add a setting for the header logo
    $wp_customize->add_setting('header_logo', array(
        'default'           => get_bloginfo('template_directory') . '/assets/img/logo.png', // Set the default value for the setting
        'sanitize_callback' => 'esc_url_raw', // Add a callback to sanitize the URL input
    ));
    
    // Add a control for the header logo setting
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
        'label'       => __( 'Site Logo', 'ogani' ), // Set the label for the control
        'description' => esc_html__('Upload the site logo here.', 'ogani'), // Set the description for the control
        'section'     => 'main_header', // Associate this control with the main header section
        'settings'    => 'header_logo', // Link the control to the header logo setting
    )));

    // Add a panel for header customization
    $wp_customize->add_panel('ogani_panel_02', array(
        'priority'    => 10, // Set the priority of the panel
        'title'       => esc_html__('Hero Section', 'ogani'), // Set the title of the panel
        'description' => esc_html__('If you want to modify header elements, you can do it here.', 'ogani'), // Set the description of the panel
    ));
    // Add a section within the panel for top header settings
    $wp_customize->add_section('hero_section', array(
        'title'       => esc_html__('Hero Search Bar', 'ogani'),
        'description' => esc_html__('If you want to modify hero search bar elements, you can do it here.', 'ogani'),
        'panel'       => 'ogani_panel_02'
    ));

    // Add a setting for the business number (not email)
    $wp_customize->add_setting('hero_num', array(
        'default'           => esc_attr__('+65 11.188.888', 'ogani'), // Set the default value for the setting
        'sanitize_callback' => 'sanitize_text_field', // Use sanitize_text_field for text input
    ));

    // Add a control for the business number setting
    $wp_customize->add_control('hero_num', array(
        'label'       => esc_html__('Business Number', 'ogani'), // Set the label for the control
        'description' => esc_html__('If you want to change your business number, you can do it here.', 'ogani'), // Set the description for the control
        'section'     => 'hero_section', // Associate this control with the top header section
        'settings'    => 'hero_num', // Link the control to the business number setting
    ));

    // Add a setting for the business number (not email)
    $wp_customize->add_setting('hero_support', array(
        'default'           => esc_html__('Support 24/7 time', 'ogani'), // Set the default value for the setting
        'sanitize_callback' => 'sanitize_text_field', // Use sanitize_text_field for text input
    ));

    // Add a control for the business number setting
    $wp_customize->add_control('hero_support', array(
        'label'       => esc_html__('Support Text Field', 'ogani'), // Set the label for the control
        'description' => esc_html__('If you want to change your support text, you can do it here.', 'ogani'), // Set the description for the control
        'section'     => 'hero_section', // Associate this control with the top header section
        'settings'    => 'hero_support', // Link the control to the business number setting
    ));

    // Add a section for Hero Banner settings
    $wp_customize->add_section('hero_banner_section', array(
        'title'       => esc_html__('Hero Banner', 'ogani'),
        'description' => esc_html__('If you want to modify hero banner elements, you can do it here.', 'ogani'),
        'panel'       => 'ogani_panel_02'
    ));

    // Add setting and control for Hero Title within the banner section
    $wp_customize->add_setting('hero_title', array(
        'default'           => esc_html__('FRUIT FRESH', 'ogani'), // Set the default value for the setting
        'sanitize_callback' => 'sanitize_text_field', // Use sanitize_text_field for text input
    ));

    $wp_customize->add_control('hero_title', array(
        'label'       => esc_html__('Hero Title', 'ogani'), // Set the label for the control
        'description' => esc_html__('If you want to change hero title, you can do it here.', 'ogani'), // Set the description for the control
        'section'     => 'hero_banner_section', // Associate with banner section
        'settings'    => 'hero_title', // Link the control to the setting
    ));

    // Add setting and control for Hero Title within the banner section
    $wp_customize->add_setting('hero_banner_title', array(
        'default'           => __('Vegetable <br />100% Organic', 'ogani'), // Set the default value for the setting
    ));

    $wp_customize->add_control('hero_banner_title', array(
        'label'       => esc_html__('Hero Banner Title', 'ogani'), // Set the label for the control
        'description' => esc_html__('If you want to change hero banner title, you can do it here.', 'ogani'), // Set the description for the control
        'type' => 'textarea',
        'section'     => 'hero_banner_section', // Associate with banner section
        'settings'    => 'hero_banner_title', // Link the control to the setting
    ));

    // Add setting and control for Hero Description within the banner section
    $wp_customize->add_setting('hero_banner_description', array(
        'default'           => esc_html__('Free Pickup and Delivery Available', 'ogani'), // Set the default value for the setting
        'sanitize_callback' => 'sanitize_text_field', // Use sanitize_text_field for text input
    ));

    $wp_customize->add_control('hero_banner_description', array(
        'label'       => esc_html__('Hero Banner Description', 'ogani'), // Set the label for the control
        'description' => esc_html__('If you want to change hero banner description, you can do it here.', 'ogani'), // Set the description for the control
        'section'     => 'hero_banner_section', // Associate with banner section
        'settings'    => 'hero_banner_description', // Link the control to the setting
    ));

    // Add setting and control for Hero Button Text within the banner section
    $wp_customize->add_setting('hero_banner_button_text', array(
        'default'           => esc_html__('SHOP NOW', 'ogani'), // Set the default value for the setting
        'sanitize_callback' => 'sanitize_text_field', // Use sanitize_text_field for text input
    ));

    $wp_customize->add_control('hero_banner_button_text', array(
        'label'       => esc_html__('Hero Banner Button Text', 'ogani'), // Set the label for the control
        'description' => esc_html__('If you want to change hero banner button text, you can do it here.', 'ogani'), // Set the description for the control
        'section'     => 'hero_banner_section', // Associate with banner section
        'settings'    => 'hero_banner_button_text', // Link the control to the setting
    ));

    // Add setting and control for Hero Button Link within the banner section
    $wp_customize->add_setting('hero_banner_button_link', array(
        'default'           => esc_attr__('#', 'ogani'), // Set the default value for the setting
        'sanitize_callback' => 'esc_url_raw', // Use esc_url_raw for URL sanitization
    ));

    // Ensure control name matches setting name for clarity
    $wp_customize->add_control('hero_banner_button_link', array(
        'label'       => esc_html__('Hero Banner Button Link', 'ogani'), // Set the label for the control
        'description' => esc_html__('If you want to change the hero banner button link, you can do it here.', 'ogani'), // Set the description for the control
        'section'     => 'hero_banner_section', // Associate with banner section
        'settings'    => 'hero_banner_button_link', // Link the control to the correct setting
    ));

    // Add a panel for footer elements 
    $wp_customize->add_panel('ogani_panel_03', array(
        'priority'    => 90, // Set the priority of the panel
        'title'       => esc_html__('Footer', 'ogani'), // Set the title of the panel
        'description' => esc_html__('If you want to modify header elements, you can do it here.', 'ogani'), // Set the description of the panel
    ));

    // Add a section for footer elements
    $wp_customize->add_section('ogani_footer_sec', array(
        'title'       => esc_html__('Footer Logo Colum', 'ogani'),
        'description' => esc_html__('Modify theme footer elements here.', 'ogani'),
        'panel' => 'ogani_panel_03',
    ));

    // Add setting and control for footer logo
    $wp_customize->add_setting('ogani_footer_logo', array(
        'default'           => get_bloginfo('template_directory') . '/assets/img/logo.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ogani_footer_logo', array(
        'label'       => esc_html__( 'Footer Logo', 'ogani' ),
        'description' => esc_html__('Upload the footer logo here.', 'ogani'),
        'section'     => 'ogani_footer_sec',
        'settings'    => 'ogani_footer_logo',
        'priority'    => 10,
    )));

    // Add setting and control for footer address
    $wp_customize->add_setting('ogani_footer_address', array(
        'default'           => esc_html__('Address: 60-49 Road 11378', 'ogani'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('ogani_footer_address', array(
        'label'    => esc_html__('Footer Address', 'ogani'),
        'section'  => 'ogani_footer_sec',
        'settings' => 'ogani_footer_address',
        'type'     => 'text',
        'priority' => 20,
    ));

    // Add setting and control for footer phone
    $wp_customize->add_setting('ogani_footer_phone', array(
        'default'           => esc_html__('Phone: +65 11.188.888', 'ogani'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('ogani_footer_phone', array(
        'label'    => esc_html__('Footer Phone', 'ogani'),
        'section'  => 'ogani_footer_sec',
        'settings' => 'ogani_footer_phone',
        'type'     => 'text',
        'priority' => 30,
    ));

    // Add setting and control for footer email
    $wp_customize->add_setting('ogani_footer_email', array(
        'default'           => esc_html__('Email: hello@colorlib.com', 'ogani'),
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('ogani_footer_email', array(
        'label'    => esc_html__('Footer Email', 'ogani'),
        'section'  => 'ogani_footer_sec',
        'settings' => 'ogani_footer_email',
        'type'     => 'email',
        'priority' => 40,
    ));

    // Add a section for footer elements
    $wp_customize->add_section('ogani_footer_newslatter', array(
        'title'       => esc_html__('Newslatter Section', 'ogani'),
        'description' => esc_html__('Modify theme footer elements here.', 'ogani'),
        'panel' => 'ogani_panel_03',
    ));

    // Add setting and control for footer newsletter title
    $wp_customize->add_setting('ogani_footer_newsletter_title', array(
        'default'           => esc_html__('Join Our Newsletter Now', 'ogani'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('ogani_footer_newsletter_title', array(
        'label'    => esc_html__('Newsletter Title', 'ogani'),
        'section'  => 'ogani_footer_newslatter',
        'settings' => 'ogani_footer_newsletter_title',
        'type'     => 'text',
        'priority' => 40,
    ));

    // Add setting and control for footer newsletter description
    $wp_customize->add_setting('ogani_footer_newsletter_desc', array(
        'default'           => esc_html__('Get E-mail updates about our latest shop and special offers.', 'ogani'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('ogani_footer_newsletter_desc', array(
        'label'    => esc_html__('Newsletter Description', 'ogani'),
        'section'  => 'ogani_footer_newslatter',
        'settings' => 'ogani_footer_newsletter_desc',
        'type'     => 'text',
        'priority' => 40,
    ));

    // Add setting and control for footer newsletter description
    $wp_customize->add_setting('ogani_footer_cnt_7', array(
        'default'           => '#',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('ogani_footer_cnt_7', array(
        'label'    => esc_html__('Newsletter Shortcode', 'ogani'),
        'section'  => 'ogani_footer_newslatter',
        'settings' => 'ogani_footer_cnt_7',
        'type'     => 'text',
        'priority' => 40,
    ));

    // Add setting and control for footer Facebook link
    $wp_customize->add_setting('ogani_footer_fb', array(
        'default'           => esc_url('#', 'ogani'),
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('ogani_footer_fb', array(
        'label'    => esc_html__('Facebook Linking', 'ogani'),
        'section'  => 'ogani_footer_newslatter',
        'settings' => 'ogani_footer_fb',
        'type'     => 'url',
        'priority' => 40,
    ));

    // Add setting and control for footer Instagram link
    $wp_customize->add_setting('ogani_footer_insta', array(
        'default'           => esc_url('#', 'ogani'),
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('ogani_footer_insta', array(
        'label'    => esc_html__('Instagram Linking', 'ogani'),
        'section'  => 'ogani_footer_newslatter',
        'settings' => 'ogani_footer_insta',
        'type'     => 'url',
        'priority' => 40,
    ));

    // Add setting and control for footer X (formerly Twitter) link
    $wp_customize->add_setting('ogani_footer_x', array(
        'default'           => esc_url('#', 'ogani'),
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('ogani_footer_x', array(
        'label'    => esc_html__('X Linking', 'ogani'),
        'section'  => 'ogani_footer_newslatter',
        'settings' => 'ogani_footer_x',
        'type'     => 'url',
        'priority' => 40,
    ));

    // Add setting and control for footer PR link
    $wp_customize->add_setting('ogani_footer_pr', array(
        'default'           => esc_url('#', 'ogani'),
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('ogani_footer_pr', array(
        'label'    => esc_html__('PR Linking', 'ogani'),
        'section'  => 'ogani_footer_newslatter',
        'settings' => 'ogani_footer_pr',
        'type'     => 'url',
        'priority' => 40,
    ));

}

// Hook the customizer registration function to the 'customize_register' action
add_action('customize_register', 'ogani_theme_customizer');

// practice
// $wp_customize->add_setting( 'setting_id', array(
// 	'type' => 'theme_mod', // or 'option'
// 	'capability' => 'edit_theme_options',
// 	'theme_supports' => '', // Rarely needed.
// 	'default' => '',
// 	'transport' => 'refresh', // or postMessage
// 	'sanitize_callback' => '',
// 	'sanitize_js_callback' => '', // Basically to_json.
//   ) );