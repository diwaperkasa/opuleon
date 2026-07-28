<?php

remove_action('genesis_loop', 'genesis_do_loop');

add_action('genesis_loop', 'content');

function content()
{
    $term = get_queried_object();
    global $wp_query;
?>
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="row post-archive-container mt-4">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php if ($wp_query->current_post  == 0): ?>
                        <div class="col-lg-12">
                            <?php get_template_part('components/post-card', 'landscape'); ?>
                        </div>
                    <?php else: ?>
                        <div class="col-lg-4">
                            <?php get_template_part('components/post-card'); ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <button class="btn btn-outline-dark bg-light border-warning-hover load-more-btn px-5 text-warning-hover" data-limit="10" data-page="2" data-class="col-lg-4" data-term="<?= $term->term_id ?>">
                    <?= esc_html(carbon_get_theme_option('general_more_post_btn_text')) ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-repeat" viewBox="0 0 20 20">
                        <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192m3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z"></path>
                    </svg>
                </button>
            </div>
        <?php else : ?>
            <h1 class="playfair-display fw-bold mt-4">No posts found matching your criteria.</h1>
        <?php endif; ?>
    </div>
<?php }

genesis();
