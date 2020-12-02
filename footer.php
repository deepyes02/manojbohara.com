<h2 class=".yanone" style="text-align:center; color:white; background-color:black">What are you looking for?</h2>
<div class="search-bar">
                <?php get_search_form();?>
            </div>
<section class="footer-navigation">
<div id="footer-subscription">
<?php get_sidebar('blog');?>
</div>
<div id="footer-categories">
<?php

$args = array(
    'show_count' => true,
    'title_li' => "This might Interest You"

);
wp_list_categories($args);

?>
</div>


<!-- grid start -->
<div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center uk-grid-match" uk-grid>
   <div>
    <div class="uk-card uk-card-secondary uk-card-body footer-nav-section">
        <h2>Explore</h2>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Podcasts</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Blogs</a></li>
        </ul>
    </div>
   </div>

   <div>
    <div class="uk-card uk-card-secondary uk-card-body footer-nav-section">
        <h2>Services</h2>
        <ul>
            <li><a href="#">Wedding Photography</a></li>
            <li><a href="#">Content Marketing</a></li>
            <li><a href="#">Consultation</a></li>
            <li><a href="#">Meeting</a></li>
        </ul>
    </div>
   </div>

   <div>
    <div class="uk-card uk-card-default uk-card-body footer-nav-section">
    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?>" alt="mojphotography logo">
    <span class="bigShoulders" style="font-size:1.6rem;">MOJPHOTOGRAPHY</span>
    </div>
   </div>
    

</div> <!-- end of uk-grid-->

<!-- grid end -->
</section>





<footer id="footer">
<span> All contents belong to MOJPHOTOGRAPHY™ or the publisher. Copyright <?php echo date("Y");?>. Built with <span uk-icon="heart" style="color:red;"></span> by <a href="https://www.github.com/deepyes02" target="_blank">deepyes02</a></span>
</footer>
<?php wp_footer(); ?>
</body>
</html>