<?php

remove_action('genesis_loop', 'genesis_do_loop');

add_action('genesis_loop', 'content');

function content()
{
?>
    <article <?php post_class(); ?>>
        <div class="container">
            <div class="my-5">
                <div class="page-content">
                    <?php the_content() ?> 
                </div>
            </div>
        </div>
    </article>
<?php
}

genesis();
