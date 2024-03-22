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


});
