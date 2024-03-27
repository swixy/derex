<?php
$philosophy_title = get_field('about_philosophy_title');
$philosophy_single_item = get_field('philosophy_single_items');
$philosophy_multiple_items = get_field('about_philosophy_multiple_items');
?>
<section class="philosophy">
    <div class="container">
        <?php if ($philosophy_title): ?>
            <h2 class="philosophy__title">
                <?php echo esc_html($philosophy_title) ?>
            </h2>
        <?php endif; ?>
        <?php if ($philosophy_single_item): ?>
            <div class="philosophy__items">
                <?php
                foreach ($philosophy_single_item as $item) {
                    $info = $item['about_philosophy_single_items'];
                    $icon = $info['icon'];
                    $title = $info['title'];
                    $text = $info['text'];
                    ?>
                    <div class="philosophy__item">
                        <?php if ($icon): ?>
                            <img class="philosophy__item__img"
                                 src="<?php echo esc_url($icon['url']) ?>"
                                 alt="<?php echo esc_attr($icon['alt']) ?>">
                        <?php endif; ?>
                        <?php if ($title): ?>
                            <h3 class="philosophy__item__title">
                                <?php echo esc_html($title) ?>
                            </h3>
                        <?php endif; ?>
                        <?php if ($text): ?>
                            <p class="philosophy__item__text">
                                <?php echo esc_html($text) ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php } ?>
            </div>
        <?php endif; ?>
        <?php if ($philosophy_multiple_items):
            $icon = $philosophy_multiple_items['icon'];
            $title = $philosophy_multiple_items['title'];
            $items = $philosophy_multiple_items['items'];
            ?>
            <div class="philosophy__item philosophy__items-detail">
                <?php if ($icon): ?>
                    <img class="philosophy__item__img"
                         src="<?php echo esc_url($icon['url']) ?>"
                         alt="<?php echo esc_attr($icon['alt']) ?>">
                <?php endif; ?>
                <?php if ($title): ?>
                    <h3 class="philosophy__item__title">
                        <?php echo esc_html($title) ?>
                    </h3>
                <?php endif; ?>
                <?php if ($items): ?>
                    <div class="philosophy__items-detail__blocks">
                        <?php
                        foreach ($items as $item) {
                            $title = $item['title'];
                            $text = $item['text'];
                            ?>
                            <div class="philosophy__item__info">
                                <?php if ($title): ?>
                                    <h3 class="philosophy__item__info__title">
                                        <?php echo esc_html($title) ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if ($text): ?>
                                    <p class="philosophy__item__info__text">
                                        <?php echo esc_html($text) ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
