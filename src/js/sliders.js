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
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

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
        slidesPerView: "auto",
        createElements: true,
        spaceBetween: 50,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });

    const sliderVerticalLists = new Swiper(".sliderVertical__lists", {
        spaceBetween: 10,
        createElements: true,
        slidesPerView: 3,
        direction: "vertical",
    });
    const sliderVerticalContent= new Swiper(".sliderVertical__content", {
        spaceBetween: 10,
        createElements: true,
        direction: "vertical",
        // autoHeight: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        thumbs: {
            swiper: sliderVerticalLists,
        },
    });

    const sliderStepLists = new Swiper(".slider__step__items", {
        spaceBetween: 10,
        createElements: true,
        slidesPerView: 5,
        direction: "vertical",
    });
    const sliderStepContent= new Swiper(".slider__step__contents", {
        spaceBetween: 10,
        createElements: true,
        direction: "vertical",
        thumbs: {
            swiper: sliderStepLists,
        },
    });

    const sliderSingleProject = new Swiper(".project__slider", {
        slidesPerView: 1,
        createElements: true,
        centeredSlides: true,
        loop: true,
        spaceBetween: 24,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: '.swiper-pagination',
        },
        breakpoints: {
            641: {
              slidesPerView: 2
            },
            1024: {
              slidesPerView: 3
            }
          }
    });
});