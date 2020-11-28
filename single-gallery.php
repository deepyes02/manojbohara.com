<?php get_header(); ?>
<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
<?php
/* The loop 
while (have_posts()) :
    the_post();
    if (get_post_gallery()) :
        $gallery = get_post_gallery(get_the_ID(), false);
        $gids = explode(",", $gallery['ids']);
?>
        <!--tiny slider -->
        <div class="slider-container">
            <div class="my-slider">
                <?php
                foreach ($gids as $id) {
                    
                    $attachment = wp_prepare_attachment_for_js($id);
                ?>
                    <div class="slide-item">
                        <img src="<?php echo $attachment['sizes']['large']['url']; ?>" class="my-custom-class" alt="<?php echo $attachment['caption']; ?>" />
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
<?php
    endif;
endwhile;
*/
?>

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
            <div class="uk-grid-match uk-child-width-1-3@s uk-child-width-1-4@m uk-text-center" uk-lightbox uk-grid="masonry:true">
                <?php
                foreach ($gids as $id) {
                    /* pull all the available attachment data with the new function */
                    $attachment = wp_prepare_attachment_for_js($id);
                ?>
                        <div class="uk-card uk-card-default uk-card-body">
                            <a class="uk-inline" href="<?php echo $attachment['sizes']['large']['url']; ?>" data-caption="<?php echo $attachment['caption']; ?>">
                                <img src="<?php echo $attachment['sizes']['medium']['url']; ?>" alt="<?php echo $attachment['caption']; ?>">
                            </a>
                        </div>
                <?php
                }
                ?>
    <?php
        endif;
    endwhile;
    ?>
    </div>
    <?php get_footer(); ?>