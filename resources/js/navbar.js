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


// hamburger menu
let hamburger = document.querySelector('.nav-hamburger');
hamburger.addEventListener("click", function() {
    document.body.classList.toggle('menu_open');
});

//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}