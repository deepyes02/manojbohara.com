<?php get_header('new'); ?>

<section class="uk-section uk-section-secondary section">
    <div class="uk-container section-container">
        <div class="title_and_description">
        <div class="section_title">
            <h2 class="bigShoulders">Gallery</h2>
        </div>
        <div class="section_description">
            <p class="arvo">I am an amid photographer. The gallery contains series of photographs from events, festivals and travel.</p>
        </div>
</div>

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
    </div>
</section>

<h2>Blogs</h2>


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

<?php get_footer(); ?>