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

<section class="projects projects-archive">
    <div class="container">
        <div class="projects__grid--first">
            <?php
            $args = array(
                'post_type' => array('project'),
                'orderby' => 'date',
                'posts_per_page' => 4,
                'order' => 'DESC',
                'post_status' => array('publish'),
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                $count = 0;
                while ($query->have_posts()) {
                    $query->the_post();
                    $intro_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $excerpt = get_the_excerpt();
                    if (mb_strlen($excerpt) > 16) {
                        $excerpt = mb_substr($excerpt, 0, 200) . "...";
                    }
                    $count++;
                    $extraClass = ($count == 1 || $count == 4) ? 'big' : '';

                    $intro_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $excerpt = get_the_excerpt();
                    if (mb_strlen($excerpt) > 20) {
                        $excerpt = mb_substr($excerpt, 0, 78) . "...";
                    }
                    ?>

                    <div class="card  <?php echo $extraClass; ?>">
                        <a href="<?php the_permalink(); ?>">
                            <img class="card__thumb"
                                 src="<?php echo esc_url($intro_image) ?>"
                                 alt="Holder">
                        </a>
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="card__title text-default">
                                <?php the_title(); ?>
                            </h3>
                        </a>
                        <p class="card__description text--small">
                            <?php echo $excerpt ?>
                        </p>
                    </div>
                <?php }
                wp_reset_postdata();
            } ?>
            <?php
            ?>
        </div>
        <div class="projects__grid">
            <?php
            $args = array(
                'post_type' => array('project'),
                'orderby' => 'date',
                'posts_per_page' => -1,
                'offset' => 4,
                'order' => 'DESC',
                'post_status' => array('publish'),

            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $intro_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $excerpt = get_the_excerpt();
                    if (mb_strlen($excerpt) > 16) {
                        $excerpt = mb_substr($excerpt, 0, 200) . "...";
                    }
                    $intro_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $excerpt = get_the_excerpt();
                    if (mb_strlen($excerpt) > 20) {
                        $excerpt = mb_substr($excerpt, 0, 78) . "...";
                    }
                    ?>

                    <div class="card ">
                        <a href="<?php the_permalink(); ?>">
                            <img class="card__thumb"
                                 src="<?php echo esc_url($intro_image) ?>"
                                 alt="Holder">
                        </a>
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="card__title text-default">
                                <?php the_title(); ?>
                            </h3>
                        </a>
                        <p class="card__description text--small">
                            <?php echo $excerpt ?>
                        </p>
                    </div>
                <?php }
                wp_reset_postdata();
            } ?>
            <?php
            ?>
        </div>
        <?php get_template_part('template-parts/common/preloader'); ?>

    </div>
</section>