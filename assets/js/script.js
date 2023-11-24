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

            // Next Slider By btn-start Button
            let btnStart = document.querySelector('.btn-start');
            btnStart.addEventListener('click', () => {
                swiper.slideNext();
            });

            // Next Slider By btn-register Button
            let btnRegister = document.querySelectorAll('.btn-register');
            btnRegister.forEach((e) => {
                e.addEventListener("click", () => {
                    let courseID = e.getAttribute("data-courseID");
                    setCourseID(courseID);
                    swiper.slideNext();
                });
            });

            // Next && Prev Slider By btn-prev && btn-next Button
            let btnNext = document.querySelectorAll('.btn-next');
            let btnPrev = document.querySelectorAll('.btn-prev');
            btnNext.forEach((e) => {
                e.addEventListener("click", () => {
                    swiper.slideNext();
                });
            });
            btnPrev.forEach((e) => {
                e.addEventListener("click", () => {
                    swiper.slidePrev();
                });
            }); 

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
    alert(`آدرس ${url} در حافظه کلیپ برد ذخیره شد.`);
}

// Set data-courseID in form-step-one Input
let setCourseID = (setCourseID) => {
    let setCourseIDInput = document.querySelector(".form-step-one .course-id");
    setCourseIDInput.value = setCourseID;
}













// window.onload = (event) => {};