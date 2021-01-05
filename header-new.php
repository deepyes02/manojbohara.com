<!-- A new Header for Home Page -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Glimpse of the world through lens of passion. Photographer, videomaker and artist - Manoj Bohara.">

    <title><?php wp_title('|', true, 'right') ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <!-- mobile navigation bar -->
        <div class="mobileNavbar">
            <a href="<?php echo get_home_url();?>">
            <span class="bigShoulders">Manojbohara.com</span>
        </a>
                        <a href="https://www.facebook.com/moj.stories" target="_blank" uk-icon="icon: facebook; ratio: 1.2"></a>
                        <a href="https://www.instagram.com/moj.photo/" target="_blank" uk-icon="icon: instagram; ratio: 1.2"></a>
                        <a href="https://www.youtube.com/channel/UCCXO-pXGOn856JkU-hOe7eA" target="_blank" uk-icon="icon: youtube; ratio: 1.2"></a>
            <span id="hamburgerButton" uk-icon="icon: menu; ratio: 1.5"></span>
        </div>
        <!-- mobile navigation bar end -->
        <div class="uk-child-width-1@m" uk-grid>
            <div>
                <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slideshow="autoplay:true; autoplay-interval:4000; pause-on-hover: false">
                    <ul class="uk-slideshow-items">
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/gosainkunda.jpg'; ?>" alt="saint" uk-cover>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/boating_evening.jpg'; ?>" alt="mountain" uk-cover>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/macro_bud.jpg'; ?>" alt="sunshine" uk-cover><h2>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/portrait_kid.jpg'; ?>" alt="sunshine" uk-cover><h2>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/potter_motion.jpg'; ?>" alt="sunshine" uk-cover><h2>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/theatre_drama.jpg'; ?>" alt="sunshine" uk-cover><h2>
                        </li>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                </div>
            </div>
            <div id="menu">
                <span id="mobileNavCross" uk-icon="icon:close; ratio:1.5;"></span>
                <div class="logo">
                <a href="<?php echo get_home_url();?>">
                <span class="bigShoulders">Manojbohara.com</span>
        </a>
                    <div class="follow">
                    <a href="https://www.facebook.com/moj.stories" target="_blank" uk-icon="icon: facebook; ratio: 1.2"></a>
                        <a href="https://www.instagram.com/moj.photo/" target="_blank" uk-icon="icon: instagram; ratio: 1.2"></a>
                        <a href="https://www.youtube.com/channel/UCCXO-pXGOn856JkU-hOe7eA" target="_blank" uk-icon="icon: youtube; ratio: 1.2"></a>
                    </div>
                </div>

                <nav class="main-nav" id="nav">
                    <?php wp_nav_menu(array('theme_location' => 'primary')) ?>
                </nav>
            </div>
        </div>
    </header>
    <div class="search-bar">
                <?php get_search_form();?>
            </div>