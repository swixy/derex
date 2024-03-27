<?php
$advantage_title = get_field('holding_advantage_title');
$advantage_items = get_field('holding_advantage_items');
?>
<section class="collaborative">
    <div class="container">
        <?php if ($advantage_title): ?>
            <h2 class="collaborative__title">
                <?php echo esc_html($advantage_title) ?>
            </h2>
        <?php endif; ?>
        <?php if ($advantage_items): ?>
            <div class="collaborative__items">
                <?php
                foreach ($advantage_items as $item) {
                    $icon = $item['icon'];
                    $text = $item['text'];
                    ?>
                    <div class="collaborative__item">
                        <?php if ($icon): ?>
                            <img src="<?php echo esc_url($icon['url']) ?>"
                                 class="collaborative__item__img">
                        <?php endif; ?>
                        <?php if ($text): ?>
                            <p class="collaborative__item__text">
                                <?php echo wp_kses_post($text) ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php } ?>

                <!--                <div class="collaborative__item">-->
                <!--                    <img src="-->
                <?php //echo get_template_directory_uri() ?><!--/src/image/collaborative4.webp" alt=""-->
                <!--                         class="collaborative__item__img">-->
                <!--                    <p class="collaborative__item__text">-->
                <!--                        We oversee every phase<br> of the project cycle-->
                <!--                    </p>-->
                <!--                </div>-->
                <!--                <div class="collaborative__item">-->
                <!--                    <img src="-->
                <?php //echo get_template_directory_uri() ?><!--/src/image/collaborative5.webp" alt=""-->
                <!--                         class="collaborative__item__img">-->
                <!--                    <p class="collaborative__item__text">-->
                <!--                        We guarantee smooth project <br>flow through holding collaboration-->
                <!--                    </p>-->
                <!--                </div>-->
                <!--                <div class="collaborative__item">-->
                <!--                    <img src="-->
                <?php //echo get_template_directory_uri() ?><!--/src/image/collaborative2.webp" alt=""-->
                <!--                         class="collaborative__item__img">-->
                <!--                    <p class="collaborative__item__text">-->
                <!--                        We achieve strategic cost efficiencies by <br> leveraging our combined strength-->
                <!--                    </p>-->
                <!--                </div>-->
                <!--                <div class="collaborative__item">-->
                <!--                    <img src="-->
                <?php //echo get_template_directory_uri() ?><!--/src/image/collaborative1.webp" alt=""-->
                <!--                         class="collaborative__item__img">-->
                <!--                    <p class="collaborative__item__text">-->
                <!--                        We deploy a formidable arsenal of <br>specialized equipment and technology-->
                <!--                    </p>-->
                <!--                </div>-->
            </div>
        <?php endif; ?>
    </div>
</section>