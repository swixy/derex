<?php
$holding_image = get_field('holding_hero_image');
$holding_info = get_field('holding_hero_info');
$title = $holding_info['title'];
$text = $holding_info['text'];
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
        </div>
        <?php if ($holding_image): ?>
            <img src="<?php echo esc_url($holding_image['url']) ?>"
                 alt="<?php echo esc_attr($holding_image['alt']) ?>"
                 class="hero__image">
        <?php endif; ?>
    </div>
</section>