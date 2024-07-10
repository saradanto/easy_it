import 'bootstrap';
import './bootstrap';

let myNavbar = document.querySelector('#myNavbar');
// let logoCustom = document.querySelector('#logo-custom');
// let links = document.querySelectorAll('.nav-link');
// let hamburger = document.querySelector('#hamburger');

// effetto onscroll, cambia la navbar e i vari link
window.addEventListener('scroll', () => {
  let scrolled = window.scrollY;
  if (scrolled > 0) {
    myNavbar.classList.add('bg-light');
    myNavbar.classList.remove('bg-transparent');
    // logoCustom.classList.add('logo-custom');
    
    // links.forEach(link => {
      //     link.style.color = 'var(--white)';
    //     hamburger.style.color = 'var(--white)';
    //     link.addEventListener('mouseenter', () => {
      //         link.style.color = 'var(--gold)';
    //     })
    //     link.addEventListener('mouseleave', () => {
      //         link.style.color = 'var(--white)';
    //     })
    // })
    
  } else {
    myNavbar.classList.remove('bg-light')
    myNavbar.classList.add('bg-transparent')
    // logoCustom.classList.remove('logo-custom');
    // hamburger.style.color = 'var(--black)';
    // links.forEach(link => {
      //     link.style.color = 'var(--black)';
    //     link.addEventListener('mouseenter', () => {
      //         link.style.color = 'var(--gold)';
    //     })
    //     link.addEventListener('mouseleave', () => {
      //         link.style.color = 'var(--black)';
    //     })
    // })
  }
});



window.addEventListener("DOMContentLoaded", function () {
  const togglePassword = document.querySelector("#togglePassword");
  const passwordField = document.querySelector("#passwordField");
  
  togglePassword.addEventListener("click", function () {
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
    togglePassword.classList.toggle("bi-eye");
  });
});

/* SWIPER */
var swiper = new Swiper(".mySwiper", {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
  loop: true,
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});

//* MY-SWIPER 

const swiper = new Swiper('.swiper', {
  // Optional parameters
  
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
  
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  
  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
