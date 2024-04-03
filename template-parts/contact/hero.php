<?php
/**
 * Hero for Contact page
 * php version 8.3.3
 *
 * @category Component
 * @package  Wordpress
 * @author   vunterberg <vladunter404@gmail.com>
 * @license  GNU Public License
 * @link     https://developer.wordpress.org/themes/template-files-section/page-template-files/
 */

$contact__image = get_field('contact_hero_image');
$contact_info = get_field('contact_hero_info');
$title = $contact_info['title'];
$text = $contact_info['text'];
?>

<section class="hero-contact">

    <div class="hero-contact__image-wrapper">
        <?php if ($contact__image): ?>
            <img src="<?php echo esc_url($contact__image['url']) ?>"
                 alt="<?php echo esc_attr($contact__image['alt']) ?>"
                 class="hero-contact__image">
        <?php endif; ?>
    </div>
    <div class="container">
        <div class="contact__container">
            <div class="contact__info">
                <?php if ($title): ?>
                    <h1 class="contact__info__title">
                        <?php echo esc_html($title) ?>
                    </h1>
                <?php endif; ?>
                <?php if ($text): ?>
                    <p class="contact__info__text">
                        <?php echo esc_html($text) ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="contact__form">
                <form action="">
                    <div class="contact__form__wrapper">
                        <input type="text">
                        <input type="text">
                    </div>
                    <div class="contact__form__wrapper">
                        <input type="text">
                        <input type="text">
                    </div>
                    <textarea name="" id="" cols="30" rows="10">

                    </textarea>
                    <button class="contact__form__button">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>