<?php get_header('new'); ?>

<section class="uk-section section-gallery">
    <div class="uk-container section-container">
        <div class="title_and_description">
            <div class="section_title">
                <a href="<?php
                $post_type = 'gallery';
                echo get_post_type_archive_link($post_type);
                ?>"><h2 class="bigShoulders">Gallery
                </h2></a>
            </div>
            <div class="section_description">
                <p class="arvo">I am an amid photographer. The gallery contains series of photographs from events, festivals and travel.</p>
            </div>
        </div>

        <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center" uk-grid="parallax:100" uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 100; repeat: false">

        <?php
        // The Query
        $the_query = new WP_Query((array(
            'post_type' => 'gallery',
            'posts_per_page' => 4
        )));
        ?>
            <?php
            // The Loop
            
            if ($the_query->have_posts()) {

                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('template-parts/content', 'gallery');
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
    <div class="uk-container section-container">
        <div class="title_and_description">
        <div class="section_title">
                <a href="<?php
                $post_type = 'post';
                echo get_post_type_archive_link($post_type);
                ?>"><h2 class="bigShoulders">Blogs
                </h2></a>
            </div>
            <div class="section_description">
                <p class="arvo">Read my mind.</p>
            </div>
        </div>

        <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center" uk-grid="parallax:100" uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 100; repeat: false">
            <?php
            // The Query
            $ourCurrentPage = get_query_var('paged');
            $the_query = new WP_Query((array(
            'post_type' => 'post',
            'posts_per_page' => 4
        )));
            // The Loop
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('template-parts/content', 'single');
                    
                }
            } ?> </div>
        <?php
        wp_reset_postdata();
        ?>
    </div>
</section>

<section class="uk-section section-podcasts">
    <div class="uk-container section-container">
        <div class="title_and_description">
        <div class="section_title">
                <a href="<?php
                $post_type = 'podcast';
                echo get_post_type_archive_link($post_type);
                ?>"><h2 class="bigShoulders">Podcasts
                </h2></a>
            </div>
            <div class="section_description">
                <p class="arvo">Listen to my monologues, poems and talks with influencial and renowned personalities.</p>
            </div>
        </div>
        <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center" uk-grid="parallax:100" uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 100; repeat: false">

        <?php
        // The Query
        $the_query = new WP_Query((array(
            'post_type' => 'podcast',
            'posts_per_page' => 4

        )));
        ?>
            <?php
            // The Loop
            $num = 0;
            if ($the_query->have_posts()) {

                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('template-parts/content', 'podcast');
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
    <div class="uk-container section-container">
        <div class="title_and_description">
        <div class="section_title">
                <a href="<?php
                $post_type = 'video';
                echo get_post_type_archive_link($post_type);
                ?>"><h2 class="bigShoulders">Videos
                </h2></a>
            </div>
            <div class="section_description">
                <p class="arvo">Checkout my videos on travel, events and social issues</p>
            </div>
        </div>

        <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center" uk-grid="parallax:100" uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 100; repeat: false">
        <?php
        // The Query
        $the_query = new WP_Query((array(
            'post_type' => 'video',
            'posts_per_page' => 4

        )));
        ?>
            <?php
            // The Loop
            if ($the_query->have_posts()) {

                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('template-parts/content', 'video');
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