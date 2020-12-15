<footer id="footer">
    <section class="contact-section">
        <div id="footer-subscription">
            <?php get_sidebar('blog'); ?>
        </div>
        <div id="contact-form">
            <?php get_sidebar('home'); ?>
        </div>
    </section>

    <section id="footer-categories">
        <?php

        $args = array(
            'show_count' => true,
            'title_li' => "This might Interest You"

        );
        wp_list_categories($args);

        ?>
    </section>
    <div class="search-bar">
        <?php get_search_form(); ?>
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
    <div id="footer-note">
    <span> All contents belong to MOJPHOTOGRAPHY™ or the publisher. Copyright <?php echo date("Y"); ?>. Built with <span uk-icon="heart" style="color:red;"></span> by <a href="https://www.github.com/deepyes02" target="_blank">deepyes02</a></span>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>