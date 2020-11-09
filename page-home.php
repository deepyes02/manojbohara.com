<?php
get_header();
?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width ?>" alt="" "/>

<p>Apparently this is our homepage that needs to be edited </p>



<aside class="sidebar"><?php get_sidebar('home');?></aside>

<?php get_footer(); ?>