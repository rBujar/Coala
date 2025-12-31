import "./main.js"
import Swiper from "https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.mjs";

const swiper = new Swiper(".swiper-plans", {
    spaceBetween: 32,
    initialSlide: 0,
    centeredSlides: true,
    autoHeight: true,
    breakpoints: {
      0: {
        loop: true,
        slidesPerView: 1,
      },
      768: {
        initialSlide: 1,
        slidesPerView: 1.5,
      },
      992: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        centeredSlides: false,
      },
    },
  });