let backgroundVideo = document.querySelector("#background-video");
let logo = document.querySelector(".logo");
let banner = document.querySelector(".banner");

banner.addEventListener("wheel", function parallax(){
  backgroundVideo.style.top = - window.scrollY + "px";
}
)

const swiper = new Swiper('.swiper', {
      effect: "coverflow",
      direction: "horizontal",
      grabCursor: true,
      loop: true,
      centeredSlides: true,
      mousewheel: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
    });

let bigCloud = document.querySelector(".big_cloud");
let smallCloud = document.querySelector(".little_cloud");
let place = document.querySelector("#place");

place.addEventListener('wheel', function scroll(){
  bigCloud.style.transform = "translateX(-300px)";
  smallCloud.style.transform = "translateX(-300px)";

});

let burger = document.querySelector(".burger");
let menu = document.querySelector(".menu-navigation");

burger.addEventListener("click", ()=>{
burger.classList.toggle("active");
menu.classList.toggle("active");
});

