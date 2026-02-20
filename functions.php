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


// Google fonts enqueue
function ali_add_google_fonts(){
    wp_enqueue_style('ali_google_fonts', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&display=swap', false);

}
add_action('wp_enqueue_scripts', 'ali_add_google_fonts');


// theme function
function ali_customizar_register($wp_customize){
    // header area function
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

    // menu position option
    // $wp_customize -> add_section('ali_menu_option', array(
    //     'title' => _('Menu Position Option', 'alihossain'),
    //     'description' => 'If you interested to change your menu position you can do it.'

    // ));
    // $wp_customize -> add_settings('ali_menu_position', array(
    //     'default' => 'right_menu',
    // ));
    // $wp_customize -> add_control('ali_menu_position', array(
    //     'label' => 'Menu Position',
    //     'description' => "Select your menu position",
    //     'setting' => 'ali_menu_position',
    //     'section' => 'ali_menu_option',
    //     'type' => 'radio',
    //     'choices' => array(
    //         'left_menu' => 'Left Menu',
    //         'center_menu' => 'Center Menu',
    //         'right_menu' => 'Right Menu',
    //     ) ,
    // ));
}
add_action('customize_register', 'ali_customizar_register');

// Menu Register
register_nav_menu('primary_menu', __('Main Menu', 'alihossain'));