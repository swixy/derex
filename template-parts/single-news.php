<?php
/**
 * Single project template
 * php version 8.3.3
 *
 * @category Template
 * @package  Wordpress
 * @author   vunterberg <vladunter404@gmail.com>
 * @license  GNU Public License
 * @link     https://developer.wordpress.org/themes/template-files-section/page-template-files/
 */
$single_image = get_field('news_single_image');
$single_content = get_field('news_single_content');
$related_articles = get_field('news_single_related_articles');
$excerpt = get_the_excerpt();
?>

<section class="project news-single">
    <div class="container">
        <h1 class="project__title h1">
            <?php the_title(); ?>
        </h1>
        <p class="text--large">
            Lorem ipsum dolor sit amet consectetur. Nulla lorem pharetra enim nec. Diam dignissim quam vulputate sed
            enim. Nulla lorem pharetra enim nec.
        </p>
        <?php if ($single_image): ?>
            <img class="project__poster"
                 src="<?php echo esc_url($single_image['url']) ?>"
                 alt="<?php echo esc_attr($single_image['alt']) ?>">
        <?php endif; ?>
        <div class="news-single__row">
            <?php if ($single_content): ?>
                <div class="news-single__col">
                    <div class="text--default news-single__content">
                        <?php echo wp_kses_post($single_content) ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <?php if ($related_articles):
            $title = $related_articles['title'];
            $items = $related_articles['items'];
            ?>
            <div class="news-single__related">
                <?php if ($title): ?>
                    <div class="news-single__head">
                        <h2 class="news-single__title h2">
                            <?php echo esc_html($title) ?>
                        </h2>
                        <a class="news-single__link" href="/news">
                            See More
                        </a>
                    </div>
                <?php endif; ?>
                <?php if ($items): ?>
                    <div class="news__grid">
                        <?php
                        foreach ($items as $item) {
//                            $image = $item['image'];
                            ?>
                            <div class="card ">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="card__thumb"
                                         src="<?php echo get_template_directory_uri() ?>/src/image/projectsHome1.webp"
                                         alt="Holder"
                                         style="height: auto;"
                                    >
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
                        <?php } ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>