<?php
get_header(); ?>

  
    <div id="primary" class="container">
        <main id="main" class="site-main" role="main">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
            get_template_part('template-parts/portfolio');
            ?>
            <span uk-icon="icon: tag"></span><?php the_category ( ' ' );?>
            <span uk-icon="icon: bookmark"></span><?php the_tags ( '' );?>
            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
  
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
        // End the loop.
        endwhile;
        ?>
        </main><!-- .site-main -->
    </div><!-- .content-area -->
    <?php get_sidebar()?>
<php?
wp_reset_postdata(); 
?>
<?php get_footer(); ?>