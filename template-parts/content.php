<article>
    <div class="uk-card uk-card-hover uk-card-secondary uk-card-body">
        <div class="uk-card-title"><a href="<?php echo get_permalink($ID); ?>"><?php the_title('<h2>', '</h2>'); ?></a></div>
        <picture><?php the_post_thumbnail(array(100, 100)); ?></picture>
        <p><?php the_content(); ?></p>
        <p>Posted in <?php echo get_the_date() ?> by <?php the_author_posts_link(); ?></p>
        <p><span uk-icon="icon: tag"></span><?php the_category(','); ?> </p>
        <p><span uk-icon="icon: bookmark"></span><?php the_tags(','); ?> </p>
    </div>

</article>