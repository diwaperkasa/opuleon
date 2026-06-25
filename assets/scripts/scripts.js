import bootstrap from 'bootstrap';
import 'sharer.js';

const header = document.querySelector('.site-header');
const fixedHeader = document.querySelector('.site-header-fixed');

window.addEventListener("scroll", () => {
    const current = window.scrollY;
    const offsetHeight = header.offsetHeight;

    if (current > offsetHeight) {
        fixedHeader.classList.add('show');
    } else {
        fixedHeader.classList.remove('show');
    }
});