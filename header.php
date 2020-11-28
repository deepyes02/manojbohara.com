<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right') ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <header class="header_new" id="header_new">
        <!-- mobile navigation bar -->
        <div class="mobileNavbar">
            <img id="mobileLogo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?>">
            <span class="logoText">MOJPHOTOGRAPHY</span>
            <a href="#" uk-icon="icon: facebook; ratio: 1.2"></a>
            <a href="#" uk-icon="icon: instagram; ratio: 1.2"></a>
            <a href="#" uk-icon="icon: youtube; ratio: 1.2"></a>
            <span id="hamburgerButton" uk-icon="icon: menu; ratio: 1.5"></span>
        </div>
        <!-- mobile navigation bar end -->
            <div id="menu_new">
                <span id="mobileNavCross" uk-icon="icon:close; ratio:1.5;"></span>
                <div class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?>" alt="">
                    <span>MojPhotography</span>
                    <div class="follow">
                        <a href="#" uk-icon="icon: facebook; ratio: 1.2"></a>
                        <a href="#" uk-icon="icon: instagram; ratio: 1.2"></a>
                        <a href="#" uk-icon="icon: youtube; ratio: 1.2"></a>
                    </div>
                </div>

                <nav id="nav_new">
                    <?php wp_nav_menu(array('theme_location' => 'primary')) ?>
                </nav>
            </div>
    </header>
    <div id="header_image">
            <figure id="header_image_id"><?php the_post_thumbnail(array(1920, 700)); ?>
            <figcaption id="header_image_title"><?php wp_title('|', true, 'right');?></figcaption>
        </figure>
            </div>