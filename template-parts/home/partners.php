<?php
$partners_title = get_field('home_partners_title');
$partners_text = get_field('home_parnters_text');
$partners_logo = get_field('home_parners_logo');
?>
<section class="partners">
    <div class="container">
        <?php if ($partners_title): ?>
            <h2 class="partners__title">
                <?php echo esc_html($partners_title) ?>
            </h2>
        <?php endif; ?>
        <?php if ($partners_text): ?>
            <p class="partners__text">
                <?php echo wp_kses_post($partners_text) ?>
            </p>
        <?php endif; ?>
        <?php if ($partners_logo): ?>
            <div class="partners__items">
                <?php
                foreach ($partners_logo as $item) {
                    $logo = $item['logo'];
                    ?>
                    <img class="partners__items__img swiper-slide"
                         alt="<?php echo esc_attr($logo['alt']) ?>"
                         src="<?php echo esc_url($logo['url']) ?>">
                <?php } ?>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        <?php endif; ?>
    </div>
</section>