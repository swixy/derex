<?php
$achievements_title = get_field('carrer_achievements_title');
$achievements_text = get_field('carrer_achievements_text');
$achievements_items = get_field('carrer_achievements_items');
?>
<section class="achievements">
    <div class="container">
        <?php if ($achievements_title): ?>
            <h2 class="achievements__title">
                <?php echo wp_kses_post($achievements_title) ?>
            </h2>
        <?php endif; ?>
        <?php if ($achievements_text): ?>
            <p class="achievements__text">
                <?php echo esc_html($achievements_text) ?>
            </p>
        <?php endif; ?>
        <?php if ($achievements_items): ?>
            <div class="achievements__items">
                <?php
                foreach ($achievements_items as $item) {
                    $icon = $item['icon'];
                    $title = $item['title'];
                    $text = $item['text'];
                    ?>
                    <div class="achievements__item">
                        <?php if ($icon): ?>
                            <img src="<?php echo esc_url($icon['url']) ?>"
                                 alt="<?php echo esc_attr($icon['alt']) ?>"
                                 class="achievements__item__img">
                        <?php endif; ?>
                        <?php if ($title): ?>
                            <h3 class="achievements__item__title">
                                <?php echo esc_html($title) ?>
                            </h3>
                        <?php endif; ?>
                        <?php if ($text): ?>
                            <p class="achievements__item__text">
                                <?php echo esc_html($text) ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php } ?>
            </div>
        <?php endif; ?>
    </div>
</section>