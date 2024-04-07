<?php
if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

get_template_part("inc/assets");
get_template_part("inc/theme");

add_action('wp_ajax_sort_posts_by_taxonomy', 'sort_posts_by_taxonomy');
add_action('wp_ajax_nopriv_sort_posts_by_taxonomy', 'sort_posts_by_taxonomy');

function sort_posts_by_taxonomy()
{
    $term = $_POST['term'];
    $args = array(
        'post_type' => array('project'),
        'orderby' => 'date',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'post_status' => array('publish'),
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $term,
            ),
        ),
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

            <div class="card">
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

    }
    wp_reset_postdata();
    die();
}



add_action('wp_ajax_sort_posts_by_years', 'sort_posts_by_years');
add_action('wp_ajax_nopriv_sort_posts_by_years', 'sort_posts_by_years');

function sort_posts_by_years()
{
    $term = $_POST['term'];
    $args = array(
        'post_type' => array('news'),
        'orderby' => 'date',
        'posts_per_page' => -1,
        'offset' => 4,
        'order' => 'DESC',
        'post_status' => array('publish'),
        'tax_query' => array(
            array(
                'taxonomy' => 'year_cat',
                'field' => 'slug',
                'terms' => $term,
            ),
        ),
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

            <div class="card">
                <a href="<?php the_permalink(); ?>">
                    <img class="card__thumb"
                         src="<?php echo esc_url($intro_image) ?>"
                         alt="Holder">
                </a>
                <div class="card__meta">
                    <?php $date = get_the_date('d.m.Y / H:i');
                    echo $date;

                    ?>
                </div>
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

    }
    wp_reset_postdata();
    die();
}

?>


