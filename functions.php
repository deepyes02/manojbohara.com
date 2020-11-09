<?php
//load stylesheet and script

function load_scripts(){
    wp_enqueue_style( 'uikit', get_template_directory_uri() . '/css/uikit-css/uikit.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');

    wp_enqueue_script('uiKitScript', get_template_directory_uri() . '/js/uikit-js/uikit.min.js', array(), 1.0, true);
    wp_enqueue_script('uiKitIcons', get_template_directory_uri() . '/js/uikit-js/uikit-icons.min.js', array(), 1.0, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), 1.0, true);
}

add_action('wp_enqueue_scripts', 'load_scripts');

if ( ! isset ( $content_width) ) $content_width = 1920;

if ( ! function_exists( 'deepyes02_theme_support')) :
    function deepyes02_theme_support () {
        load_theme_textdomain('myFirstTheme', get_template_directory() . './languages');

        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        
        $args = array (
            'height' => 225,
            'width' => 1920
        );

        add_theme_support( 'custom-header', $args);

        //title tag
        add_theme_support( 'title-tag' );


        register_nav_menus( array (
            'primary' => __('Primary Menu', 'myFirstTheme'),
            'secondary'=> __('Secondary Menu', 'myFirstTheme')
        ));

        add_theme_support('post-formats', array ('aside', 'gallery', 'quote', 'image', 'video'));
    }
endif;
add_action('after_setup_theme', 'deepyes02_theme_support');

