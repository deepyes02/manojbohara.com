<?php
get_header();
?>
<h2>Search Results</h2>

<?php
if (have_posts()) :
?>
<div class="uk-container">
<div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center" uk-grid="parallax:100" uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 100; repeat: false">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', 'single')?>
        <?php
        endwhile; 
        ?>
        </div>
</div>
        <div class="pagination_links">
    <?php
    echo paginate_links();
    ?> </div><?php
else :
    ?>
        <p>There's nothing to be displayed</p>
    <?php
endif;
    ?>
    
    
    <?php
    wp_reset_postdata();
    ?>
    <?php get_footer(); ?>