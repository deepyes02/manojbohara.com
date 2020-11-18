<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right')?></title>
    <?php wp_head();?>
</head>
<body>
<header class="header">
    <nav class="main-nav" id="nav">
    <?php wp_nav_menu(array ('theme_location' => 'primary'))?>
</nav>
</header>