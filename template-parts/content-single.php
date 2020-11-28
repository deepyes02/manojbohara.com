<article id="<?php the_ID()?>" class="<?php post_class();?>">
    <div>
    <div class="uk-card uk-card-default uk-card-body post-card-body">
                    <a href="<?php echo get_permalink($ID); ?>">
                    <h2 class="post-card-body-title">
                        <?php
                        $title = get_the_title();
                        echo mb_strimwidth($title, 0, 58, '...');
                        ?>
                </h2></a>
                    <span>Posted on <?php echo get_the_date() ?> by <?php the_author_posts_link(); ?></span>
                </div>
                <div class="uk-inline">
                    <div class="uk-card uk-card-badge uk-label post-card-badge"><?php
    $post_type = get_post_type_object($post->post_type);
    echo $post_type->labels->singular_name;
    ?></div>
                    <picture><a href="<?php echo get_permalink($ID); ?>"><?php the_post_thumbnail(array(500, 300)); ?></a></picture>
                    <div class="uk-card uk-card-default uk-card-body post-card-body post-card-body-excerpt">
                        <span><?php 
            $content = get_the_excerpt();
            echo mb_strimwidth($content, 0, 127, '...');
        ?><a href="<?php echo get_permalink($ID); ?>">Read More</a></span>
                            <div class="uk-card-badge uk-label post-card-badge"><span uk-icon="icon: tag"></span><span><?php the_category(','); ?></span> | <span uk-icon="icon: "></span><span><?php the_tags(''); ?></span></div>
                    </div>
                </div>
    </div>
    </article>