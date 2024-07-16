

const swiper = new Swiper(".swiper", {
  // Optional parameters
   loop: true,
  observer: true,
  observeParents: true,
  reverseDirection: true,
  grabCursor: true,
  direction: "horizontal",

  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
  
   autoplay: {
          delay: 1500,
          disableOnInteraction: true,
        },

  // If we need pagination

  // Navigation arrows
  navigation: {
    nextEl: ".right-arrow-container",
    prevEl: ".left-arrow-container",
  },
  slidesPerView: 1,
  // spaceBetween: 10,
  // Responsive breakpoints
  breakpoints: {
    

    576: {
      slidesPerView: 2,
      // spaceBetween: 10,
    },
 
    768: {
      slidesPerView: 2,
      // spaceBetween: 10,
    },
    
    992: {
      slidesPerView: 3,
      // spaceBetween: 10,
    },
  },
});
