<?php
$tab = get_sub_field('tab');
?>
<section class="tabs">
    <div class="container">

        <div class="tabs__items">
            <?php
            $i = 1;
            foreach ($tab as $item) {
                $name_tab = $item['name_tab'];
                ?>
                <?php if ($name_tab): ?>
                    <div class="tabs__item <?php if ($i === 1) {
                        echo 'active';
                    } ?>">
                        <?php echo esc_html($name_tab); ?>
                    </div>
                <?php endif; ?>
                <?php $i++;
            } ?>
            <div class="tabs__indicator"></div>
        </div>

        <?php
        $i = 1;
        foreach ($tab as $item) {
            $tab_content = $item['tab_content'];
            ?>
            <div id="content<?php echo $i ?>" class="tabs__content <?php if ($i === 1) {
                echo 'active';
            } ?>">
                <?php foreach ($tab_content as $content) {
                    if ($content['acf_fc_layout'] === 'title') {
                        ?>
                        <h3 class="tabs__title">
                            <?php echo $content['title']; ?>
                        </h3>

                    <?php } elseif ($content['acf_fc_layout'] === 'text') {
                        ?>
                        <p class="tabs__text">
                            <?php echo $content['text']; ?>
                        </p>

                    <?php } elseif ($content['acf_fc_layout'] === 'type_content') {
                        $type_block = $content['type_block'];
                        ?>
                        <?php foreach ($type_block as $type) {
                            if ($type['acf_fc_layout'] === 'simple_items') {
                                $items = $type['items'];
                                ?>
                                <div class="tabs__points">
                                    <?php
                                    foreach ($items as $item) {
                                        $title = $item['title'];
                                        $text = $item['text'];
                                        ?>
                                        <div class="tabs__point">
                                            <?php if ($title): ?>
                                                <h4 class="tabs__point__title">
                                                    <?php echo esc_html($title) ?>
                                                </h4>
                                            <?php endif; ?>
                                            <?php if ($text): ?>
                                                <p class="tabs__point__text">
                                                    <?php echo esc_html($text) ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } elseif ($type['acf_fc_layout'] === 'step') {
                                $title = $type['title'];
                                $items = $type['items'];
                                ?>
                                <div class="tabs__step">
                                    <?php if ($title): ?>
                                        <h3 class="tabs__step__title">
                                            <?php echo esc_html($title) ?>
                                        </h3>
                                    <?php endif; ?>
                                    <div class="tabs__step__slider">
                                        <div class="slider__step__items">
                                            <?php
                                            $i = 1;
                                            foreach ($items as $item) {
                                                $name_step = $item['name_step'];
                                                ?>
                                                <div class="step__slider__item swiper-slide">
                                                    <span><?php echo $i ?></span>
                                                    <h4>
                                                        <?php echo esc_html($name_step); ?>
                                                    </h4>
                                                </div>
                                                <?php $i++;
                                            } ?>
                                        </div>
                                        <div class="slider__step__contents">
                                            <?php
                                            foreach ($items as $item) {
                                                $content_step = $item['content_step'];
                                                ?>
                                                <div class="slider__step__content swiper-slide">
                                                    <?php
                                                    foreach ($content_step as $step) {
                                                        $title = $step['title'];
                                                        $text = $step['text'];
                                                        ?>
                                                        <div class="step__content">
                                                            <?php if ($title): ?>
                                                                <h4 class="step__content__title">
                                                                    <?php echo esc_html($title) ?>
                                                                </h4>
                                                            <?php endif; ?>
                                                            <?php if ($text): ?>
                                                                <p class="step__content__text">
                                                                    <?php echo esc_html($text) ?>
                                                                </p>
                                                            <?php endif; ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } elseif ($type['acf_fc_layout'] === 'image_items') {
                                $items = $type['items'];
                                ?>
                                <div class="tabs__lighting">
                                    <?php
                                    foreach ($items as $item) {
                                        $image = $item['image'];
                                        $info = $item['info'];
                                        $title = $info['title'];
                                        $list = $info['items'];
                                        ?>
                                        <div class="tabs__lighting__items">
                                            <img src="<?php echo esc_url($image['url']) ?>"
                                                 alt=""
                                                 class="tabs__lighting__img">

                                            <div class="tabs__lighting__info">
                                                <?php if ($title): ?>
                                                    <h3 class="tabs__lighting__title">
                                                        <?php echo esc_html($title) ?>
                                                    </h3>
                                                <?php endif; ?>
                                                <div class="tabs__lighting__lists">
                                                    <?php
                                                    foreach ($list as $item) {
                                                        $title = $item['title'];
                                                        $text = $item['text'];
                                                        ?>
                                                        <div class="tabs__lighting__list">
                                                            <?php if ($title): ?>
                                                                <h4 class="tabs__lighting__list__title">
                                                                    <?php echo esc_html($title) ?>
                                                                </h4>
                                                            <?php endif; ?>
                                                            <?php if ($text): ?>
                                                                <p class="tabs__lighting__list__text">
                                                                    <?php echo esc_html($text) ?>
                                                                </p>
                                                            <?php endif; ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php }
                        } ?>
                    <?php }
                } ?>
            </div>

            <?php $i++;
        } ?>

    </div>
</section>