<?php
get_header();
?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width ?>" alt="" "/>

<p>Apparently this is our homepage that needs to be edited </p>

<?php
 
// The Query
$the_query = new WP_Query( (array(
    'category_name' => 'blog'
    )) 
);
 
// The Loop
$num = 0;
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts()) {
        $the_query->the_post();
        echo '<li>'.'<a href="'.get_the_permalink().'">'. get_the_title() . '</a></li>';
        $num = $num + 1;
    }
    echo '</ul>';
} else {
    echo "no post found";
}
/* Restore original Post Data */
wp_reset_postdata();

?>


<aside class="sidebar"><?php get_sidebar('home');?></aside>

<?php get_footer(); ?>