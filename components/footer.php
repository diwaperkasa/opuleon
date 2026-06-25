<footer>
    <div class="container">
        <div class="border-top">
            <div class="d-flex justify-content-between align-items-center py-3">
                <a href="/" class="text-decoration-none">
                    <p class="mb-0 text-warning text-uppercase playfair-display fw-bold">Opuleon</p>
                </a>
                <ul class="list-unstyled d-flex gap-3 mb-0">
                    <?php $menus = get_wp_menu_tree('footer') ?>
                    <?php foreach ($menus as $menu): ?>
                        <li><a href="<?= $menu->url ?>" class="text-decoration-none text-dark text-uppercase dm-sans tracking-wide text-warning-hover"><?= $menu->title ?></a></li>
                    <?php endforeach; ?>
                    <li class="d-none d-lg-block"><span class="text-dark text-uppercase dm-sans tracking-wide">&copy; 2026 Opuleon</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>