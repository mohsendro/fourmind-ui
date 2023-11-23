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
            let currentSlide = document.querySelectorAll(".main-slide")[0].getAttribute('data-bullet');
            let bulletContent = document.querySelector('.swiper-pagination-bullet-active');
            if( swiper.activeIndex == 0 ) {
                bulletContent.setAttribute('data-before', currentSlide);
            }

            // Next Slider By btn-register Button
            let btnregister = document.querySelector('.btn-start');
            btnregister.addEventListener('click', () => {
                swiper.slideNext();
            });

            // Next Slider By btn-start Button

        },
        slideChangeTransitionEnd: (swiper) => {
            // Set Before Content On Change Slider
            let currentSlide = document.querySelectorAll(".main-slide")[swiper.activeIndex].getAttribute('data-bullet');
            let bulletContent = document.querySelector('.swiper-pagination-bullet-active');
            bulletContent.setAttribute('data-before', currentSlide);
        },
    },
});

var card = new Swiper(".cardSwiper", {
    slidesPerView: 2,
    spaceBetween: 15,
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        576: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        992: {
            slidesPerView: 2.5,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 2.5,
            spaceBetween: 30,
        },
        1400: {
            slidesPerView: 2.5,
            spaceBetween: 30,
        },
    }
});

// Button Introduce Method
let introduceCallback = (url) => {
    alert("آدرس در حافظه کلیپ برد ذخیره شد");
}

// window.onload = (event) => {};