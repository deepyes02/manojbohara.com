<?php
get_header();
?>

<?php
if (have_posts()) :
?>
    <div class=" uk-child-width-1-3@s uk-grid-match" uk-grid>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', get_post_format()) ?>
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
    <ul class="uk-pagination">
        <li><span class="uk-margin-small-right" uk-pagination-previous><?php previous_posts_link("Previous");?></span></li>
        <li class="uk-margin-auto-left"><span class="uk-margin-small-left" uk-pagination-next><?php previous_posts_link("Previous");?></span></li>
    </ul>
    <?php
    wp_reset_postdata();
    ?>
    <?php get_sidebar('blog'); ?>
    <?php get_footer(); ?>