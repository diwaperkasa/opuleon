<div class="card mb-0 mb-md-4 border-0">
    <div class="row">
        <div class="col-md-6">
            <a href="<?= get_the_permalink() ?>" class="text-decoration-none">
                <div class="hover-image position-relative">
                    <?= get_the_post_thumbnail(
                        get_the_ID(),
                        'large',
                        ['class' => 'img-fluid rounded']
                    ); ?>
                    <div class="img-overlay rounded position-absolute top-0 w-100 h-100">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
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
                    <h3 class="card-title playfair-display fw-bold"><?php the_title() ?>
                        <?php if ($italic_title = get_post_meta(get_the_ID(), '_italic_title', true)) : ?>
                            <span class="fw-normal fst-italic"><?= esc_html($italic_title) ?></span>
                        <?php endif; ?>
                    </h3>
                </a>
                <?php if ($subtitle = get_the_subtitle(get_the_ID(), '', '', false)) : ?>
                    <p class="dm-sans"><?= esc_html($subtitle) ?></p>
                <?php endif; ?>
                <div class="d-flex flex-wrap dot-between-item">
                    <?php $writers = get_the_terms(get_the_ID(), 'writer'); ?>
                    <?php if ($writers): ?>
                        <span class="fw-bold dm-sans fs-small">By
                            <span class="writers comma-between-item">
                                <?php foreach ($writers as $writer): ?>
                                    <a href="<?= get_term_link($writer); ?>" class="text-decoration-none text-dark text-secondary-hover"><?= $writer->name ?></a>
                                <?php endforeach ?>
                            </span>
                        </span>
                    <?php endif; ?>
                    <span class="dm-sans fs-small"><?= get_the_date('j F Y'); ?></span>
                    <span class="dm-sans fs-small"><?= get_reading_time(get_the_ID()) ?> min read</span>
                </div>
            </div>
        </div>
    </div>
</div>