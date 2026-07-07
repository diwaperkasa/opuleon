import bootstrap from 'bootstrap';
import 'sharer.js';
import Flickity from 'flickity';

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

    const galleries = document.querySelectorAll('.gallery');

    galleries.forEach((gallery) => {
        const flkty = new Flickity(gallery, {
            cellAlign: 'center',
            freeScroll: false,
            wrapAround: true,
            autoPlay: true,
            pageDots: false
        });
    });
});