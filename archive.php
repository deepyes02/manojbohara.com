<?php
get_header();
?>
<h2>Archive . php page </h2>
<div class="breadcrumb"><?php get_breadcrumb(); ?></div>

<?php
if (have_posts()) :
?>
    <div class=" uk-child-width-1-3@s uk-grid-match" uk-grid>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', 'single') ?>
        <?php
        endwhile; ?>
    <?php
else :
    ?>
        <p>There's nothing to be displayed</p>
    <?php
endif;
    ?>
    </div>
    
    <?php
    wp_reset_postdata();
    ?>
    <?php get_sidebar('blog'); ?>
    <?php get_footer(); ?>