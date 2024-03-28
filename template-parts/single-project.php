<?php
/**
 * Single project template
 * php version 8.3.3
 * 
 * @category Template
 * @package  Wordpress
 * @author   vunterberg <vladunter404@gmail.com>
 * @license  GNU Public License
 * @link     https://developer.wordpress.org/themes/template-files-section/page-template-files/
 */
?>

<section class="project">
    <div class="container">
        <h1 class="project__title h1">
            Project name
        </h1>
        <p class="text--large">
            Lorem ipsum dolor sit amet consectetur. Nulla lorem pharetra enim nec. Diam dignissim quam vulputate sed
            enim. Nulla lorem pharetra enim nec.
        </p>
        <img class="project__poster"
            src="<?php echo get_template_directory_uri(); ?>/src/image/single-project-holder.jpg" alt="">
        <div class="project__row">
            <div class="project__col project__col-8">
                <h2 class="h2">
                    Description
                </h2>
                <div class="text--large project__text">
                    <p>
                        Lorem ipsum dolor sit amet consectetur. Risus dolor eget purus dignissim cum pretium. Dignissim
                        tellus leo in arcu felis. Neque volutpat dictum elit id lectus fermentum est. Purus convallis
                        amet
                        nunc lorem tellus adipiscing vitae lacus. Lorem ipsum dolor sit amet consectetur. Risus dolor
                        eget
                        purus dignissim cum pretium. Dignissim tellus leo in arcu felis. Neque volutpat dictum elit id
                        lectus fermentum est. Purus convallis amet nunc lorem tellus adipiscing vitae lacus.
                        Dignissim tellus leo in arcu felis. Neque volutpat dictum elit id lectus fermentum est. Purus
                        convallis amet nunc lorem tellus adipiscing vitae lacus. Lorem ipsum dolor sit amet consectetur.
                        Risus dolor eget purus dignissim cum pretium. Dignissim tellus leo in arcu felis.
                    </p>
                </div>
            </div>
            <div class="project__col project__col-4">
                <h2 class="h2">
                    Details
                </h2>
                <div class="project__text text--large">
                    <p>lorem ipsum</p>
                    <p>lorem ipsum</p>
                    <p>lorem ipsum</p>
                </div>
            </div>
        </div>
        <div class="project__gallery">
            <h2 class="h2">
                Project gallery
            </h2>
            <div class="project__slider-wrapper">
                <div class="project__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <img src="<?php echo get_template_directory_uri(); ?>/src/image/project-gallery-holder.jpg" alt="">
                        </div>
                        <div class="swiper-slide" >
                            <img src="<?php echo get_template_directory_uri(); ?>/src/image/project-gallery-holder.jpg" alt="">
                        </div>
                        <div class="swiper-slide" >
                            <img src="<?php echo get_template_directory_uri(); ?>/src/image/project-gallery-holder.jpg" alt="">
                        </div>
                        <div class="swiper-slide" >
                            <img src="<?php echo get_template_directory_uri(); ?>/src/image/project-gallery-holder.jpg" alt="">
                        </div>
                        <div class="swiper-slide" >
                            <img src="<?php echo get_template_directory_uri(); ?>/src/image/project-gallery-holder.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
</section>

<section class="project__contact">
    <div class="container">
        <div class="project__row">
            <div class="project__col project__col-4">
                <h2 class="h2">
                    Let’s discuss your idea!
                </h2>
                <div class="project__text text--default">
                    <p>Donec dapibus velit ac augue bibendum laoreet. Sed ac dolor non nulla lacinia bibendum. Morbi eu lectus ac dolor placerat tincidunt.</p>
                </div>
            </div>
            <div class="project__col project__col-8">
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