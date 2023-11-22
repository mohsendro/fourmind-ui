// Initialize Swiper
var swiper = new Swiper(".fourmindSwiper", {
    direction: "vertical",
    // allowTouchMove: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: false,
    },
    hashNavigation: {
        watchState: true,
    },
    on: {
        init: (swiper) => {
            // Set Before Content On First Slider
            let currentSlide = document.getElementsByClassName('swiper-slide')[0].getAttribute('data-bullet');
            let bulletContent = document.querySelector('.swiper-pagination-bullet-active');
            if( swiper.activeIndex == 0 ) {
                bulletContent.setAttribute('data-before', currentSlide);
            }

            // Next Slider By btn-start Button
            let btnStart = document.querySelector('.btn-start');
            btnStart.addEventListener('click', () => {
                swiper.slideNext();
            });

        },
        slideChangeTransitionEnd: (swiper) => {
            // Set Before Content On Change Slider
            let currentSlide = document.getElementsByClassName('swiper-slide')[swiper.activeIndex].getAttribute('data-bullet');
            let bulletContent = document.querySelector('.swiper-pagination-bullet-active');
            bulletContent.setAttribute('data-before', currentSlide);
        },
    },
});


window.onload = (event) => {
    
};