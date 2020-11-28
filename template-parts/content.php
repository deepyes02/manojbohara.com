<article id="<?php the_ID()?>" class="<?php post_class();?>">
    <div class="uk-card uk-card-hover uk-card-secondary uk-card-body">
    <span>
    <?php
    $post_type = get_post_type_object($post->post_type);
    echo $post_type->labels->singular_name;
    ?>
    </span><br/>
    <span uk-icon="icon: tag"></span><span><?php the_category(','); ?></span> | <span uk-icon="icon: "></span><span><?php the_tags(''); ?></span>
        <div class="uk-card-title"><a href="<?php echo get_permalink($ID); ?>"><?php the_title('<h2>', '</h2>'); ?></a></div>
        <picture><a href="<?php echo get_permalink($ID); ?>"><?php the_post_thumbnail(array(100, 100)); ?></a></picture>
        <p>
        <?php 
            $content = get_the_excerpt();
            echo mb_strimwidth($content, 0, 127, '...');
        ?>
        </p>
        <p>Posted in <?php echo get_the_date() ?> by <?php the_author_posts_link(); ?></p>
    </div>
</article>