/* SWIPER */
import {Swiper} from 'swiper';


var swiper = new Swiper(".mySwiper", {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});
// var swiper = new Swiper(".mySwiper", {
//     loop: false,
//     spaceBetween: 10,
//     slidesPerView: 4,
//     freeMode: true,
//     watchSlidesProgress: true,
//     navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev",
//     },
//   });
  // var swiper2 = new Swiper(".mySwiper2", {
  //   loop: true,
  //   spaceBetween: 10,
  //   navigation: {
  //     nextEl: ".swiper-button-next",
  //     prevEl: ".swiper-button-prev",
  //   },
  //   thumbs: {
  //     swiper: swiper,
  //   },
  // });
  
//   //* MY-SWIPER 
  
//   const swiper = new Swiper('.swiper', {
//     // Optional parameters
    
//     // If we need pagination
//     pagination: {
//       el: '.swiper-pagination',
//     },
    
//     // Navigation arrows
//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     },
    
//     // And if we need scrollbar
//     scrollbar: {
//       el: '.swiper-scrollbar',
//     },
//   });
  