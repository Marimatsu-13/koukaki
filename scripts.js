
const swiper = new Swiper('.mySwiper', {
      effect: "coverflow",
      direction: "horizontal",
      grabCursor: true,
      loop: true,
      centeredSlides: true,
      mousewheel: true,
      slidesPerView: 1,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
    
    });

