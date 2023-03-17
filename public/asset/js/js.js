
var swiper = new Swiper(".swiperHomeProd", {
    slidesPerView: 1,
    centeredSlides: false,
    autoplay: {
        delay: 6500,
        disableOnInteraction: false,
    },
    spaceBetween: 10,
    loop: screen.width < 1021,

    breakpoints: {
        // when window width is >= 320px
        350: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is >= 480px
        500: {
            slidesPerView: 2.5,
            spaceBetween: 25
        },
        // when window width is >= 640px
        760: {
            slidesPerView: 4,
            spaceBetween: 25
        },
        1020: {
            slidesPerView: 5,
            spaceBetween: 30
        },
        1200: {
            slidesPerView: 6,
            spaceBetween: 35
        },
        1336: {
            slidesPerView: 6,
            spaceBetween: 40
        },
        1440:{
            slidesPerView: 6,
            spaceBetween: 50
        }
    }
});

$(".btn-arrow").click(function () {
    const swiper = document.querySelector(".swiperHomeProd").swiper;
    let do_this = $(this).data("do");
    if (do_this == "prev") {
        swiper.slidePrev();
    } else {
        swiper.slideNext();
    }
});
