<?php
$main_disable = get_field('katemedia_main_disable');
$home_info = get_field('home_hero_info');
$hero_title = $home_info['home_hero_title'];
$hero__text = $home_info['home__hero__text'];
$hero_button = $home_info['hero_hero_button'];
$hero_slider = get_field('home_hero_slider');
?>

<section class="hero">
    <div class="container">
        <div class="hero__info">
            <?php if ($hero_title): ?>
                <h1 class="hero__info__title">
                    <?php echo esc_html($hero_title) ?>
                </h1>
            <?php endif; ?>
            <?php if ($hero__text): ?>
                <p class="hero__info__text">
                    <?php echo wp_kses_post($hero__text) ?>
                </p>
            <?php endif; ?>
            <?php if ($hero_button): ?>
                <button data-href="<?php echo esc_html($hero_button['url']) ?>" class="hero__info__btn">
                    <?php echo esc_html($hero_button['text']) ?>
                </button>
            <?php endif; ?>
        </div>
        <?php if ($hero_slider): ?>
            <div class="hero__slider">
                <div class="hero__slider__container">
                    <?php
                    foreach ($hero_slider as $image) {
                        $image = $image['image'];
                        ?>
                        <img class="swiper-slide"
                             src="<?php echo esc_url($image ['url']) ?>"
                             alt="<?php echo esc_attr($image ['alt']) ?>">
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        <?php endif; ?>
    </div>
</section>