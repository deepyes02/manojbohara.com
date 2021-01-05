<?php /*
content display page. Rename this page and design it accordingly for various post types.
*/
?>
<article class="main-article" id="<?php the_ID()?>" class="<?php post_class();?>">
<div class="uk-container">
<a href="<?php echo get_permalink($id); ?>"><?php the_title('<h2>', '</h2>'); ?></a> by <?php the_author_posts_link(); ?>
<p>Posted on <?php echo get_the_date() ?>
<span><span uk-icon="icon: tag; ratio: 1"></span> <?php the_category(','); ?></span>

<div class="blog-post-section"><?php the_content(); ?></div>
</div>
</article>