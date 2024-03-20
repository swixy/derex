<?php
/**
 * Template name: Services Page
 * Template Post Type: page
 */
get_header();
?>
    <div class="services-page">
        <?php get_template_part('template-parts/services/hero') ?>
        <?php get_template_part('template-parts/services/sliderVertical') ?>
        <?php get_template_part('template-parts/services/tabs') ?>
        <?php get_template_part('template-parts/home/projects') ?>
    </div>
<?php
get_footer();
