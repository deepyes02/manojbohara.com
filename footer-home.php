<section class="footer-with-background">
        <!-- grid start -->
        <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center uk-grid-match" uk-grid>
        <div>
            <div class="uk-card uk-card-secondary uk-card-body footer-nav-section">
                <h2>Explore</h2>
                <ul>
                    <li><a href="<?php echo get_home_url();?>">Home</a></li>
                    <li>
                    <a href="<?php
                            $post_type = 'gallery';
                            echo get_post_type_archive_link($post_type);
                            ?>">Gallery</a>
                    </li>
                    <li>
                    <a href="<?php
                            $post_type = 'podcast';
                            echo get_post_type_archive_link($post_type);
                            ?>">Podcasts</a>
                    </li>
                    <li>
                    <a href="<?php
                            $post_type = 'video';
                            echo get_post_type_archive_link($post_type);
                            ?>">Videos</a>
                    </li>
                    <li>
                    <a href="<?php
                            $post_type = 'post';
                            echo get_post_type_archive_link($post_type);
                            ?>">Blogs</a>
                    </li>
                </ul>
            </div>
        </div>

        <address>
            <div class="uk-card uk-card-secondary uk-card-body footer-nav-section">
                <h2>Get in Touch</h2>
                <ul class="get-in-touch">
                    <li><a href="mailto:manojbohara57@gmail.com"><span uk-icon="icon: mail; ratio: 1.4"></span> Send email</a></li>
                    <li><a href="tel:+9779843655322"><span uk-icon="icon: receiver; ratio: 1.4"></span> +977-984-365-532</a></li>
                    <li><a href="<?php echo get_home_url();?>/contact"><span uk-icon="icon: users; ratio: 1.4"></span> Contact Form</a></li>

                </ul>           
            </div>
        </address>

        <div>
            <div class="uk-card uk-card-secondary uk-card-body footer-nav-section">
                <h2>Follow My Stories</h2>
                <ul class="footer-social-media">
                    <li>
                        <a href="https://www.facebook.com/moj.stories" target="_blank" uk-icon="icon: facebook; ratio: 1.2"></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/moj.photo/" target="_blank" uk-icon="icon: instagram; ratio: 1.2"></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCCXO-pXGOn856JkU-hOe7eA" target="_blank" uk-icon="icon: youtube; ratio: 1.2"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div> <!-- end of uk-grid-->

    <!-- grid end -->
    <div id="footer-note" class="yanone">
        <span style="color: rgb(219 133 0);">Glimpse of the world through lens of passion! </span>Built by <a class="dev_link" href="https://www.github.com/deepyes02" target="_blank">deepyes02</a><br/>
        <span> All Rights Reserved 2014-<?php echo date("Y"); ?> by Manoj Bohara. </span>
    </div>
</section>
</footer>
<?php wp_footer(); ?>
</body>

</html>