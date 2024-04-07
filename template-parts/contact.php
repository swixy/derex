<?php
$contact_info = get_field('contact_block_info', 'option');
$form_code = get_field('contact_block_contact_code', 'option');
?>
<section class="contact">
    <div class="container">
        <?php if ($contact_info):
        $title = $contact_info['title'];
        $text = $contact_info['text']
        ?>
        <div class="contact__container">
            <div class="contact__info">
                <h2 class="contact__info__title">
                    <?php echo esc_html($title) ?>
                </h2>
                <p class="contact__info__text">
                    <?php echo esc_html($text) ?>
                </p>
            </div>
            <?php endif; ?>
            <?php if ($form_code): ?>
                <div class="contact__form">
                    <?php echo do_shortcode($form_code); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
