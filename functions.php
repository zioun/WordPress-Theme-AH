<?php
// my theme function

// theme title
add_theme_support('title-tag');

// theme css and jquery file calling
function csm_css_js_file_callign (){
    wp_enqueue_style('csm-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri()."/css/bootstrap.css", array(), '5.0.2');
    wp_register_style('custom', get_template_directory_uri()."/css/custom.css", array(), '1.0.0');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    // Jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri()."/js/bootstrap.js", array(), '5.0.2', 'true');
    wp_enqueue_script('min', get_template_directory_uri()."js/main.js", array(), '1.0.0', 'true');
}

add_action( 'wp_enqueue_scripts', 'csm_css_js_file_callign' );



// theme function
function ali_customizar_register($wp_customize){
    $wp_customize -> add_section('ali_header_area', array(
        'title' =>__('Header Area', 'alihossain'),
        'description' => 'If you interested to update your header area, you can do it here.'
    ));
    $wp_customize -> add_setting('ali_logo',array(
        'default' => get_bloginfo('template_directory'). '/img/theme-logo.png',
    ));
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'ali_logo', array(
        'label' => 'Logo Upload',
        'setting' => 'ali_logo',
        'section' => 'ali_header_area',
    )));
}
add_action('customize_register', 'ali_customizar_register');