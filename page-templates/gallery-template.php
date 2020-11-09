<?php /* Template Name: Gallery Template */ ?>
<?php
get_header(); ?>
<p>Gallery template</p>
<?php

$postsbycategory = new Wp_Query( 'post_type=post&posts_per_page=3&cat=23');

if ($postsbycategory-> have_posts()): 
    ?>
    <div class=" uk-child-width-1-3@s uk-grid-match" uk-grid>
    <?php
    while ($postsbycategory-> have_posts()): $postsbycategory->the_post();
    ?>
    <div>
        <?php get_template_part('template-parts/content', 'gallery')?>
    </div>
    <?php
endwhile; ?>
</div>
<?php
endif;

wp_reset_postdata();
?>
<?php get_footer(); ?>