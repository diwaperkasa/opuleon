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
            <h1 class="m-0 p-0 playfair-display fst-italic"><a href="<?= get_term_link($category); ?>" class="text-decoration-none text-warning text-uppercase fw-light tracking-wide"><?= $category->name ?></a></h1>
        </div>
        <?php if ( have_posts() ) : ?>
            <div class="row post-archive-container">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-4">
                        <?php get_template_part('components/post-card'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="text-center mb-3">
                <button class="btn btn-outline-dark bg-light border-warning-hover load-more-btn px-5 text-uppercase text-warning-hover" data-limit="10" data-page="2">
                    Load More
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-repeat" viewBox="0 0 20 20">
                        <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192m3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z"></path>
                    </svg>
                </button>
            </div>
        <?php else : ?>
            <p>No posts found matching your criteria.</p>
        <?php endif; ?>
    </div>
<?php }

genesis();
