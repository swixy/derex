<?php
/**
 * Projects Cards for Projects page
 * php version 8.3.3
 * 
 * @category Component
 * @package  Wordpress
 * @author   vunterberg <vladunter404@gmail.com>
 * @license  GNU Public License
 * @link     https://developer.wordpress.org/themes/template-files-section/page-template-files/
 */
?>

<section class="projects">
    <div class="container">
        <div class="projects__grid--first">
            <?php get_template_part('template-parts/common/card', null, ['type' => 'big']); ?>
            <?php get_template_part('template-parts/common/card'); ?>
            <?php get_template_part('template-parts/common/card'); ?>
            <?php get_template_part('template-parts/common/card', null, ['type' => 'big']); ?>
        </div>
        <div class="projects__grid">
            <?php get_template_part('template-parts/common/card'); ?>
            <?php get_template_part('template-parts/common/card'); ?>
            <?php get_template_part('template-parts/common/card'); ?>
            <?php get_template_part('template-parts/common/card'); ?>
            <?php get_template_part('template-parts/common/card'); ?>
            <?php get_template_part('template-parts/common/card'); ?>
        </div>
        <?php get_template_part('template-parts/common/preloader'); ?>
        
    </div>
</section>