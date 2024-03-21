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
 * @var array $args
 */

 extract($args);
?>

<section class="hero-about">
    <div class="container">
        <h1 class="hero-about__title">
            <?php echo $title; ?>
        </h1>
        <p class="hero-about__text">
            <?php echo $description; ?>
        </p>
    </div>
</section>