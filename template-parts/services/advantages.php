<?php
$title = get_sub_field('title');
$advantages = get_sub_field('items');
?>
<section class="advantages">
    <div class="container">
        <?php if ($title): ?>
            <h2 class="advantages__title">
                <?php echo esc_html($title) ?>
            </h2>
        <?php endif; ?>
        <?php if ($advantages): ?>
            <div class="advantages__items">
                <?php
                foreach ($advantages as $item) {
                    $icon = $item['icon'];
                    $title = $item['title'];
                    $text = $item['text'];
                    ?>
                    <div class="advantages__item">
                        <?php if ($icon): ?>
                            <img src="<?php echo esc_url($icon['url'])?>"
                                 alt="<?php echo esc_attr($icon['alt'])?>"
                                 class="advantages__item__icon">
                        <?php endif; ?>
                        <?php if ($title): ?>
                            <h3 class="advantages__item__title">
                                <?php echo esc_html($title) ?>
                            </h3>
                        <?php endif; ?>
                        <?php if ($text): ?>
                            <p class="advantages__item__text">
                                <?php echo esc_html( $text) ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php } ?>
            </div>
        <?php endif; ?>
    </div>
</section>