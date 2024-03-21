<?php
/**
 * News Cards for News page
 * php version 8.3.3
 * 
 * @category Component
 * @package  Wordpress
 * @author   vunterberg <vladunter404@gmail.com>
 * @license  GNU Public License
 * @link     https://developer.wordpress.org/themes/template-files-section/page-template-files/
 */
?>

<section class="news">
    <div class="container">
        <div class="news__row">
            <?php get_template_part('template-parts/common/card'); ?>
            <?php get_template_part('template-parts/common/card'); ?>
        </div>
        <div class="news__grid">
            <?php get_template_part('template-parts/common/card'); ?>
            <?php get_template_part('template-parts/common/card'); ?>
            <?php get_template_part('template-parts/common/card'); ?>
            <?php get_template_part('template-parts/common/card'); ?>
            <?php get_template_part('template-parts/common/card'); ?>
            <?php get_template_part('template-parts/common/card'); ?>
        </div>
    </div>
</section>