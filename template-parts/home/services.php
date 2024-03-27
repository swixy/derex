<?php
$services_title = get_field('home_services_title');
$sevices_text = get_field('home_sevices_text');
$services_items = get_field('home_services_items');
?>
<section class="services">
    <div class="container">
        <?php if ($services_title): ?>
            <h2 class="services__title">
                <?php echo esc_html($services_title) ?>
            </h2>
        <?php endif; ?>
        <?php if ($sevices_text): ?>
            <p class="services__text">
                <?php echo wp_kses_post($sevices_text) ?>
            </p>
        <?php endif; ?>
        <?php if ($services_items): ?>
            <div class="services__items">
                <?php
                $i = 1;
                foreach ($services_items as $item) {
                    $image = $item['image'];
                    $info = $item['info'];
                    $title = $info['title'];
                    $text = $info['text'];
                    $link = $info['link'];
                    ?>
                    <div class="services__item">
                        <?php if ($image): ?>
                            <img class="services__item__image"
                                 alt="<?php echo esc_attr($image['alt']) ?>"
                                 src="<?php echo esc_url($image['url']) ?>">
                        <?php endif; ?>
                        <div class="services__item__info">
                            <h5 class="services__item__number">
                                0<?php echo esc_html($i) ?>
                            </h5>
                            <?php if ($title): ?>
                                <h3 class="services__item__title">
                                    <?php echo esc_html($title) ?>
                                </h3>
                            <?php endif; ?>
                            <?php if ($text): ?>
                                <p class="services__item__text">
                                    <?php echo wp_kses_post($text) ?>
                                </p>
                            <?php endif; ?>
                            <?php if ($link): ?>
                                <a href="<?php echo esc_url($link) ?>" class="services__item__link">
                                    View Service
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php $i++;
                } ?>
            </div>
        <?php endif; ?>
    </div>
</section>