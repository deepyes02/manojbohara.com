<?php get_header();?>


<?php
/* The loop */
while ( have_posts() ) :
    the_post();
    if ( get_post_gallery() ) :
        $gallery = get_post_gallery( get_the_ID(), false );
        /* create an array of IDs from  */
        $gids = explode( ",", $gallery['ids'] );
        /* Loop through all the image and output them one by one */
        foreach ($gids as $id) {
            /* pull all the available attachment data with the new function */
            $attachment = wp_prepare_attachment_for_js($id);
            /* Uncomment the next line to see all the available data in $attachment */
            //var_dump($attachment); 
            /* pick and choose which bits are needed */
            ?>
            <img src="<?php echo $attachment['sizes']['thumbnail']['url']; ?>" class="my-custom-class" alt="<?php echo $attachment['caption']; ?>" />
            <?php
        }
    endif;
endwhile;
?>

<?php get_footer();?>