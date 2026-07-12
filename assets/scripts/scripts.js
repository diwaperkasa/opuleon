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
        try {
            const limit = e.currentTarget.dataset.limit;
            const page = e.currentTarget.dataset.page;
            const args = {
                action: 'more_post',
                page: page,
                length: limit,
            }
            const term = e.currentTarget.dataset.term;

            if (term) {
                args.term_id = term;
            }

            loadMoreBtn.disabled = true;

            const res = await fetch(`/wp-admin/admin-ajax.php?${new URLSearchParams(args)}`, {
                    headers: {
                        "Content-type": "application/json"
                    }
                }).then(async (response) => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }

                    return await response.json()
                });

            const articleContainer = document.querySelector('.post-archive-container')

            if (!articleContainer) return;

            const className = e.currentTarget.dataset.class;

            res.data.forEach((row) => {
                articleContainer.insertAdjacentHTML('beforeend', `<div class="${className}">${row}</div>`)
            });

            e.currentTarget.dataset.page = ++page;
        } catch (error) {} finally {
            loadMoreBtn.disabled = false;
        }
    });
}