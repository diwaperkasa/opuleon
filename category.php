<?php

remove_action('genesis_loop', 'genesis_do_loop');

add_action('genesis_loop', 'content');

function content()
{
    $term = get_queried_object();
?>
    <div class="container">
        <div class="d-flex flex-row-reverse justify-content-center flex-wrap py-2 category-container mb-3">
            <?php $category = $term ?>
            <h1 class="m-0 p-0 playfair-display fst-italic"><a href="<?= get_term_link($category); ?>" class="text-decoration-none text-warning text-uppercase dm-sans fw-light tracking-wide"><?= $category->name ?></a></h1>
            <?php while ($category->parent): ?>
                <?php $category = get_term($category->parent, 'category') ?>
                <h2 class="m-0 p-0 fs-small"><a href="<?= get_term_link($category); ?>" class="text-decoration-none text-warning text-uppercase dm-sans fw-light tracking-wide"><?= $category->name ?></a></h2>
            <?php endwhile ?>
        </div>
        <?php if ( have_posts() ) : ?>
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-4">
                        <?php get_template_part('components/post-card'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p>No posts found matching your criteria.</p>
        <?php endif; ?>
    </div>
<?php }

genesis();
