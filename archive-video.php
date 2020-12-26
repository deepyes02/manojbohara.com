<?php
get_header();
?>
<section class="uk-section section-blogs">
<?php
if (have_posts()) :
?>
<div class="uk-container">
<div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center" uk-grid>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', 'video')?>
        <?php
        endwhile; 
        ?>
        </div>
</div>
        <div class="pagination_links">
    <?php
    echo paginate_links();
    ?> </div><?php
else :
    ?>
        <p>There's nothing to be displayed</p>
    <?php
endif;
wp_reset_postdata();
?>
</section>
<?php
get_footer(); 
?>