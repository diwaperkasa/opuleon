<?php

remove_action('genesis_loop', 'genesis_do_loop');

add_action('genesis_loop', 'content');

function content()
{
?>
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-4">
                        <?php get_template_part('components/post-card'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <h1 class="playfair-display fw-bold">No posts found matching your criteria.</h1>
        <?php endif; ?>
    </div>
<?php }

genesis();
