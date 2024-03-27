<?php
$about_title = get_field('abot_block_title');
$about_info = get_field('abot_block_info');
$about_info_text = $about_info['text'];
$about_info_items = $about_info['items'];
?>
<section class="company">
    <div class="container">
        <div class="company__container">
            <?php if ($about_title): ?>
                <h2 class="company__title">
                    <?php echo esc_html($about_title) ?>
                </h2>
            <?php endif; ?>
            <?php if ($about_info): ?>
                <div class="company__info">
                    <?php if ($about_info_text): ?>
                        <div class="company__info__text">
                            <?php echo wp_kses_post($about_info_text) ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($about_info_items): ?>
                        <div class="company__items">
                            <?php
                            foreach ($about_info_items as $item) {
                                $title = $item['title'];
                                $text = $item['text'];
                                ?>
                                <div class="company__item">
                                    <?php if ($title): ?>
                                        <h3 class="company__item__title">
                                            <?php echo esc_html($title) ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if ($text): ?>
                                        <p class="company__item__text">
                                            <?php echo wp_kses_post($text) ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>