<?php

remove_action('genesis_loop', 'genesis_do_loop');

add_action('genesis_loop', 'content');

function content()
{
    global $post;

    $query = new WP_Query([
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 10,
    ]);

    $posts = $query->posts;
    $featured_post   = array_slice($posts, 0, 1);
    $secondary_posts = array_slice($posts, 1, 3);
    $remaining_posts = array_slice($posts, 4, 6);
?>
    <div class="container">
        <section id="hero-section" class="mb-3">
            <div class="d-flex gap-3 align-items-center mb-1">
                <?php $menus = get_wp_menu_tree('secondary') ?>
                <?php foreach ($menus as $menu): ?>
                    <a href="<?= $menu['url'] ?>" class="fs-6 text-decoration-none text-uppercase text-secondary text-uppercase dm-sans text-warning me-3 tracking-wide border-warning"><?= $menu['title'] ?></a>
                <?php endforeach ?>
            </div>
            <div class="border-bottom">
                <?php foreach ($featured_post as $featured): $post = $featured; setup_postdata($post); ?>
                    <div class="hero-image">
                        <div class="hover-image">
                            <a href="<?= get_the_permalink() ?>" class="text-decoration-none">
                                <?= get_the_post_thumbnail(
                                    get_the_ID(),
                                    'full',
                                    ['class' => 'img-fluid mb-2']
                                ); ?>
                            </a>
                        </div>
                        <?php $imageCaption = carbon_get_post_meta(get_the_ID(), 'featured_image_caption'); ?>
                        <?php if ($imageCaption): ?>
                            <p class="dm-sans fs-small">
                                <span class="opacity-75"><?= esc_html($imageCaption) ?></span>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="hero-background mb-3">
                        <?php $categories = get_the_terms(get_the_ID(), 'category'); ?>
                        <?php if ($categories): ?>
                            <div class="d-flex flex-row-reverse justify-content-end flex-wrap py-2 category-container">
                                <?php $category = $categories[0] ?>
                                <a href="<?= get_term_link($category); ?>" class="text-decoration-none fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small"><?= $category->name ?></a>
                                <?php while ($category->parent): ?>
                                    <?php $category = get_term($category->parent, 'category') ?>
                                    <a href="<?= get_term_link($category); ?>" class="text-decoration-none fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small"><?= $category->name ?></a>
                                <?php endwhile ?>
                            </div>
                        <?php endif; ?>
                        <a href="<?= get_the_permalink() ?>" class="text-decoration-none">
                            <h1 class="playfair-display fw-bold text-dark text-warning-hover"><?php the_title() ?>
                                <?php if ($italic_title = get_post_meta(get_the_ID(), '_italic_title', true)) : ?>
                                    <span class="fw-normal fst-italic"><?= esc_html($italic_title) ?></span>
                                <?php endif; ?>
                            </h1>
                        </a>
                        <?php if ($subtitle = get_the_subtitle(get_the_ID(), '', '', false)) : ?>
                            <p class="playfair-display fst-italic"><?= esc_html($subtitle) ?></p>
                        <?php endif; ?>
                        <div class="d-flex flex-wrap dot-between-item">
                            <?php $writers = get_the_terms(get_the_ID(), 'writer'); ?>
                            <?php if ($writers): ?>
                                <span class="fw-bold dm-sans">By
                                    <span class="writers comma-between-item">
                                        <?php foreach ($writers as $writer): ?>
                                            <a href="<?= get_term_link($writer); ?>" class="text-decoration-none text-dark text-secondary-hover"><?= $writer->name ?></a>
                                        <?php endforeach ?>
                                    </span>
                                </span>
                            <?php endif; ?>
                            <span class="dm-sans"><?= get_the_date('j F Y'); ?></span>
                            <span class="dm-sans"><?= get_reading_time(get_the_ID()) ?> min read</span>
                        </div>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </section>
        <section id="latest-articles" class="mb-3">
            <h2 class="h6 text-uppercase dm-sans mb-4 h4 fw-normal tracking-wide">Latest Stories</h2>
            <div class="border-bottom">
                <div class="row">
                    <?php foreach ($secondary_posts as $secondary): $post = $secondary; setup_postdata($post); ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-3 border-0">
                                <div class="hover-image">
                                    <a href="<?= get_the_permalink() ?>" class="text-decoration-none">
                                        <?= get_the_post_thumbnail(
                                            get_the_ID(),
                                            'large',
                                            ['class' => 'img-fluid rounded']
                                        ); ?>
                                    </a>
                                </div>
                                <div class="card-body px-0">
                                    <?php $categories = get_the_terms(get_the_ID(), 'category'); ?>
                                    <?php if ($categories): ?>
                                        <div class="d-flex flex-row-reverse justify-content-end flex-wrap py-2 category-container">
                                            <?php $category = $categories[0] ?>
                                            <a href="<?= get_term_link($category); ?>" class="text-decoration-none fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small"><?= $category->name ?></a>
                                            <?php while ($category->parent): ?>
                                                <?php $category = get_term($category->parent, 'category') ?>
                                                <a href="<?= get_term_link($category); ?>" class="text-decoration-none fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small"><?= $category->name ?></a>
                                            <?php endwhile ?>
                                        </div>
                                    <?php endif; ?>
                                    <a href="<?= get_the_permalink() ?>" class="text-decoration-none text-dark text-warning-hover">
                                        <h3 class="card-title playfair-display fw-bold"><?php the_title() ?>
                                            <?php if ($italic_title = get_post_meta(get_the_ID(), '_italic_title', true)) : ?>
                                                <span class="fw-normal fst-italic"><?= esc_html($italic_title) ?></span>
                                            <?php endif; ?>
                                        </h3>
                                    </a>
                                    <?php if ($subtitle = get_the_subtitle(get_the_ID(), '', '', false)) : ?>
                                        <p class="dm-sans"><?= esc_html($subtitle) ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
        <section id="archives" class="mb-3">
            <div class="row">
                <div class="col">
                    <div class="border-bottom mb-3">
                        <h2 class="h6 text-uppercase dm-sans h4 fw-normal tracking-wide">More from The Archives</h2>
                    </div>
                    <div class="row">
                        <?php foreach ($remaining_posts as $remaining): $post = $remaining; setup_postdata($post); ?>
                            <div class="col-6">
                                <div class="card mb-3 border-0">
                                    <div class="hover-image">
                                        <a href="<?= get_the_permalink() ?>" class="text-decoration-none">
                                            <?= get_the_post_thumbnail(
                                                get_the_ID(),
                                                'large',
                                                ['class' => 'img-fluid rounded']
                                            ); ?>
                                        </a>
                                    </div>
                                    <div class="card-body px-0">
                                        <?php $categories = get_the_terms(get_the_ID(), 'category'); ?>
                                        <?php if ($categories): ?>
                                            <div class="d-flex flex-row-reverse justify-content-end flex-wrap py-2 category-container">
                                                <?php $category = $categories[0] ?>
                                                <a href="<?= get_term_link($category); ?>" class="text-decoration-none fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small"><?= $category->name ?></a>
                                                <?php while ($category->parent): ?>
                                                    <?php $category = get_term($category->parent, 'category') ?>
                                                    <a href="<?= get_term_link($category); ?>" class="text-decoration-none fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small"><?= $category->name ?></a>
                                                <?php endwhile ?>
                                            </div>
                                        <?php endif; ?>
                                        <a href="<?= get_the_permalink() ?>" class="text-decoration-none text-dark text-warning-hover">
                                            <h3 class="card-title playfair-display fw-bold h5"><?php the_title() ?>
                                                <?php if ($italic_title = get_post_meta(get_the_ID(), '_italic_title', true)) : ?>
                                                    <span class="fw-normal fst-italic"><?= esc_html($italic_title) ?></span>
                                                <?php endif; ?>
                                            </h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="h-100">
                        <div class="rounded-3 bg-light p-3 sticky-top top-5">
                            <p class="text-warning dm-sans text-uppercase tracking-wide">The Opuleon Letter</p>
                            <p class="h4 playfair-display">One considered read, once a week.</p>
                            <p class="dm-sans">No aggregation. No list for volume. Editorial Picks for reader who pursue the finest things with curiosity.</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="rounded form-control dm-sans" id="email" placeholder="Your email address" required />
                                </div>
                                <button type="submit" class="w-100 border-black rounded btn btn-light text-uppercase dm-sans text-warning-hover border-warning-hover">Subscribe
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
}

genesis();
