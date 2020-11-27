<?php get_header(); ?>
<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
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
        <!--tiny slider -->
        <div class="slider-container">
            <div class="my-slider">
                <?php
                foreach ($gids as $id) {
                    /* pull all the available attachment data with the new function */
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
?> 
            
        <h2>Total Pictures: <?php echo $num ?></h2>
        <p>lorem2000</p>
        <php? wp_reset_postdata(); ?>
        <?php get_footer(); ?>