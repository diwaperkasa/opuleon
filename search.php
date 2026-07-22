<?php

remove_action('genesis_loop', 'genesis_do_loop');

add_action('genesis_loop', 'content');

function content()
{ ?>
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="text-center py-4">
                <h1 class="playfair-display">Search Results For: <span><?= get_search_query() ?></span></h1>
            </div>
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-4">
                        <?php get_template_part('components/post-card'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="py-4 text-center">
                <?= get_the_posts_pagination([
                    "mid_size" => 2,
                    "prev_text" => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223"/></svg>',
                    "next_text" => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671"/></svg>',
                ]); ?>
            </div>
        <?php else : ?>
            <h1 class="playfair-display fw-bold mt-4">No posts found matching your criteria.</h1>
        <?php endif; ?>
    </div>
<?php }

genesis();