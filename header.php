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
<header class="header default">
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


                <div class="header__lang__cur"><?php
                    if (function_exists('pll_current_language')) {
                        $current_language = pll_current_language();
                        if ($current_language) {
                            echo esc_html($current_language);
                        }
                    }
                    ?>

                    <?php
                    if (function_exists('pll_the_languages')) {
                        $languages = pll_the_languages(array('raw' => true));
                        if ($languages) {
                            echo '<ul>';
                            foreach ($languages as $lang) {
                                $selected = isset($lang['current']) && $lang['current'] ? 'class="selected"' : '';
                                echo '<li><a href="' . esc_attr($lang['url']) . '" ' . $selected . '>';
                                echo esc_html($lang['name']);
                                echo '</a></li>';
                            }
                            echo '</ul>';
                        }
                    }
                    ?>

                </div>


            </div>
            <div class="hamburger-menu">
                <div class="bar-top"></div>
                <div class="bar-middle"></div>
                <div class="bar-bottom"></div>
            </div>
        </div>
    </div>
</header>