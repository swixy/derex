<?php
function derex_scripts()
{
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('derex-style', get_template_directory_uri() . '/assets/css/main.css', [], $theme_version);
//    wp_enqueue_style('derex-locomotive-scroll', get_template_directory_uri() . '/src/locomotive/locomotive-scroll.css', [], $theme_version);
    wp_enqueue_style('derex-swiper-js', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css", array('katemedia-style','katemedia-locomotive-scroll'));
//    wp_enqueue_style('derex-aos-style', "https://unpkg.com/aos@2.3.1/dist/aos.css", array('katemedia-style'));

    wp_enqueue_script('derex-script', get_template_directory_uri() . '/assets/js/main.js',[], $theme_version);
    wp_enqueue_script('derex-swiper', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js");
//    wp_enqueue_script('derex-aos', "https://unpkg.com/aos@2.3.1/dist/aos.js");

}

add_action('wp_enqueue_scripts', 'derex_scripts');