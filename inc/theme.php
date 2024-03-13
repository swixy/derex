<?php
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
}
register_nav_menus(
    array(
        'menu-header' => esc_html__('Header menu', 'derex'),
        'menu-footer' => esc_html__('Footer menu', 'derex'),
    )
);