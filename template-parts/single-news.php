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

<section class="project news-single">
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
        <div class="news-single__row">
            <div class="news-single__col">
                <div class="text--default news-single__content">
                    <p>
                        Sed at mauris justo. Nam vel libero lectus. Duis eget mauris augue. Curabitur vehicula nisi quis
                        lectus vestibulum, sit amet malesuada turpis euismod.
                    </p>
                    <p>
                        Sed at mauris justo. Nam vel libero lectus. Duis eget mauris augue. Curabitur vehicula nisi quis
                        lectus vestibulum, sit amet malesuada turpis euismod.
                    </p>

                    <h3>
                        Nam vel libero lectus. Duis eget mauris augue. 
                    </h3>

                    <p>
                        Sed at mauris justo. Nam vel libero lectus. Duis eget mauris augue. Curabitur vehicula nisi quis
                        lectus vestibulum, sit amet malesuada turpis euismod.
                    </p>
                    <p>
                        Sed at mauris justo. Nam vel libero lectus. Duis eget mauris augue. Curabitur vehicula nisi quis
                        lectus vestibulum, sit amet malesuada turpis euismod.
                    </p>
                    <p>
                        Sed at mauris justo. Nam vel libero lectus. Duis eget mauris augue. Curabitur vehicula nisi quis
                        lectus vestibulum, sit amet malesuada turpis euismod.
                    </p>
                    <img class="news-single__poster"
                        src="<?php echo get_template_directory_uri(); ?>/src/image/single-project-holder.jpg" alt="">

                    <p>
                        Sed at mauris justo. Nam vel libero lectus. Duis eget mauris augue. Curabitur vehicula nisi quis
                        lectus vestibulum, sit amet malesuada turpis euismod.
                    </p>
                </div>
            </div>
        </div>
        <div class="news-single__related">
            <div class="news-single__head">
                <h2 class="news-single__title h2">
                    Related Articles
                </h2>
                <a class="news-single__link" href="/projects">
                    See More
                </a>
            </div>
            <div class="news__grid">
                <?php get_template_part('template-parts/common/card'); ?>
                <?php get_template_part('template-parts/common/card'); ?>
                <?php get_template_part('template-parts/common/card'); ?>
            </div>
        </div>
    </div>
</section>