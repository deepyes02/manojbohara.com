<?php get_header('new'); ?>

<section class="uk-section section-gallery">
    <div class="uk-container-expand section-container">
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
        ?>
        <div class=" uk-child-width-1-3@s uk-grid-match" uk-grid>
            <?php
            // The Loop
            $num = 0;
            if ($the_query->have_posts()) {
                
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('template-parts/content', get_post_format());
                    $num = $num + 1;
                }
            } else {
                echo "no post found";
            } ?> </div>
            <?php
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
        </div>
</section>

<section class="uk-section section-blogs">
    <div class="uk-container-expand section-container">
        <div class="title_and_description">
            <div class="section_title">
                <h2 class="bigShoulders">Blogs</h2>
            </div>
            <div class="section_description">
                <p class="arvo">I regularly write blogs about matters that concern to me. You can read them here.</p>
            </div>
        </div>

        <?php
        // The Query
        $the_query = new WP_Query((array(
            'post_type' => 'post'
        )));
        ?>
        <div class=" uk-child-width-1-3@s uk-grid-match" uk-grid>
            <?php
            // The Loop
            $num = 0;
            if ($the_query->have_posts()) {
                
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('template-parts/content', get_post_format());
                    $num = $num + 1;
                }
            } else {
                echo "no post found";
            } ?> </div>
            <?php
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
        </div>
</section>

<section class="uk-section section-podcasts">
    <div class="uk-container-expand section-container">
        <div class="title_and_description">
            <div class="section_title">
                <h2 class="bigShoulders">Podcasts</h2>
            </div>
            <div class="section_description">
                <p class="arvo">Listen to my monologues, poems and talks with influencial and renowned personalities.</p>
            </div>
        </div>

        <?php
        // The Query
        $the_query = new WP_Query((array(
            'post_type' => 'podcast'
        )));
        ?>
        <div class=" uk-child-width-1-3@s uk-grid-match" uk-grid>
            <?php
            // The Loop
            $num = 0;
            if ($the_query->have_posts()) {
                
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('template-parts/content', get_post_format());
                    $num = $num + 1;
                }
            } else {
                echo "no post found";
            } ?> </div>
            <?php
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
        </div>
</section>

<section class="uk-section section-videos">
    <div class="uk-container-expand section-container">
        <div class="title_and_description">
            <div class="section_title">
                <h2 class="bigShoulders">Videos</h2>
            </div>
            <div class="section_description">
                <p class="arvo">Checkout my videos on travel, events and social issues</p>
            </div>
        </div>

        <?php
        // The Query
        $the_query = new WP_Query((array(
            'post_type' => 'video'
        )));
        ?>
        <div class=" uk-child-width-1-3@s uk-grid-match" uk-grid>
            <?php
            // The Loop
            $num = 0;
            if ($the_query->have_posts()) {
                
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('template-parts/content', get_post_format());
                    $num = $num + 1;
                }
            } else {
                echo "no post found";
            } ?> </div>
            <?php
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
        </div>
</section>


    <?php get_footer(); ?>