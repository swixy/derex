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
?>

<section class="hero-contact">
    <div class="hero-contact__image-wrapper">
        <img src="<?php echo get_template_directory_uri() ?>/src/image/aboutHero.webp" alt="" class="hero-contact__image">
    </div>
    <div class="container">
        <div class="contact__container">
            <div class="contact__info">
                <h1 class="contact__info__title">
                    Contact us
                </h1>
                <p class="contact__info__text">
                    Lorem ipsum dolor sit amet consectetur. Nulla lorem pharetra enim nec. Diam dignissim quam vulputate sed enim. 
                </p>
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