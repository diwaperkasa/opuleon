<div class="card mb-3 border-0">
    <div class="card-body px-0">
        <?php $categories = get_the_terms(get_the_ID(), 'category'); ?>
        <?php if ($categories): ?>
            <div class="d-flex flex-row-reverse justify-content-end flex-wrap category-container">
                <?php $category = $categories[0] ?>
                <a href="<?= get_term_link($category); ?>" class="text-decoration-none fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small"><?= $category->name ?></a>
                <?php while ($category->parent): ?>
                    <?php $category = get_term($category->parent, 'category') ?>
                    <a href="<?= get_term_link($category); ?>" class="text-decoration-none fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small"><?= $category->name ?></a>
                <?php endwhile ?>
            </div>
        <?php endif; ?>
        <a href="<?= get_the_permalink() ?>" class="text-decoration-none text-dark text-warning-hover">
            <h4 class="card-title playfair-display fw-bold"><?php the_title() ?>
                <?php if ($italic_title = get_post_meta(get_the_ID(), '_italic_title', true)) : ?>
                    <span class="fw-normal fst-italic"><?= esc_html($italic_title) ?></span>
                <?php endif; ?>
            </h4>
        </a>
        <div class="d-flex flex-wrap dot-between-item">
            <span class="dm-sans fs-small"><?= get_reading_time(get_the_ID()) ?> min read</span>
        </div>
    </div>
</div>