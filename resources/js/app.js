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
        myNavbar.classList.add('bg-white');
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
        myNavbar.classList.remove('bg-white')
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