<?php
get_header(); ?>
<section><ul class="breadcrumb"><?php get_breadcrumb();?></ul></section>
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
            get_template_part('template-parts/content', get_post_format());
            
            endwhile;
            ?>
            <div class="category-blog-end">
            <span><span uk-icon="icon: tag; ratio: 1"></span> <?php the_category(','); ?></span>
            </div>
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
            
<?php
        wp_reset_postdata();

        get_footer(); 
?>