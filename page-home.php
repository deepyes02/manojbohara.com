<?php get_header('new'); ?>

<section class="uk-section section-gallery">
    <div class="title_and_description">
        <div class="section_title">
            <a href="<?php
                        $post_type = 'gallery';
                        echo get_post_type_archive_link($post_type);
                        ?>">
                <h2 class="bigShoulders">Gallery
                </h2>
            </a>
        </div>
        <div class="section_description">
            <p class="arvo">I am an amid photographer. The gallery contains series of photographs from events, festivals and travel.</p>
        </div>
    </div>
    <div class=" uk-container uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay:false; autoplay-interval:2000; finite:true;">
        <ul class="uk-slider-items uk-child-width-1-3@s uk-child-width-1-3@m uk-grid">

            <?php
            // The Query
            $the_query = new WP_Query((array(
                'post_type' => 'gallery',
                'posts_per_page' => 6

            )));

            if ($the_query->have_posts()) {

                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('template-parts/content', 'gallery');
                }
            ?>
            <li>
                <div class="uk-panel">
                        <div class="uk-card uk-card-default uk-card-body post-card-body post-card-body-title">
                        <a href="<?php
                        $post_type = 'gallery';
                        echo get_post_type_archive_link($post_type);
                        ?>">
                <h2 class="bigShoulders">Explore Gallery
                </h2>
            </a>
                            <span> View the <a href="<?php
                        $post_type = 'gallery';
                        echo get_post_type_archive_link($post_type);
                        ?>">gallery archive</a>, or browse content by category</span><br/>
                        <ul><?php wp_list_categories();?></ul>
                        </div>
                </div>
            </li>
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-dark"></ul>

    <?php
            } else {
                echo "no post found";
            } ?>
    </div>
    <?php
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>
</section>

<section class="uk-section section-blogs">
        <div class="title_and_description">
            <div class="section_title">
                <a href="<?php
                            $post_type = 'post';
                            echo get_post_type_archive_link($post_type);
                            ?>">
                    <h2 class="bigShoulders">Blogs
                    </h2>
                </a>
            </div>
            <div class="section_description">
                <p class="arvo">Check out the blog section where I talk about my travel, life and relevant life experiences.</p>
            </div>
        </div>
        <div class=" uk-container uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay:false; autoplay-interval:2000; finite:true;">
        <ul class="uk-slider-items uk-child-width-1-3@s uk-child-width-1-3@m uk-grid">
            <?php
            // The Query
            $the_query = new WP_Query((array(
                'post_type' => 'post',
                'posts_per_page' => 6
            )));
            // The Loop
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('template-parts/content', 'single');
                }
                ?>
                 <li>
                <div class="uk-panel">
                        <div class="uk-card uk-card-default uk-card-body post-card-body post-card-body-title">
                        <a href="<?php
                        $post_type = 'post';
                        echo get_post_type_archive_link($post_type);
                        ?>">
                <h2 class="bigShoulders">Explore Blogs
                </h2>
            </a>
                            <span>View <a href="<?php
                        $post_type = 'post';
                        echo get_post_type_archive_link($post_type);
                        ?>">all blogs</a>, or browse content by category</span><br/>
                        <ul><?php wp_list_categories();?></ul>
                        </div>
                </div>
            </li>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-dark"></ul>
                <?php
            } else {
                echo "no post found";
            } ?>
            </div>
        <?php
        wp_reset_postdata();
        ?>
</section>

<section class="uk-section section-podcasts">
        <div class="title_and_description">
            <div class="section_title">
                <a href="<?php
                            $post_type = 'podcast';
                            echo get_post_type_archive_link($post_type);
                            ?>">
                    <h2 class="bigShoulders">Podcasts
                    </h2>
                </a>
            </div>
            <div class="section_description">
                <p class="arvo">Listen to my monologues, poems and talks with influencial and renowned personalities.</p>
            </div>
        </div>
        <div class=" uk-container uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay:false; autoplay-interval:2000; finite:true;">
        <ul class="uk-slider-items uk-child-width-1-3@s uk-child-width-1-3@m uk-grid">
            <?php
            // The Query
            $the_query = new WP_Query((array(
                'post_type' => 'podcast',
                'posts_per_page' => 6

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
                ?>
                <li>
                <div class="uk-panel">
                        <div class="uk-card uk-card-default uk-card-body post-card-body post-card-body-title">
                        <a href="<?php
                        $post_type = 'podcast';
                        echo get_post_type_archive_link($post_type);
                        ?>">
                <h2 class="bigShoulders">Explore Podcasts
                </h2>
            </a>
                            <span>List <a href="<?php
                        $post_type = 'podcast';
                        echo get_post_type_archive_link($post_type);
                        ?>">all podcasts</a>, or browse content by category</span><br/>
                        <ul><?php wp_list_categories();?></ul>
                        </div>
                </div>
            </li>
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-dark"></ul>
                <?php
            } else {
                echo "no post found";
            } ?> </div>
        <?php
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
</section>

<section class="uk-section section-videos">
        <div class="title_and_description">
            <div class="section_title">
                <a href="<?php
                            $post_type = 'video';
                            echo get_post_type_archive_link($post_type);
                            ?>">
                    <h2 class="bigShoulders">Videos
                    </h2>
                </a>
            </div>
            <div class="section_description">
                <p class="arvo">Checkout my videos on travel, events and social issues</p>
            </div>
        </div>

        <div class=" uk-container uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay:false; autoplay-interval:2000; finite:true;">
        <ul class="uk-slider-items uk-child-width-1-3@s uk-child-width-1-3@m uk-grid">
            <?php
            // The Query
            $the_query = new WP_Query((array(
                'post_type' => 'video',
                'posts_per_page' => 6

            )));
            ?>
            <?php
            // The Loop
            if ($the_query->have_posts()) {

                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    get_template_part('template-parts/content', 'video');
                }
                ?>
               <li>
                <div class="uk-panel">
                        <div class="uk-card uk-card-default uk-card-body post-card-body post-card-body-title">
                        <a href="<?php
                        $post_type = 'video';
                        echo get_post_type_archive_link($post_type);
                        ?>">
                <h2 class="bigShoulders">Explore Videos
                </h2>
            </a>
                            <span>List <a href="<?php
                        $post_type = 'video';
                        echo get_post_type_archive_link($post_type);
                        ?>">all Videos</a>, or browse content by category</span><br/>
                        <ul><?php wp_list_categories();?></ul>
                        </div>
                </div>
            </li>
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-dark"></ul>

    <?php
            } else {
                echo "no post found";
            } ?> </div>
        <?php
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
</section>


<?php get_footer(); ?>