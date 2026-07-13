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

const loadMoreBtn = document.querySelector('.load-more-btn');

if (loadMoreBtn) {
    loadMoreBtn.addEventListener('click', async (e) => {
        const button = e.currentTarget; // simpan referensi

        try {
            const limit = button.dataset.limit;
            let page = parseInt(button.dataset.page, 10);
            const term = button.dataset.term;
            const className = button.dataset.class;

            const args = {
                action: 'more_post',
                page,
                length: limit,
            };

            if (term) {
                args.term_id = term;
            }

            button.disabled = true;

            const res = await fetch(`/wp-admin/admin-ajax.php?${new URLSearchParams(args)}`)
                .then(async (response) => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }

                    return response.json();
                });

            if (!res.data.length) return;

            const articleContainer = document.querySelector('.post-archive-container');

            if (!articleContainer) return;

            res.data.forEach((row) => {
                articleContainer.insertAdjacentHTML(
                    'beforeend',
                    `<div class="${className}">${row}</div>`
                );
            });

            button.dataset.page = ++page;
        } catch (error) {} finally {
            button.disabled = false;
        }
    });
}