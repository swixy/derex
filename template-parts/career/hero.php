<?php
$career_image = get_field('carrer_hero_image');
$career_hero = get_field('carrer_hero_info');
$title = $career_hero['title'];
$text = $career_hero['text'];
$button = $career_hero['button'];
?>
<section class="hero">
    <div class="container">
        <div class="hero__info">
            <?php if ($title): ?>
            <h1 class="hero__info__title">
                <?php echo esc_html($title) ?>
            </h1>
            <?php endif; ?>
            <?php if ($text): ?>
            <p class="hero__info__text">
                <?php echo esc_html($text) ?>
            </p>
            <?php endif; ?>
            <?php if ($button): ?>
            <button class="hero__info__btn">
                <?php echo esc_html($button) ?>
            </button>
            <?php endif; ?>
        </div>
        <?php if ($career_image): ?>
            <img src="<?php echo esc_url($career_image['url']) ?>"
                 alt="<?php echo esc_attr($career_image['alt']) ?>"
                 class="hero__image">
        <?php endif; ?>
    </div>
</section>