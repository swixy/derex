<?php
$about_title = get_field('home_about_title');
$about_text = get_field('home_about_text');
$about_items = get_field('hero_about_items');
?>

<section class="about">
    <div class="container">
        <div class="about__info">
            <?php if ($about_title): ?>
                <h2 class="about__title">
                    <?php echo esc_html($about_title) ?>
                </h2>
            <?php endif; ?>
            <?php if ($about_text): ?>
                <p class="about__text">
                    <?php echo esc_html($about_text) ?>
                </p>
            <?php endif; ?>
        </div>
        <?php if ($about_items): ?>
            <div class="about__items">
                <?php
                foreach ($about_items as $item) {
                    $title = $item['title'];
                    $text = $item['text'];
                    ?>
                    <div class="about__item">
                        <?php if ($title): ?>
                            <h4 class="about__item__title">
                                <?php echo esc_html($title) ?>
                            </h4>
                        <?php endif; ?>
                        <?php if ($text): ?>
                            <div class="about__item__text">
                                <?php echo wp_kses_post($text) ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php } ?>
            </div>
        <?php endif; ?>
    </div>
</section>