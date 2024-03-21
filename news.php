<?php
/**
 * Template name: News Page
 * Template Post Type: page
 * php version 8.3.3
 * 
 * @category Pages
 * @package  Wordpress
 * @author   vunterberg <vladunter404@gmail.com>
 * @license  GNU Public License
 * @link     https://developer.wordpress.org/themes/template-files-section/page-template-files/
 */

get_header(); ?>
<div class="news">
    <?php
    get_template_part('template-parts/news/head');
    get_template_part('template-parts/news/filters');
    get_template_part('template-parts/news/news');
    ?>
</div>
<?php
get_footer();