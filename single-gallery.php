<?php get_header(); ?>

    <?php
    /* The loop */
    while (have_posts()) :
        the_post();
        ?>
        <section class="uk-container gallery-container">
        <h3><?php wp_title(); ?></h3>
        <div class="body-text">
        <p><?php echo get_the_excerpt();?></p>
        </div>
        <?php
        if (get_post_gallery()) :
            $gallery = get_post_gallery(get_the_ID(), false);
            /* create an array of IDs from  */
            $gids = explode(",", $gallery['ids']);
            /* Loop through all the image and output them one by one */
    ?>
            <div class="uk-grid-match uk-child-width-1-3@s uk-child-width-1-4@m uk-text-center gallery-body" uk-lightbox uk-grid="masonry:true">
                <?php
                foreach ($gids as $id) {
                    /* pull all the available attachment data with the new function */
                    $attachment = wp_prepare_attachment_for_js($id);
                ?>
                        <div class="uk-card uk-card-default uk-card-body">
                            <a class="uk-inline" uk-tooltip="Click to view Gallery" href="<?php echo $attachment['sizes']['large']['url']; ?>" data-caption="<?php echo $attachment['caption']; ?>">
                                <img src="<?php echo $attachment['sizes']['medium']['url']; ?>" alt="<?php echo $attachment['caption']; ?>">
                            </a>
                        </div>
                <?php
                }
                ?>
    <?php
        endif;
    endwhile;
    ?>
    </div>

        </section>
        <section class="navigation uk-container">
            <?php
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
            ?>
            </section>
            <section class="comments-section uk-container">
            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
            </section>
    <?php get_footer(); ?>