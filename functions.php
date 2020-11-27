<?php
//load stylesheet and script

function load_scripts(){
    wp_enqueue_style( 'uikit', get_template_directory_uri() . '/css/uikit-css/uikit.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'homepage', get_template_directory_uri() . '/css/homepage.css', array(), '1.0', 'all');
    wp_enqueue_style( 'fontStyling', get_template_directory_uri() . '/css/font.css', array(), '1.0', 'all');
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
        
        //custom header
        $args = array (
            'height' => 450,
            'width' => 1920
        );
        add_theme_support( 'custom-header', $args);

        //title tag
        add_theme_support( 'title-tag' );

        //cutom-logo
        add_theme_support('custom-logo', array(
            'height' => 480, 'width'=> 720
        ));


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
        'name' => "Search",
        'id' => 'sidebar-3',
        'description' => 'Search sidebar for wordpress',
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
Custom post type Gallery
+++++++++++
*/
function custom_post_type_gallery () {
    $labels = array (
        'name' => 'Gallery',
        'singular_name' => 'Gallery',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'search_item' => 'Search Gallery',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => ''
    );
    $args = array (
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
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
            'revisions'
        ),
        'taxonomies' => array ('category'),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('gallery', $args);
}

add_action('init', 'custom_post_type_gallery');
/*
+++++++++
Custom post type Podcast
+++++++++++
*/
function custom_post_type_podcast () {
    $labels = array (
        'name' => 'Podcasts',
        'singular_name' => 'Podcast',
        'add_new' => "Add Item",
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'search_item' => 'Search Podcasts',
        'not_found' => 'No Items Found',
        'not_found_in_trash' => 'No Item Found in Trash',
        'paren_item_colon' => ''
    );

    $args = array (
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'heirarchical' => false,
        'supports' => array (
            'title', 'editor', 'excerpt', 'thumbnail', 'revisions'
        ),
        'taxonomies' => array('category'),
        'menu_position' => 6,
        'exclude_from_search' => false
    );
    register_post_type('podcast', $args);
}
add_action('init', 'custom_post_type_podcast');

/*
+++++++++
Custom post type Video
+++++++++++
*/
function custom_post_type_video () {
    $labels = array (
        'name' => 'Videos',
        'singular_name' => 'Video',
        'add_new' => "Add Item",
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'search_item' => 'Search Videos',
        'not_found' => 'No Items Found',
        'not_found_in_trash' => 'No Item Found in Trash',
        'paren_item_colon' => ''
    );

    $args = array (
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'heirarchical' => false,
        'supports' => array (
            'title', 'editor', 'excerpt', 'thumbnail', 'revisions'
        ),
        'taxonomies' => array('category'),
        'menu_position' => 6,
        'exclude_from_search' => false
    );
    register_post_type('video', $args);
}
add_action('init', 'custom_post_type_video');


/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}


// get gallery images caption
function wp_get_attachment( $attachment_id ) {

    $attachment = get_post( $attachment_id );
    return array(
        'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink( $attachment->ID ),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}