<?php
//load stylesheet and script

function load_scripts(){
    wp_enqueue_style( 'uikit', get_template_directory_uri() . '/css/uikit-css/uikit.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'handheld', get_template_directory_uri() . '/css/handheld.css', array(), '1.0', 'all');


    wp_enqueue_script('uiKitScript', get_template_directory_uri() . '/js/uikit-js/uikit.min.js', array(), 1.0, true);
    wp_enqueue_script('uiKitIcons', get_template_directory_uri() . '/js/uikit-js/uikit-icons.min.js', array(), 1.0, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), 1.0, true);
}

add_action('wp_enqueue_scripts', 'load_scripts');

// if ( ! isset ( $content_width) ) $content_width = 1920;

if ( ! function_exists( 'deepyes02_theme_support')) :
    function deepyes02_theme_support () {
        load_theme_textdomain('myFirstTheme', get_template_directory() . './languages');

        add_theme_support('automatic-feed-links'); //
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

        add_theme_support('post-formats', array ('gallery', 'quote', 'image', 'video', 'audio'));
    }
endif;
add_action('after_setup_theme', 'deepyes02_theme_support');

add_action('widgets_init', 'sidebars');
function sidebars () {
    register_sidebar (array(
        'name' => "Home Page Sidebar",
        'id' => 'sidebar-1',
        'description' => 'homepage sidebar for wordpress',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));

    register_sidebar (array(
        'name' => "Blog Page Sidebar",
        'id' => 'sidebar-2',
        'description' => 'blogpage sidebar for wordpress',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}

/*
+++++++++
Custom post type
+++++++++++
*/
function awesome_custom_post_type () {
    $labels = array (
        'name' => 'Portfolio',
        'singular_name' => 'Portfolio',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'search_item' => 'Search Portfolio',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array (
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'heirarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array ('category', 'post_tag'),
        'menu_position' => 5,
        'exclude_from-search' => false
    );
    register_post_type('portfolio', $args);
}

add_action('init', 'awesome_custom_post_type');

