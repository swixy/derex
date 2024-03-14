<footer class="footer">
    <div class="container">
        <div class="footer__container">
            <div class="footer__info">
                <img src="<?php echo get_template_directory_uri() ?>/src/image/logoLightFooter.webp" alt=""
                     class="footer__info__logo">
                <p class="footer__info__text">
                    Established in 2010, DEREX holds a distinctive position within the energy sector from building and
                    infrastructure engineering to solar solutions. With offices in Latvia and Germany, DEREX undertakes
                    both regional and international projects.
                </p>
                <div class="footer__info__social">
                    <a class="social__mail" href="/"></a>
                    <a class="social__linkedin" href="/"></a>
                    <a class="social__inst" href="/"></a>
                </div>
            </div>
            <div class="footer__navigator">
                <h4 class="footer__navigator__title">
                    Pages
                </h4>
                <nav class="footer__navigator__menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-footer',
                        'container' => false
                    ));
                    ?>
                </nav>
            </div>
            <div class="footer__location">
                <h4 class="footer__location__title">
                    Offices
                </h4>
                <div>
                    <div class="footer__location__text">
                        st. 21F Vishku St., Daugavpils, Latvia LV-5410<br>
                        <a href="">+371 220 70690 </a><br>
                        <a href="">derex@derex.lv</a>
                        <br>  <br>
                    </div>
                    <div class="footer__location__text">
                        Justus-Liebig-Straße 5, 36100 Petersberg, Germany<br>
                        <a href="">+4932212243888</a><br>
                        <a href="">derex@derexgmbh.de</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer__bottom">
            <p class="footer__bottom__copyright">
                © 2022 Derex.
            </p>
            <p class="footer__bottom__reserved">
                All rights reserved.
            </p>
            <a href="/" class="footer__bottom__policy">
                Privacy Policy
            </a>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>