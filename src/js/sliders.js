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
        slidesPerView: 1,
        spaceBetween: 0,
        createElements: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            641: {
                spaceBetween: 50,
                slidesPerView: 3
            },
            1024: {
                spaceBetween: 70,
                slidesPerView: 4
            }
        }

    });


    const certificatesSwiper = new Swiper('.certificates__items', {
        slidesPerView: 1,
        spaceBetween: 20,
        createElements: true,
        navigation: {
            nextEl: ".certificates .swiper-button-next",
            prevEl: ".certificates .swiper-button-prev",
        },
        breakpoints: {
            641: {
                 spaceBetween: 25,
                slidesPerView: 3
            },
            1024: {
                spaceBetween: 50,
                slidesPerView: 4
            }
        }
    });
    const teamSwiper = new Swiper('.team__items', {
        slidesPerView: 2,
        createElements: true,
        spaceBetween: 20,
        navigation: {
            nextEl: ".team .swiper-button-next",
            prevEl: ".team .swiper-button-prev",
        },
        breakpoints: {
            641: {
                spaceBetween: 25,
                slidesPerView: 3
            },
            1024: {
                spaceBetween: 50,
                slidesPerView: 5
            }
        }

    });

    const sliderVerticalLists = new Swiper(".sliderVertical__lists", {
        spaceBetween: 10,
        createElements: true,
        slidesPerView: 3,
        direction: "vertical",
        breakpoints: {
            0: {
                direction: "horizontal",
            },
            641: {
                direction: "vertical",
            }
        }
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
        breakpoints: {
            0: {
                direction: "horizontal",
                autoHeight: true,
            },
            641: {
                direction: "vertical",
            }
        }
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
        breakpoints: {
            0: {
                direction: "horizontal",
                autoHeight: true,
            },
            641: {
                direction: "vertical",
            }
        }
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