<?php
$roles_title = get_field('carrer_roles_title');
$roles_text = get_field('carrer_roles_text');
$roles_items = get_field('carrer_roles_items');
?>
<section class="roles">
    <div class="container">
        <?php if ($roles_title): ?>
            <h2 class="roles__title">
                <?php echo esc_html($roles_title) ?>
            </h2>
        <?php endif; ?>
        <?php if ($roles_text): ?>
            <p class="roles__text">
                <?php echo esc_html($roles_text) ?>
            </p>
        <?php endif; ?>
        <?php if ($roles_items): ?>
            <div class="roles__items">
                <?php
                foreach ($roles_items as $item) {
                    $title = $item['roles_name'];
                    $description = $item['description'];
                    ?>
                    <div class="roles__item">
                        <?php if ($title): ?>
                            <h3 class="roles__item__title">
                                <?php echo esc_html($title) ?>
                            </h3>
                        <?php endif; ?>
                        <div class="roles__item__content">
                            <?php if ($description): ?>
                                <?php echo wp_kses_post($description) ?>
                            <?php endif; ?>
                            <button class="roles__item__btn">
                                Apply here
                            </button>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php endif; ?>
    </div>
</section>
