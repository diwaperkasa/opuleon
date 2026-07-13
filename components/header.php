<div class="main-navbar">
    <nav class="navbar navbar-expand-lg align-items-center p-0 m-0 border-bottom">
        <div class="container">
            <ul class="d-flex list-unstyled navbar-brand m-0 p-0 align-items-center pe-4">
                <li class="nav-item">
                    <button class="fw-normal btn text-dark ps-0 pe-2 search-btn">
                        <svg class="m-0 p-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </button>
                </li>
                <li class="nav-item">
                    <button class="fw-normal btn text-dark px-2" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
                        <svg class="m-0 p-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                        </svg>
                    </button>
                </li>
            </ul>
            <a class="navbar-brand playfair-display fw-bold text-warning fs-1 tracking-wide m-0" href="/">Opuleon</a>
            <a class="text-decoration-none navbar-item fw-normal text-uppercase dm-sans text-dark m-0 tracking-wide fs-small" href="/subscribe">Subscribe</a>
        </div>
    </nav>
    <nav class="overflow-auto pb-2">
        <div class="container">
            <ul class="nav nav-pills flex-nowrap justify-content-center">
                <?php $menus = get_wp_menu_tree('primary') ?>
                <?php foreach ($menus as $menu): ?>
                    <li class="nav-item">
                        <a class="nav-link position-relative link-hover rounded-0 text-dark text-uppercase dm-sans mx-3 tracking-wide text-warning-hover" href="<?= $menu['url'] ?>"><?= $menu['title'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
</div>
<!-- offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
    <div class="offcanvas-header">
        <a href="/" class="text-decoration-none">
            <h5 class="offcanvas-title text-uppercase playfair-display text-warning fw-bold">Opuleon</h5>
        </a>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="py-5">
            <form action="/" method="get">
                <input type="search" class="form-control rounded-0 border-0 border-bottom playfair-display px-5" name="s" placeholder="Search" required />
            </form>
        </div>
        <nav class="nav w-100 py-5 align-items-center">
            <ul class="list-unstyled w-100 text-center mb-0">
                <?php $menus = get_wp_menu_tree('offcanvas') ?>
                <?php foreach ($menus as $menu): ?>
                    <li><a class="text-decoration-none playfair-display text-dark text-warning-hover fst-italic-hover display-5 lh-1 text-uppercase" href="<?= $menu['url'] ?>"><?= $menu['title'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</div>