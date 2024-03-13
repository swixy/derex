<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>
<header class="header">
    <div class="container" data-aos="fade">
        <div class="header__container">
            <a href="/">
                <img src="<?php echo get_template_directory_uri() ?>/src/image/logo-dark.webp"
                     alt=""
                     class="header__logo">
            </a>
            <nav class="header__navigator">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-header',
                    'container' => false
                ));
                ?>
            </nav>
            <div class="header__lang">
                EN
            </div>
            <div class="hamburger-menu">
                <div class="bar-top"></div>
                <div class="bar-middle"></div>
                <div class="bar-bottom"></div>
            </div>
        </div>
    </div>
</header>