<?php get_header('new');?>
<div class="uk-container">
<h2 class="bigShoulders">Gallery</h2>
<p>I am an amid photographer and I cover events. Explore my gallery</p>

<?php

// The Query
$the_query = new WP_Query((array(
    'post_type' => 'gallery'
)));

// The Loop
$num = 0;
if ($the_query->have_posts()) {
    echo '<ul>';
    while ($the_query->have_posts()) {
        $the_query->the_post();
        echo '<li>' . '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
        $num = $num + 1;
    }
    echo '</ul>';
} else {
    echo "no post found";
}
/* Restore original Post Data */
wp_reset_postdata();

?>

<h2 class="bigShoulders">Blogs</h2>


    <?php

    // The Query
    $the_query = new WP_Query((array(
        'post_type' => 'post'
    )));

    // The Loop
    $num = 0;
    if ($the_query->have_posts()) {
        echo '<ul>';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            echo '<li>' . '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
            $num = $num + 1;
        }
        echo '</ul>';
    } else {
        echo "no post found";
    }
    /* Restore original Post Data */
    wp_reset_postdata();

    ?>

</div>

    <?php get_footer(); ?>