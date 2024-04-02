<?php
/**
 * Hero for News page
 * php version 8.3.3
 *
 * @category Component
 * @package  Wordpress
 * @author   vunterberg <vladunter404@gmail.com>
 * @license  GNU Public License
 * @link     https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 */
$project_title = get_the_title();
$project_description = get_the_content();
?>

<section class="hero-about">
    <div class="container">
        <?php if ($project_title): ?>
            <h1 class="hero-about__title">
                <?php echo esc_html($project_title); ?>
            </h1>
        <?php endif; ?>
        <?php if ($project_description): ?>
            <div class="hero-about__text">
                <?php echo wp_kses_post($project_description); ?>
            </div>
        <?php endif; ?>
    </div>
</section>