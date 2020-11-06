<?php
get_header();
?>
	<h2>Front page.php </h2>
    <p>This page takes precedence over home.php and index.php</p>
    <?php
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
    <div class="uk-child-width-1-3@s uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-hover uk-card-body">
            <h3 class="uk-card-title"><a href="<?php echo get_permalink($ID);?>"><?php the_title('<h2>', '</h2>'); ?></a></h3>
            <p><?php the_content(); ?></p>
        </div>
    </div>
    </div>
    <?php
    endwhile; 
else: 
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
endif;

wp_reset_postdata(); 
?>

<?php get_footer();?>