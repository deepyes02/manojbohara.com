<?php get_header(); ?>

<?php
/* The loop */
while (have_posts()) :
    the_post();
    if (get_post_gallery()) :
        $gallery = get_post_gallery(get_the_ID(), false);
        /* create an array of IDs from  */
        $gids = explode(",", $gallery['ids']);
        /* Loop through all the image and output them one by one */
?>
        <!--uikit slider -->
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay:false; autoplay-interval: 1100">
            <ul class="uk-slider-items uk-child-width-1-3 uk-child-width-1-3@s uk-child-width-1-3@m uk-grid-match slider-height-single" uk-height-viewport="min-height:50; offset-top:true; offset-bottom:true;">
                <?php
                foreach ($gids as $id) {
                    /* pull all the available attachment data with the new function */
                    $attachment = wp_prepare_attachment_for_js($id);
                    /* Uncomment the next line to see all the available data in $attachment */
                    //var_dump($attachment); 
                    /* pick and choose which bits are needed */
                    $num = $num + 1;
                ?>
                    <li>
                        <img src="<?php echo $attachment['sizes']['medium']['url']; ?>" class="my-custom-class" alt="<?php echo $attachment['caption']; ?>" />
                        <div class="uk-position-center uk-panel"><span><?php echo $attachment['caption']; ?></span></div>
                    </li>
            <?php
                }
            endif;
            ?> <?php
endwhile;
    wp_reset_postdata();
    ?>
            </ul>
        </div>  
        <!--lightbox-->
        <div class="uk-child-width-1-4@s gallery-container section-gallery-single" uk-grid uk-lightbox="animation: slide">
            <?php
            foreach ($gids as $id) {
                /* pull all the available attachment data with the new function */
                $attachment = wp_prepare_attachment_for_js($id);
                /* Uncomment the next line to see all the available data in $attachment */
                //var_dump($attachment); 
                /* pick and choose which bits are needed */
                $num = $num + 1;
            ?>
                <div>
                    <a class="uk-inline" href="<?php echo $attachment['sizes']['large']['url']; ?>" data-caption="<?php echo $attachment['caption']; ?>">
                        <img src="<?php echo $attachment['sizes']['medium']['url']; ?>" class="my-custom-class" alt="<?php echo $attachment['caption']; ?>" />
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
        <h2>Total Pictures: <?php echo $num ?></h2>

        <?php get_footer(); ?>