<?php
$connection_image = get_field('about_connection_image');
$connection_info = get_field('about_connection_info');
$title = $connection_info['title'];
$text = $connection_info['text'];
$button_text = $connection_info['button_text'];
?>
<div class="connection">
    <div class="container">
        <div class="connection__info">
            <?php if ($title): ?>
                <h2 class="connection__info__title">
                    <?php echo esc_html($title) ?>
                </h2>
            <?php endif; ?>
            <?php if ($text): ?>
                <p class="connection__info__text">
                    <?php echo wp_kses_post($text) ?>
                </p>
            <?php endif; ?>
            <?php if ($button_text ): ?>
                <button class="connection__info__btn">
                    <?php echo esc_html($button_text) ?>
                </button>
            <?php endif; ?>
        </div>
        <?php if ($connection_image): ?>
            <img class="connection__image"
                 alt="<?php echo esc_attr($connection_image['alt']) ?>"
                 src="<?php echo esc_url($connection_image['url']) ?>">
        <?php endif; ?>
    </div>
</div>