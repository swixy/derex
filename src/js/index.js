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
    document.querySelectorAll('.sliderVertical__lists__item').forEach(item => {
        item.addEventListener('click', () => {
            setContainerHeight();
        });
    });

    function setContainerHeight() {
        const activeSlide = document.querySelector('.sliderVertical__content__item.swiper-slide-active');
        if (activeSlide) {
            const slideHeight = activeSlide.clientHeight;
            const container = document.querySelector('.sliderVertical__container');
            container.style.height = slideHeight + 'px';
        }
    }

    // document.querySelectorAll('.sliderVertical__lists__item').forEach(item => {
    //     item.addEventListener('click', () => {
    //         const activeSlide = document.querySelector('.sliderVertical__content__item.swiper-slide-active');
    //         if (activeSlide) {
    //             const slideHeight = activeSlide.clientHeight;
    //             console.log(slideHeight);
    //             const container = document.querySelector('.sliderVertical__container');
    //             container.style.height = slideHeight + 'px';
    //         }
    //     });
    // });


    // function switchTab(tabIndex) {
    //     const tabItems = document.querySelectorAll('.tabs__item');
    //     const tabContent = document.querySelectorAll('.tabs__content');
    //
    //     tabContent.forEach(content => {
    //         content.style.display = 'none';
    //     });
    //
    //     tabItems.forEach(item => {
    //         item.classList.remove('active');
    //     });
    //
    //     tabContent[tabIndex].style.display = 'block';
    //     tabContent[tabIndex].style.opacity = 0;
    //     setTimeout(() => {
    //         tabContent[tabIndex].style.opacity = 1;
    //     }, 100);
    //
    //     tabItems[tabIndex].classList.add('active');
    // }

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
            // Remove "active" class from all elements
            sliderItems.forEach(item => item.classList.remove('active'));

            // Find the index of the clicked element
            const clickedIndex = Array.from(sliderItems).indexOf(item);

            // Loop through the previous elements and add the "active" class
            for (let i = 0; i < clickedIndex; i++) {
                sliderItems[i].classList.add('active');
            }
        });
    });


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
