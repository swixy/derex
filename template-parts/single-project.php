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
$single_image = get_field('project_single_image');
$single_content = get_field('project_single_content');
$single_gallery = get_field('project_single_gallery');
$excerpt = get_the_excerpt();
?>

<section class="project">
    <div class="container">
        <h1 class="project__title h1">
            <?php the_title(); ?>
        </h1>
        <?php if ($excerpt): ?>
            <p class="text--large">
                <?php echo esc_html($excerpt) ?>
            </p>
        <?php endif; ?>
        <?php if ($single_image): ?>
            <img class="project__poster"
                 src="<?php echo esc_url($single_image['url']) ?>"
                 alt="<?php echo esc_attr($single_image['alt']) ?>">
        <?php endif; ?>
        <?php if ($single_content):
            $description = $single_content['description'];
            $details = $single_content['detaills'];
            ?>
            <div class="project__row">
                <?php if ($description):
                    $title = $description['title'];
                    $text = $description['text'];
                    ?>
                    <div class="project__col project__col-8">
                        <?php if ($title): ?>
                            <h2 class="h2">
                                <?php echo esc_html($title) ?>
                            </h2>
                        <?php endif; ?>
                        <?php if ($text): ?>
                            <div class="text--large project__text">
                                <?php echo wp_kses_post($text) ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ($details):
                    $title = $details['title'];
                    $items = $details['items'];
                    ?>
                    <div class="project__col project__col-4">
                        <?php if ($title): ?>
                            <h2 class="h2">
                                <?php echo esc_html($title) ?>
                            </h2>
                        <?php endif; ?>
                        <?php if ($items): ?>
                            <div class="project__text text--large">
                                <?php
                                foreach ($items as $item) {
                                    $text = $item['item'];
                                    ?>
                                    <p><?php echo esc_html($text) ?></p>
                                <?php } ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($single_gallery):
            $title = $single_gallery['title'];
            $images = $single_gallery['images']
            ?>
            <div class="project__gallery">
                <?php if ($title): ?>
                    <h2 class="h2">
                        <?php echo esc_html($title) ?>
                    </h2>
                <?php endif; ?>
                <?php if ($images): ?>
                    <div class="project__slider-wrapper">
                        <div class="project__slider">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($images as $image) {
                                    $image = $image['image'];
                                    ?>
                                    <div class="swiper-slide">
                                        <img
                                            src="<?php echo esc_url($image ['url']) ?>"
                                            alt="<?php echo esc_attr($image ['alt']) ?>">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_template_part(
    'template-parts/contact',
    null,
    [
        'title' => 'Let’s discuss your idea!',
        'text' => 'Donec dapibus velit ac augue bibendum laoreet. Sed ac dolor non nulla lacinia bibendum. Morbi eu lectus ac dolor placerat tincidunt.'
    ]
); ?>