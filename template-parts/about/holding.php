<?php
$holding_image = get_field('about__holding_image');
$holding_info = get_field('about__holding_info');
$title = $holding_info['title'];
$text = $holding_info['text'];
$link_url = $holding_info['link_url'];
?>
<section class="holding">
    <div class="container">
        <?php if ($holding_image): ?>
            <img src="<?php echo esc_url($holding_image['url']) ?>"
                 alt="<?php echo esc_attr($holding_image['alt']) ?>"
                 class="holding__image">
        <?php endif; ?>
        <div class="holding__info">
            <?php if ($title): ?>
                <h1 class="holding__info__title">
                    <?php echo esc_html($title) ?>
                </h1>
            <?php endif; ?>
            <?php if ($text): ?>
                <div class="holding__info__text">
                    <p>
                        <?php echo esc_html($text) ?> </p>
                </div>
            <?php endif; ?>
            <?php if ($link_url): ?>
                <a href="<?php echo esc_url($link_url) ?>" class="holding__info__link">
                    Read more
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

