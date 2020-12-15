<!-- A new Header for Home Page -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mojphotography showcases candid shots, event covers and festival highlights, including blogs and videos">

    <title><?php wp_title('|', true, 'right') ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <!-- mobile navigation bar -->
        <div class="mobileNavbar">
            <img id="mobileLogo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png';?>" alt="mojphotography logo">
            <span class="logoText">MOJPHOTOGRAPHY</span>
            <a href="#" uk-icon="icon: facebook; ratio: 1.2"></a>
            <a href="#" uk-icon="icon: instagram; ratio: 1.2"></a>
            <a href="#" uk-icon="icon: youtube; ratio: 1.2"></a>
            <span id="hamburgerButton" uk-icon="icon: menu; ratio: 1.5"></span>
        </div>
        <!-- mobile navigation bar end -->
        <div class="uk-child-width-1@m" uk-grid>
            <div>
                <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slideshow="autoplay:true; autoplay-interval:3000; pause-on-hover: false">
                    <ul class="uk-slideshow-items">
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/saint.jpg'; ?>" alt="saint" uk-cover>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/mountain.jpg'; ?>" alt="mountain" uk-cover>
                        </li>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/sunshine.png'; ?>" alt="sunshine" uk-cover><h2
                        </li>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                </div>
            </div>
            <div id="menu">
                <span id="mobileNavCross" uk-icon="icon:close; ratio:1.5;"></span>
                <div class="logo">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?>" alt="mojphotography logo">
                    <span>MojPhotography</span>
                    <div class="follow">
                        <a href="#" uk-icon="icon: facebook; ratio: 1.2"></a>
                        <a href="#" uk-icon="icon: instagram; ratio: 1.2"></a>
                        <a href="#" uk-icon="icon: youtube; ratio: 1.2"></a>
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