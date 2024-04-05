import "../scss/index.scss"
import "./sliders"
import "./custom"

document.addEventListener('DOMContentLoaded', function () {
    const rolesItems = document.querySelectorAll('.roles__item');
    rolesItems.forEach(item => {
        const title = item.querySelector('.roles__item__title');
        const content = item.querySelector('.roles__item__content');

        title.addEventListener('click', () => {
            console.log('s')
            item.classList.toggle('active');
            if (item.classList.contains('active')) {
                content.style.display = 'block';
                let maxHeight = content.scrollHeight + "px";
                content.style.maxHeight = maxHeight;
            } else {
                content.style.maxHeight = '0';
                content.addEventListener('transitionend', () => {
                    content.style.display = 'none';
                }, {
                    once: true
                });
            }
        });
    });


    setContainerHeight();
    function setContainerHeight() {
        if (window.innerWidth > 640) {
            const activeSlide = document.querySelector('.sliderVertical__content__item.swiper-slide-active');
            if (activeSlide) {
                const slideHeight = activeSlide.clientHeight;
                const container = document.querySelector('.sliderVertical__container');
                container.style.height = slideHeight + 'px';
            }
        }
    }
    function handleSlideItemClick() {
        if (window.innerWidth > 640) {
            setContainerHeight();
        }
    }
    function handleResizeAndLoad() {
        if (window.innerWidth > 640) {
            setContainerHeight();
        }
    }
    window.addEventListener('resize', handleResizeAndLoad);
    document.querySelectorAll('.sliderVertical__lists__item').forEach(item => {
        item.addEventListener('click', handleSlideItemClick);
    });





    function switchTab(tabIndex) {
        const tabItems = document.querySelectorAll('.tabs__item');
        const tabContents = document.querySelectorAll('.tabs__content');

        tabItems.forEach(item => {
            item.classList.remove('active');
        });

        tabContents.forEach(content => {
            content.classList.remove('active');
        });

        tabItems[tabIndex].classList.add('active');
        tabContents[tabIndex].classList.add('active');
    }


    const tabItems = document.querySelectorAll('.tabs__item');
    tabItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            switchTab(index);
        });
    });


    const indicator = document.querySelector('.tabs__indicator');
    const activeTab = document.querySelector('.tabs__item.active');
    if (indicator) {
        indicator.style.width = activeTab.offsetWidth + 'px';
        indicator.style.left = activeTab.offsetLeft + 'px';

        tabItems.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                tabItems.forEach((t) => t.classList.remove('active'));
                tab.classList.add('active');
                indicator.style.width = tab.offsetWidth + 'px';
                indicator.style.left = tab.offsetLeft + 'px';
            });
        });
    }

    const sliderItems = document.querySelectorAll('.step__slider__item');
    sliderItems.forEach((item, index) => {
        item.addEventListener('click', function () {
            sliderItems.forEach(item => item.classList.remove('active'));
            const clickedIndex = Array.from(sliderItems).indexOf(item);
            for (let i = 0; i < clickedIndex; i++) {
                sliderItems[i].classList.add('active');
            }
        });
    });

    //MENU HEADER
    const menuBtn = document.querySelector(".hamburger-menu");
    const header = document.querySelector(".header");
    const body = document.querySelector("body");
    const headerMenu = document.querySelector(".header__navigator");

    if (menuBtn) {
        menuBtn.addEventListener("click", function () {
            if (header) {
                header.classList.toggle("mobile");
            }
            if (headerMenu) {
                headerMenu.classList.toggle("active");
            }
            if (menuBtn) {
                menuBtn.classList.toggle("active");
            }
            if (body) {
                body.classList.toggle("overflow");
            }
        });
    }
    let prevScrollpos = window.pageYOffset;
    window.addEventListener('scroll', function () {
        const currentScrollPos = window.pageYOffset;
        if (currentScrollPos === 0) {
            header.classList.add("default");
            header.classList.remove("visible");
        } else if (prevScrollpos > currentScrollPos) {
            header.classList.add("visible");
            header.classList.remove("default");
        } else {
            header.classList.remove("visible");
            header.classList.remove("default");
        }
        prevScrollpos = currentScrollPos;
    });



    window.addEventListener('load', checkScreenWidth);
    window.addEventListener('resize', checkScreenWidth);

    function checkScreenWidth() {
        if (window.innerWidth >= 1024) {

            const menuItems = document.querySelectorAll('.menu-item-has-children');
            if (menuItems.length > 0) {
                menuItems.forEach(item => {
                    item.addEventListener('mouseenter', function() {
                        this.classList.add('active');
                    });

                    item.addEventListener('mouseleave', function() {

                        this.classList.remove('active');
                    });
                });
            }
        } else {
            const menuItems = document.querySelectorAll('.menu-item-has-children');
            menuItems.forEach(item => {
                item.removeEventListener('mouseenter', null);
                item.removeEventListener('mouseleave', null);
            });
            if (window.innerWidth < 1024) {

                const menuItems = document.querySelectorAll('.menu-item-has-children');

                menuItems.forEach(item => {
                    item.addEventListener('click', function(e) {
                        if (this.classList.contains('active')) {
                            this.classList.remove('active');
                        } else {
                            menuItems.forEach(item => {
                                item.classList.remove('active');
                            });
                            this.classList.add('active');
                        }
                        e.stopPropagation();
                    });

                    item.addEventListener('mouseover', function(event) {
                        event.preventDefault();
                        event.stopPropagation();
                        return false;
                    });
                });

                document.addEventListener('click', function(e) {
                    if (!e.target.classList.contains('menu-item-has-children')) {
                        menuItems.forEach(item => {
                            item.classList.remove('active');
                        });
                    }
                });
            }
        }
    }


    document.querySelector('.header__lang__cur').addEventListener('click', function(event) {
        if (this.classList.contains('active')) {
            this.classList.remove('active');
        } else {
            this.classList.add('active');
        }
        event.stopPropagation();
    });


    document.addEventListener('click', function(event) {
        const headerLangCur = document.querySelector('.header__lang__cur');
        if (event.target !== headerLangCur) {
            headerLangCur.classList.remove('active');
        }
    });



    function moveLangCurElement() {
        const headerLangCur = document.querySelector('.header__lang');
        const menuHeader = document.querySelector('.header__navigator .menu');
        if (headerLangCur && menuHeader) {
            if (!menuHeader.contains(headerLangCur)) {
                menuHeader.appendChild(headerLangCur);
            }
        } else {
            if (menuHeader.contains(headerLangCur)) {
                menuHeader.removeChild(headerLangCur);
            }
        }
    }

    function handleResizeAndLoad() {
        if (window.innerWidth < 1024) {
            moveLangCurElement();
        }
    }
    moveLangCurElement();
// Вызов функции при загрузке страницы
//     document.addEventListener('DOMContentLoaded', handleResizeAndLoad);

// Вызов функции при изменении размера окна (ресайзе)
    window.addEventListener('resize', handleResizeAndLoad);






// Проверяем разрешение экрана при загрузке страницы и при изменении размера окна.
//     window.addEventListener('load', checkScreenWidth);
//     window.addEventListener('resize', checkScreenWidth);
//
//     function checkScreenWidth() {
//         if (window.innerWidth < 1024) { // Если ширина экрана меньше 1024
//             // Находим все пункты меню с классом menu-item-has-children.
//             const menuItems = document.querySelectorAll('.menu-item-has-children');
//
//             // Добавляем обработчик события для каждого пункта меню.
//             menuItems.forEach(item => {
//                 item.addEventListener('click', function(e) {
//                     if (this.classList.contains('active')) {
//                         this.classList.remove('active');
//                     } else {
//                         menuItems.forEach(item => {
//                             item.classList.remove('active');
//                         });
//                         this.classList.add('active');
//                     }
//                     e.stopPropagation(); // Остановить всплытие события, чтобы предотвратить закрытие при нажатии на дочерние элементы.
//                 });
//
//                 // Отключаем стандартное поведение при hover на пунктах меню.
//                 item.addEventListener('mouseover', function(event) {
//                     event.preventDefault();
//                     event.stopPropagation();
//                     return false;
//                 });
//             });
//
//             // Добавляем обработчик события для закрытия активного класса при щелчке на любом элементе документа.
//             document.addEventListener('click', function(e) {
//                 if (!e.target.classList.contains('menu-item-has-children')) {
//                     menuItems.forEach(item => {
//                         item.classList.remove('active');
//                     });
//                 }
//             });
//         }
//     }






    const buttonsCat = document.querySelectorAll('.filter__items-cat .filter__item');
    if (buttonsCat) {
        buttonsCat.forEach(function (button) {
            button.addEventListener('click', function (e) {
                e.preventDefault();

                // Show loader
                const loader = document.querySelector('.preloader__wrapper');
                loader.style.display = 'flex';

                // Hide projects grid
                const projectsGrid = document.querySelector('.projects__grid');
                projectsGrid.style.display = 'none';
                const projectsGridFirst = document.querySelector('.projects__grid--first');
                projectsGridFirst.style.display = 'none';


                buttonsCat.forEach(function (btn) {
                    btn.classList.remove('active');
                });
                this.classList.add('active');
                const term = this.getAttribute('data-term');

                new Promise((resolve) => {
                    setTimeout(resolve, 400);
                }).then(() => {
                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', '/wp-admin/admin-ajax.php');

                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onload = function () {
                        if (xhr.status === 200) {
                            document.querySelector('.projects .container .projects__grid').innerHTML = xhr.responseText;
                            // Hide loader after content is loaded
                            loader.style.display = 'none';
                            projectsGrid.style.display = 'grid';

                        }
                    };
                    xhr.onerror = function () {
                        // Error handling code
                    };

                    xhr.send('action=sort_posts_by_taxonomy&term=' + term);
                    console.log(term, xhr);
                });
            });
        });
    }
    const buttonsYears = document.querySelectorAll('.filter__items-years .filter__item');
    if (buttonsYears) {
        buttonsYears.forEach(function (button) {
            button.addEventListener('click', function (e) {
                e.preventDefault();

                // Show loader
                const loader = document.querySelector('.preloader__wrapper');
                loader.style.display = 'flex';

                // Hide projects grid
                const newsGrid = document.querySelector('.news__grid');
                newsGrid.style.display = 'none';
                const newsRow = document.querySelector('.news__row');
                newsRow.style.display = 'none';


                buttonsYears.forEach(function (btn) {
                    btn.classList.remove('active');
                });
                this.classList.add('active');
                const term = this.getAttribute('data-term');

                new Promise((resolve) => {
                    setTimeout(resolve, 400);
                }).then(() => {
                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', '/wp-admin/admin-ajax.php');

                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onload = function () {
                        if (xhr.status === 200) {
                            document.querySelector('.news .container .news__grid').innerHTML = xhr.responseText;
                            // Hide loader after content is loaded
                            loader.style.display = 'none';
                            newsGrid.style.display = 'grid';

                        }
                    };
                    xhr.onerror = function () {
                        console.log('onerror')
                        // Error handling code
                    };

                    xhr.send('action=sort_posts_by_years&term=' + term);
                    console.log(term, xhr);
                });
            });
        });
    }


});
