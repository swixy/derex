<?php
/**
 * Template name: Services Page
 * Template Post Type: page
 */
get_header();
?>
    <div class="services-page">
        <?php
        if (have_rows('services_block')):
            while (have_rows('services_block')) : the_row();
                if (get_row_layout() == 'hero_blocks'):
                    get_template_part('template-parts/services/hero');
                elseif (get_row_layout() == 'vertical_slider'):
                    get_template_part('template-parts/services/sliderVertical');
                elseif (get_row_layout() == 'tabs'):
                    get_template_part('template-parts/services/tabs');
                endif;
            endwhile;
        else :
        endif;
        ?>


        <!--        --><?php //get_template_part('template-parts/services/tabs') ?>
        <?php get_template_part('template-parts/services/advantages') ?>
        <?php get_template_part('template-parts/services/imageHalf') ?>
        <?php get_template_part('template-parts/home/projects') ?>
    </div>
<?php
get_footer();
