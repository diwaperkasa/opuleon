<?php

remove_action('genesis_loop', 'genesis_do_loop');

add_action('genesis_loop', 'content');

function content()
{
?>
    <article <?php post_class("py-4"); ?>>
        <div class="container">
            <h1 class="playfair-display fw-bold text-dark text-warning-hover text-center mb-5"><?php the_title() ?>
                <?php if ($italic_title = get_post_meta(get_the_ID(), '_italic_title', true)) : ?>
                    <span class="fw-normal fst-italic"><?= esc_html($italic_title) ?></span>
                <?php endif; ?>
            </h1>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="libre-baskerville mb-5">
                        <?php the_content() ?> 
                    </div>
                </div>
            </div>
        </div>
    </article>
<?php
}

genesis();
