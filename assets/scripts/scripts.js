import bootstrap from 'bootstrap';
import 'sharer.js';
import Flickity from 'flickity';

const header = document.querySelector('.site-header');
const subscribePopup = document.querySelector('.subscribe-popup-fixed');

if (subscribePopup) {
    window.addEventListener("scroll", () => {
        const current = window.scrollY;
        const offsetHeight = header.offsetHeight;
    
        if (current > offsetHeight) {
            if (!subscribePopup.classList.contains('close')) {
                subscribePopup.classList.add('show');
            }
        } else {
            subscribePopup.classList.remove('show');
        }
    });

    const subscribeCloseBtn = document.querySelectorAll('.subscribe-close');
    
    subscribeCloseBtn.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            subscribePopup.classList.remove('show');
            subscribePopup.classList.add('close');
        })
    });
}

document.documentElement.style.setProperty(
    '--navbar-height',
    `${header.offsetHeight - 1}px`
);

window.addEventListener('resize', () => {
    document.documentElement.style.setProperty(
        '--navbar-height',
        `${header.offsetHeight - 1}px`
    );
});

const galleries = document.querySelectorAll('.gallery');

galleries.forEach((gallery) => {
    const flkty = new Flickity(gallery, {
        cellAlign: 'center',
        freeScroll: false,
        wrapAround: true,
        autoPlay: true,
        pageDots: true
    });
});

const loadMoreBtn = document.querySelector('.load-more-btn');

if (loadMoreBtn) {
    loadMoreBtn.addEventListener('click', async (e) => {
        const button = e.currentTarget; // simpan referensi
        const loader = document.createElement('div');
        loader.classList.add('loader', 'my-2');

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

            button.classList.add('d-none');
            button.after(loader);

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
            button.classList.remove('d-none');
            loader.remove();
        }
    });
}

const searchBtn = document.querySelectorAll('.search-btn');

searchBtn.forEach((btn) => {
    btn.addEventListener('click', () => {
        const searchContainer = document.querySelector('.search-container');
        searchContainer.classList.toggle('show');

        const primaryBtn = document.querySelectorAll('.top-menu .nav-item:not(.cancel-box)')

        primaryBtn.forEach((btn) => {
            btn.classList.toggle('d-none');
        })

        const closeBtn = document.querySelectorAll('.top-menu .cancel-box')

        closeBtn.forEach((btn) => {
            btn.classList.toggle('d-none');
        })
    })
})
