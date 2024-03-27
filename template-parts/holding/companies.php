<?php
$companies_title = get_field('holding_companies_title');
$companies_text = get_field('holding_companies_text');
$companies_items = get_field('holding_companies_items');
?>
<section class="companies">
    <div class="container">
        <?php if ($companies_title): ?>
            <h2 class="companies__title">
                <?php echo esc_html($companies_title) ?>
            </h2>
        <?php endif; ?>
        <?php if ($companies_text): ?>
            <div class="companies__text">
                <?php echo esc_html($companies_text) ?>
            </div>
        <?php endif; ?>
        <?php if ($companies_items): ?>
            <div class="companies__items">

                <?php
                foreach ($companies_items as $item) {
                    $image = $item['image'];
                    $text = $item['text'];
                    ?>
                    <div class="companies__item">
                        <?php if ($image): ?>
                            <img src="<?php echo esc_url($image['url']) ?>"
                                 alt="<?php echo esc_attr($image['alt']) ?>"
                                 class="companies__item__img">
                        <?php endif; ?>
                        <?php if ($text): ?>
                            <p class="companies__item__text">
                                <?php echo esc_html($text) ?>
                            </p>
                        <?php endif; ?>
                    </div>

                <?php } ?>
            </div>
        <?php endif; ?>
    </div>
</section>