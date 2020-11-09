<article <?php post_class(array('class'=>'videoContent'));?>>
    <div class="uk-card uk-card-hover uk-card-secondary uk-card-body">
        <?php echo get_post_format()?>
        <div class="uk-card-title"><a href="<?php echo get_permalink($ID); ?>"><?php the_title('<h2>', '</h2>'); ?></a></div>
        <picture class="videoThumbnail"><a href="<?php echo get_permalink($ID); ?>"><?php the_post_thumbnail(array(100, 100)); ?></a>
            <span class="youtubeicon" uk-icon="icon: youtube; ratio: 2"></span>
        </picture>

        <p>Posted in <?php echo get_the_date() ?> by <?php the_author_posts_link(); ?></p>
        <p><?php wp_trim_excerpt(10); ?></p>

        <p><span uk-icon="icon: tag"></span><?php the_category(','); ?> </p>
        <p><span uk-icon="icon: bookmark"></span><?php the_tags(''); ?> </p>
    </div>
</article>