import Swiper from 'swiper';

import 'swiper/swiper-bundle.css';

import SwiperCore, {Scrollbar } from 'swiper/core';

SwiperCore.use([Scrollbar]);

const swiper = new Swiper('.weapon-swiper', {
    slidesPerView: 4,
    spaceBetween: 30,
    scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            scrollbar: {
                dragSize: 'auto'
            }
        },
        700: {
            slidesPerView: 2,
        },
        1000: {
            slidesPerView: 3,
            scrollbar: {
                dragSize: 245
            }
        },
        1600: {
            slidesPerView:4,
            scrollbar: {
                dragSize: 245
            }
        }

    }
});
