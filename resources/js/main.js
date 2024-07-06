// Initialization for ES Users
// import { Dropdown, Collapse, initMDB } from "./main.js";

// initMDB({ Dropdown, Collapse });

const navbar = document.querySelector('.navbar');
console.log(navbar)

// window.addEventListener('scroll', ()=>{
//     if (scrollY>0) {
//         navbar.style.innerHtml = "top:" + 2 + "%";
//     }
// })
// window.onscroll = function() {scrollFunction()};
const mediaQuery = window.matchMedia('(min-width: 768px)')
if (mediaQuery.matches) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 0) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled')
        }
    })
}
document.addEventListener('DOMContentLoaded', function () {
    const scrollableDiv = document.getElementById('scrollable-div');
    let isDown = false;
    let startX;
    let scrollLeft;

    scrollableDiv.addEventListener('mousedown', (e) => {
        isDown = true;
        scrollableDiv.classList.add('active');
        startX = e.pageX - scrollableDiv.offsetLeft;
        scrollLeft = scrollableDiv.scrollLeft;
    });

    scrollableDiv.addEventListener('mouseleave', () => {
        isDown = false;
        scrollableDiv.classList.remove('active');
    });

    scrollableDiv.addEventListener('mouseup', () => {
        isDown = false;
        scrollableDiv.classList.remove('active');
    });

    scrollableDiv.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - scrollableDiv.offsetLeft;
        const walk = (x - startX) * 3; // La velocità di scorrimento
        scrollableDiv.scrollLeft = scrollLeft - walk;
    });
});


