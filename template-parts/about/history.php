<?php
$history_image = get_field('about_history_image');
$history_info = get_field('about_history_info');
$history_info_title = $history_info['title'];
$history_info_text = $history_info['text'];
?>
<section class="history">
    <div class="container">
        <div class="history__info">
            <?php if ($history_info_title): ?>
                <h2 class="history__info__title">
                    <?php echo esc_html($history_info_title) ?>
                </h2>
            <?php endif; ?>
            <?php if ($history_info_text): ?>
                <div class="history__info__text">
                    <?php echo wp_kses_post($history_info_text) ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if ($history_image): ?>
            <img src="<?php echo esc_url($history_image['url']) ?>"
                 alt="<?php echo esc_attr($history_image['alt']) ?>"
                 class="history__image">
        <?php endif; ?>
    </div>
</section>
