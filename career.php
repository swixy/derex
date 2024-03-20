<?php
/**
 * Template name: Career Page
 * Template Post Type: page
 */
get_header();
?>
    <div class="career-page">
        <?php get_template_part('template-parts/career/hero') ?>
        <?php get_template_part('template-parts/career/achievements') ?>
        <?php get_template_part('template-parts/career/roles') ?>
        <?php get_template_part('template-parts/contact') ?>

    </div>


<?php
get_footer();