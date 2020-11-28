<?php
get_header(); ?>
<section><ul class="breadcrumb"><?php get_breadcrumb();?></ul></section>
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
            get_template_part('template-parts/content', get_post_format());
            ?>
            <span uk-icon="icon: tag"></span><?php the_category ( ' ' );?>
            <span uk-icon="icon: bookmark"></span><?php the_tags ( '' );?>
            <section class="comments-section">
            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
            </section class="navigation">
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
            <?php
        // End the loop.
        endwhile;
        wp_reset_postdata();
        ?>
    <?php get_sidebar('home')?>

<?php get_footer(); ?>