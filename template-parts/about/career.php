<?php
$career_image = get_field('about_career_image_copy');
$career_info = get_field('about_career_info');
$title = $career_info['title'];
$text = $career_info['text'];
$button_text = $career_info['button_text'];
?>
<div class="career">
    <div class="container">
        <div class="career__info">
            <?php if ($title): ?>
                <h2 class="career__info__title">
                    <?php echo esc_html($title) ?>
                </h2>
            <?php endif; ?>
            <?php if ($text): ?>
                <p class="career__info__text">
                    <?php echo wp_kses_post($text) ?>
                </p>
            <?php endif; ?>
            <?php if ($button_text ): ?>
                <button class="career__info__btn">
                    <?php echo esc_html($button_text) ?>
                </button>
            <?php endif; ?>
        </div>
        <?php if ($career_image): ?>
            <img class="career__image"
                 alt="<?php echo esc_attr($career_image['alt']) ?>"
                 src="<?php echo esc_url($career_image['url']) ?>">
        <?php endif; ?>
    </div>
</div>