<?php
$certificates_title = get_field('about_certificates_title');
$certificates_items = get_field('about_certificates_items');
?>

<section class="certificates">
    <div class="container">
        <?php if ($certificates_title): ?>
            <h2 class="certificates__title">
                <?php echo esc_html($certificates_title) ?>
            </h2>
        <?php endif; ?>
        <?php if ($certificates_items): ?>
            <div class="certificates__items">
                <?php
                foreach ($certificates_items as $item) {
                    $image = $item['image'];
                    ?>
                    <img src="<?php echo esc_url($image['url']) ?>"
                         alt="<?php echo esc_attr($image['alt']) ?>"
                         class="certificates__items__img swiper-slide">
                <?php } ?>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        <?php endif; ?>
    </div>
</section>