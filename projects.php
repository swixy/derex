<?php
/**
 * Template name: Project Page
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
    get_template_part(
        'template-parts/news/head',
        null, 
        [
            'title' => 'Projects',
            'description' => 'Lorem ipsum dolor sit amet consectetur. Nulla lorem pharetra enim nec.<br>Diam dignissim quam vulputate sed enim.'
        ]
    );
    get_template_part(
        'template-parts/common/filter',
        null,
        [
            'items' =>
                [
                    'all-works' => 'All Works',
                    'Category1' => 'Category',
                    'Category2' => 'Category',
                    'Category3' => 'Category',
                    'Category4' => 'Category',
                ]
        ]
    );
    get_template_part('template-parts/projects/projects');
    ?>
</div>
<?php
get_footer();