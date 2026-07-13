<div class="main-navbar">
    <nav class="navbar navbar-expand-lg align-items-center p-0 m-0 border-bottom">
        <div class="container">
            <ul class="d-flex list-unstyled navbar-brand m-0 p-0 align-items-center pe-md-4 top-menu">
                <li class="nav-item">
                    <button class="btn btn-light search-btn ms-n2 nav-btn nav-btn p-0 m-0 rounded-circle" style="--bs-btn-bg: #FFF; --bs-btn-border-color: #FFF; --bs-btn-hover-bg: rgb(245,245, 245); --bs-btn-hover-border-color: rgb(245,245, 245);">
                        <svg class="m-0 p-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-light nav-btn p-0 m-0 rounded-circle" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu" style="--bs-btn-bg: #FFF; --bs-btn-border-color: #FFF; --bs-btn-hover-bg: rgb(245,245, 245); --bs-btn-hover-border-color: rgb(245,245, 245);">
                        <svg class="m-0 p-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                        </svg>
                    </button>
                </li>
                <li class="nav-item cancel-box d-none">
                    <button class="btn btn-light search-btn ms-n2 cancel-btn p-0 px-3 m-0 rounded-pill" style="--bs-btn-bg: #FFF; --bs-btn-border-color: #FFF; --bs-btn-hover-bg: rgb(245,245, 245); --bs-btn-hover-border-color: rgb(245,245, 245);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                        </svg>
                        <span class="fs-small text-uppercase">Cancel</span>
                    </button>
                </li>
            </ul>
            <a class="navbar-brand playfair-display fw-bold text-warning fs-1 tracking-wide m-0" href="/">Opuleon</a>
            <a class="text-decoration-none navbar-item fw-normal text-uppercase dm-sans text-dark m-0 tracking-wide fs-small" href="/subscribe">Subscribe</a>
        </div>
    </nav>
    <div class="container">
        <nav class="overflow-auto pb-2">
            <ul class="nav justify-content-between justify-content-md-center align-items-center flex-nowrap">
                <?php $menus = get_wp_menu_tree('primary') ?>
                <?php foreach ($menus as $menu): ?>
                    <li class="nav-item">
                        <a class="nav-link position-relative link-hover rounded-0 text-dark text-uppercase dm-sans mx-3 tracking-wide text-warning-hover" href="<?= $menu['url'] ?>"><?= $menu['title'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
    <div class="position-relative">
        <div class="search-container bg-white position-absolute w-100 bg-white border-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="my-3 my-md-5">
                            <form action="/" method="get">
                                <div class="input-group">
                                    <span class="input-group-text rounded-0">
                                        <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" class="DocSearch-Search-Icon"><path d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </span>
                                    <input placeholder="Search" type="search" name="s" type="text" class="form-control rounded-0" required />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- offcanvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
    <div class="offcanvas-header">
        <a href="/" class="text-decoration-none">
            <h5 class="offcanvas-title text-uppercase playfair-display text-warning fw-bold">Opuleon</h5>
        </a>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body h-100">
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