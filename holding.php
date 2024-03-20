<?php
/**
 * Template name: Holding Page
 * Template Post Type: page
 */
get_header();
?>
<div class="holding-page">
    <?php get_template_part('template-parts/holding/hero') ?>
    <?php get_template_part('template-parts/holding/companies') ?>
    <?php get_template_part('template-parts/holding/numbers') ?>
    <?php get_template_part('template-parts/holding/collaborative') ?>
    <?php get_template_part('template-parts/holding/geography') ?>
</div>


<?php
get_footer();
