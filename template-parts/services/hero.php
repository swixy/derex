<?php
$image = get_sub_field('image');
$info_hero = get_sub_field('services_hero_info');
$title = $info_hero['title'];
$text = $info_hero['text'];
$button_text = $info_hero['button_text'];
?>
<section class="hero">
    <div class="container">
        <div class="hero__info">
            <?php if ($title): ?>
                <h1 class="hero__info__title">
                    <?php echo wp_kses_post($title) ?>
                </h1>
            <?php endif; ?>
            <?php if ($text): ?>
                <p class="hero__info__text">
                    <?php echo esc_html($text) ?>
                </p>
            <?php endif; ?>
            <?php if ($button_text): ?>
                <button class="hero__info__btn">
                    <?php echo esc_html($button_text) ?>
                </button>
            <?php endif; ?>
        </div>
        <?php if ($image): ?>
        <img src="<?php echo esc_url($image['url']) ?>"
             alt="<?php echo esc_attr($image['alt']) ?>"
             class="hero__image">
        <?php endif; ?>
    </div>
</section>