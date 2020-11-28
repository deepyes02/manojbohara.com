<?php /*
content display page. Rename this page and design it accordingly for various post types.
*/
?>
<article id="<?php the_ID()?>" class="<?php post_class();?>">
<div class="uk-container">
<a href="<?php echo get_permalink($ID); ?>"><?php the_title('<h2>', '</h2>'); ?></a> by <?php the_author_posts_link(); ?>
<p>Posted on <?php echo get_the_date() ?>
<span uk-icon="icon: tag"></span><span><?php the_category(','); ?></span> | <span uk-icon="icon: "></span><span><?php the_tags(''); ?></span>

<div><?php the_content(); ?></div>
</div>
</article>