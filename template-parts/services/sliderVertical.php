<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$content = get_sub_field('content');
?>
<section class="sliderVertical">
    <div class="container">
        <?php if ($title): ?>
            <h2 class="sliderVertical__title">
                <?php echo wp_kses_post($title) ?>
            </h2>
        <?php endif; ?>
        <?php if ($text): ?>
            <p class="sliderVertical__text">
                <?php echo wp_kses_post($text) ?>
            </p>
        <?php endif; ?>
        <div class="sliderVertical__container">
            <div class="sliderVertical__lists">
                <?php
                foreach ($content as $item) {
                    $name = $item['name_slide'];
                    ?>
                    <?php if ($name): ?>
                        <p class="sliderVertical__lists__item swiper-slide">
                            <?php echo esc_html($name); ?>
                        </p>
                    <?php endif; ?>
                <?php } ?>

            </div>
            <div class="sliderVertical__content">
                <?php
                foreach ($content as $item) {
                    $type_content = $item['type_content']; ?>
                    <div class="sliderVertical__content__item swiper-slide">
                        <?php foreach ($type_content as $item) {
                            if ($item['acf_fc_layout'] === 'title') {
                                ?>
                                <h5 class="sliderVertical__content__title">
                                    <?php echo $item['title']; ?>
                                </h5>

                            <?php } elseif ($item['acf_fc_layout'] === 'list') {
                                ?>
                                <div class="sliderVertical__content__lists">
                                    <?php
                                    foreach ($item['list'] as $items) {
                                        ?>
                                        <p class="sliderVertical__content__list">
                                            <?php echo $items['item']; ?>
                                        </p>
                                    <?php } ?>
                                </div>

                            <?php } elseif ($item['acf_fc_layout'] === 'text') { ?>
                                <div class="sliderVertical__content__text">
                                    <?php echo wp_kses_post($item['text']) ?>
                                </div>
                            <?php }
                        } ?>

                    </div>
                <?php }
                ?>

            </div>
        </div>
    </div>
</section>
