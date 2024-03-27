<?php
$numbers_title = get_field('holding_numbers_title');
$numbers_items = get_field('holding_numbers_items');
?>
<section class="numbers">
    <div class="container">
        <?php if ($numbers_title): ?>
            <h2 class="numbers__title">
                <?php echo esc_html($numbers_title) ?>
            </h2>
        <?php endif; ?>
        <?php if ($numbers_items): ?>
            <div class="numbers__items">
                <?php
                foreach ($numbers_items as $item) {
                    $number = $item['number'];
                    $text = $item['text'];
                    ?>
                    <div class="numbers__item">
                        <?php if ($number): ?>
                            <h3 class="numbers__item__title">
                                <?php echo esc_html($number) ?>
                            </h3>
                        <?php endif; ?>
                        <?php if ($text): ?>
                            <p class="numbers__item__text">
                                <?php echo esc_html($text) ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php } ?>
            </div>
        <?php endif; ?>
    </div>
</section>
