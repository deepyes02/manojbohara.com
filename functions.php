<?php
//load stylesheet and script
function load_scripts(){
    wp_enqueue_style( 'uikit', get_template_directory_uri() . '/css/uiKit/uikit.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'fontStyling', get_template_directory_uri() . '/css/font.css', array(), '1.0', 'all');
    wp_enqueue_style( 'homepage', get_template_directory_uri() . '/css/homepage.css', array(), '1.0', 'all');
    wp_enqueue_script('uiKitScript', get_template_directory_uri() . '/js/uiKit/uikit.min.js', array(), 1.0, true);
    wp_enqueue_script('uiKitIcons', get_template_directory_uri() . '/js/uiKit/uikit-icons.min.js', array(), 1.0, true);
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
//make custom post types appear in category and tag archive
function namespace_add_custom_types( $query ) {
    if( (is_category() || is_tag() || is_author()) && $query->is_archive() && empty( $query->query_vars['suppress_filters'] ) ) {
      $query->set( 'post_type', array(
       'post', 'podcast', 'video', 'gallery'
          ));
      }
  }
  add_action( 'pre_get_posts', 'namespace_add_custom_types' );

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



#send email when new post is publshed this isn't working
class emailer {
    function send($post_ID){
        $send_to = 'deepeshisir@gmail.com';
        mail($send_to, "new post pulished", "Hey, I just published a new blog, check it out: http://localhost:90/wordpress/blog");
        return $post_ID;
    }
}
$myEmailClass = new emailer();
add_action('publish_post', array($myEmailClass, 'send'));


#add a setting menu
/**
 * @internal never define functions inside callbacks.
 * these functions could be run multiple times; this would result in a fatal error.
 */
 
/**
 * ==========================
 * CUSTOM SETTING FOR ADMIN PANEL
 * ++++++++++++++++++++++++++++++
 * =============================
 */
function wporg_settings_init() {
    // Register a new setting for "wp_moj_home" page.
    register_setting( 'wp_moj_home', 'wp_moj_options' );
 
    // Register a new section in the "wp_moj_home" page.
    add_settings_section(
        'wp_moj_developers',
        __( 'Change contents for your homepage using this section', 'wp_moj_home' ), 'wp_moj_developers_callback',
        'wp_moj_home'
    );
 
    // Register a new field in the "wp_moj_developers" section, inside the "wp_moj_home" page.
    add_settings_field(
        'wporg_field_pill', // As of WP 4.6 this value is used only internally.
                                // Use $args' label_for to populate the id inside the callback.
            __( 'Gallery', 'wp_moj_home' ),
        'wporg_field_pill_cb',
        'wp_moj_home',
        'wp_moj_developers',
        array(
            'label_for'         => 'wporg_field_pill',
            'class'             => 'wporg_row',
            'wporg_custom_data' => 'custom',
        )
    );
}
 
/**
 * Register our wporg_settings_init to the admin_init action hook.
 */
add_action( 'admin_init', 'wporg_settings_init' );
 
 
/**
 * Custom option and settings:
 *  - callback functions
 */  
/**
 * Developers section callback function.
 *
 * @param array $args  The settings array, defining title, id, callback.
 */
function wp_moj_developers_callback( $args ) {
    ?>
    <h2 style="background-color:white; padding:1rem;" id="<?php echo esc_attr( $args['id'] ); ?>"><?php esc_html_e( 'Content for your Gallery Section', 'wp_moj_home' ); ?></h2>
    <?php
}
 
/**
 * Pill field callbakc function.
 *
 * WordPress has magic interaction with the following keys: label_for, class.
 * - the "label_for" key value is used for the "for" attribute of the <label>.
 * - the "class" key value is used for the "class" attribute of the <tr> containing the field.
 * Note: you can add custom key value pairs to be used inside your callbacks.
 *
 * @param array $args
 */
function wporg_field_pill_cb( $args ) {
    // Get the value of the setting we've registered with register_setting()
    $options = get_option( 'wp_moj_options' );
    ?>
    <select
            id="<?php echo esc_attr( $args['label_for'] ); ?>"
            data-custom="<?php echo esc_attr( $args['wporg_custom_data'] ); ?>"
            name="wp_moj_options[<?php echo esc_attr( $args['label_for'] ); ?>]">
        <option value="red" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'red', false ) ) : ( '' ); ?>>
            <?php esc_html_e( 'red pill', 'wp_moj_home' ); ?>
        </option>
        <option value="blue" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'blue', false ) ) : ( '' ); ?>>
            <?php esc_html_e( 'blue pill', 'wp_moj_home' ); ?>
        </option>
    </select>
    <p class="description">
        <?php esc_html_e( 'You take the blue pill and the story ends. You wake in your bed and you believe whatever you want to believe.', 'wp_moj_home' ); ?>
    </p>
    <p class="description">
        <?php esc_html_e( 'You take the red pill and you stay in Wonderland and I show you how deep the rabbit-hole goes.', 'wp_moj_home' ); ?>
    </p>
    <?php
}
 
/**
 * Add the top level menu page.
 */
function wporg_options_page() {
    add_menu_page(
        'Homepage',
        'Homepage Options',
        'manage_options',
        'wp_moj_home',
        'wporg_options_page_html'
    );
}
 
 
/**
 * Register our wporg_options_page to the admin_menu action hook.
 */
add_action( 'admin_menu', 'wporg_options_page' );
 
 
/**
 * Top level menu callback function
 */
function wporg_options_page_html() {
    // check user capabilities
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
 
    // add error/update messages
 
    // check if the user have submitted the settings
    // WordPress will add the "settings-updated" $_GET parameter to the url
    if ( isset( $_GET['settings-updated'] ) ) {
        // add settings saved message with the class of "updated"
        add_settings_error( 'wporg_messages', 'wporg_message', __( 'Great, your data is now updated!', 'wp_moj_home' ), 'updated' );
    }
 
    // show error/update messages
    settings_errors( 'wporg_messages' );
    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="options.php" method="post">
            <?php
            // output security fields for the registered setting "wp_moj_home"
            settings_fields( 'wp_moj_home' );
            // output setting sections and their fields
            // (sections are registered for "wp_moj_home", each field is registered to a specific section)
            do_settings_sections( 'wp_moj_home' );
            // output save settings button
            submit_button( 'Save and Update' );
            ?>
        </form>
    </div>
    <?php
}