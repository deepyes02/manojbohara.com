<?php
get_header();
?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width ?>" alt="" "/>

<?php
if (have_posts()) :
?> 
    <div class=" uk-child-width-1-3@s uk-grid-match" uk-grid>
<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-parts/content', get_post_format()) ?>
<?php
    endwhile; ?>
</div>
<?php
else :
    _e('Sorry, no pages matched your criteria.', 'textdomain');
endif;

wp_reset_postdata();
?>

<?php get_sidebar('blog');?>

<?php get_footer(); ?>