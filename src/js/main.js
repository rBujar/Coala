import AOS from "aos";
import "aos/dist/aos.css";
import Swiper from "https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.mjs";

const hamburger = document.querySelector(".header__hamburger");
const headerMenu = document.querySelector(".header__nav");
const menuItem = document.querySelectorAll(".header__item");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  headerMenu.classList.toggle("active");
  document.body.classList.toggle("no-scroll");
});

menuItem.forEach((item) => {
  item.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    headerMenu.classList.toggle("active");
    if (window.innerWidth < 1200) {
      document.body.classList.toggle("no-scroll");
    }
  });
});

AOS.init({
  duration: 700,
  offset: 50,
  once: true,
});

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

const scrollButton = document.getElementById('navButton')

window.onscroll = function() {scrollFunction()}

function scrollFunction(){
    if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500){
        scrollButton.style.display = 'flex';
    }else{
        scrollButton.style.display = 'none';
    }
}

scrollButton.addEventListener('click', () => {
    document.documentElement.scrollTo({ top: 0, behavior: 'smooth'})
})
