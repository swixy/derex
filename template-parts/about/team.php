<?php
$teams_title = get_field('about_teams_title');
$teams_items = get_field('about_teams_items');
?>


<section class="team">
    <div class="container">
        <?php if ($teams_title): ?>
            <h2 class="team__title">
                <?php echo esc_html($teams_title) ?>
            </h2>
        <?php endif; ?>
        <?php if ($teams_items): ?>
        <div class="team__container">
            <div class="team__items">
                <?php
                foreach ($teams_items as $item) {
                    $image = $item['image'];
                    $name = $item['name'];
                    $position = $item['position'];
                    ?>
                    <div class="team__item swiper-slide">
                        <?php if ($image): ?>
                            <img src="<?php echo esc_url($image['url']) ?>"
                                 alt="<?php echo esc_attr($image['alt']) ?>"
                                 class="team__item__img">
                        <?php endif; ?>
                        <?php if ($name): ?>
                            <h4 class="team__item__name">
                                <?php echo esc_html($name) ?>
                            </h4>
                        <?php endif; ?>
                        <?php if ($position): ?>
                            <p class="team__item__position">
                                <?php echo esc_html($position) ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php } ?>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

        <?php endif; ?>
    </div>
</section>
