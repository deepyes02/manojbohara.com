<article id="<?php the_ID() ?>" class="<?php post_class(); ?>">
    <li class="uk-post-container">
        <div class="uk-panel">
            <div class="uk-card uk-card-default uk-card-body post-card-body">
                <a href="<?php echo get_permalink($id); ?>">
                    <h2 class="post-card-body-title">
                        <?php
                        $title = get_the_title();
                        echo mb_strimwidth($title, 0, 58, '...');
                        ?>
                    </h2>
                </a>
                <div class="post_card_title_meta">
            <span>on <?php echo get_the_date() ?> by <?php the_author_posts_link(); ?></span></br />
            <span><span uk-icon="icon: tag; ratio: 1"></span> <?php the_category(','); ?></span>
            </div>
            </div>
            <div class="uk-inline">
                <div class="uk-card-badge uk-label post-card-badge">
                    <?php
                    $post_type = get_post_type_object($post->post_type);
                    echo $post_type->labels->singular_name;
                    ?>
                </div>
                <figure class="post-card-image"><a href="<?php echo get_permalink($id); ?>"><?php the_post_thumbnail(array(500, 300)); ?></a></figure>
                <div class="uk-card uk-card-default uk-card-body post-card-body post-card-body-excerpt">
                    <span><?php
                            $content = get_the_excerpt();
                            echo mb_strimwidth($content, 0, 120, '...');
                            ?></span><br/>
                            <a class="homepage-read-more" href="<?php echo get_permalink($id); ?>"><span uk-icon="icon: image; ratio: 1"></span> | Watch Gallery</a>
                </div>
            </div>
        </div>
    </li>
</article>