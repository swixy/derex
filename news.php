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
    get_template_part(
        'template-parts/news/head',
        null, 
        [
            'title' => 'News',
            'description' => 'Lorem ipsum dolor sit amet consectetur. Nulla lorem pharetra enim nec.<br>Diam dignissim quam vulputate sed enim.'
        ]
    );
    get_template_part(
        'template-parts/common/filter', 
        null,
        ['items' => 
            [
                '2024' => '2024',
                '2023' => '2023',
                '2022' => '2022',
                '2021' => '2021',
                '2020' => '2020',
            ]
        ]
    );
    get_template_part('template-parts/news/news');
    ?>
</div>
<?php
get_footer();