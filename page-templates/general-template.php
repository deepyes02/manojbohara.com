<?php /* Template Name: General Template */ ?>
<?php
get_header(); ?>
<div id="primary" class="container">
    <main id="main" class="site-main" role="main">
        <?php
        // Start the loop.
        while (have_posts()) : the_post();
        ?>
            <a href="<?php echo get_permalink($ID); ?>"><?php the_title('<h2>', '</h2>'); ?></a>

        <?php
            the_content();
        endwhile;
        ?>
    </main>
</div>

<?php
wp_reset_postdata();
?>

<?php get_footer(); ?>