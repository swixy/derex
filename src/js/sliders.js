import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.min.css';

document.addEventListener('DOMContentLoaded', function () {
    const heroSwiper = new Swiper('.hero__slider__container', {
        loop: true,
        slidesPerView: 1,
        speed: 2000,
        createElements: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },
        // pagination: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

    });

    function checkAndDisableSwiper() {
        let pageWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        if (pageWidth > 640) {
            const projectsSwiper = new Swiper('.projects__items', {
                slidesPerView: "auto",
                spaceBetween: 30,
                createElements: true,
                mousewheel: {
                    enabled: true, // Disable mouse wheel scrolling
                },

            });
        }
    }

    checkAndDisableSwiper();
    window.addEventListener('resize', function () {
        checkAndDisableSwiper();
    });
    const partnersSwiper = new Swiper('.partners__items', {
        slidesPerView: "auto",
        createElements: true,
        // spaceBetween: 100,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        // breakpoints: {
        //     320: {
        //         slidesPerView: 3,
        //         spaceBetween: 0,
        //     },
        //     1024: {
        //         slidesPerView: 3,
        //         spaceBetween: 0,
        //     }
        // }
    });
    const certificatesSwiper = new Swiper('.certificates__items', {
        slidesPerView: 4,
        createElements: true,
        spaceBetween: 70,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    const teamSwiper = new Swiper('.team__items', {
        slidesPerView: 5,
        createElements: true,
        spaceBetween: 50,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

});