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

const container = document.querySelector(".header.container");

function getLeftSide() {
  let marginLeft = container.getBoundingClientRect().left;
  if (window.innerWidth < 1200) {
    headerMenu.style.paddingLeft = `${marginLeft}px`;
  }
}

getLeftSide();

window.addEventListener("resize", getLeftSide);

const scrollButton = document.querySelector('.scrollUp')

window.onscroll = function() {scrollFunction()}