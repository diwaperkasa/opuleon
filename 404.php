<?php

remove_action('genesis_loop', 'genesis_do_loop');

add_action('genesis_loop', 'content');

function content()
{
?>
    <div class="container">
        <div class="my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/assets/images/404.png" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <span class="display-1 text-muted opacity-50">
                        404
                    </span>
                </div>
                <div class="col-md-8">
                    <div class="mb-5">
                        <h1 class="playfair-display text-dark"><span>Looks like this page is missing.</span>
                            </br><span class="fst-italic h2">Try searching for what you need or go back to our <a href="<?= home_url() ?>" class="text-dark">homepage</a>.</span>
                        </h1>
                    </div>
                </div>
            </div>
            <form action="/">
                <div class="mb-3">
                    <input class="form-control rounded-0" type="text" name="s" placeholder="Find what you need..." />
                </div>
            </form>
        </div>
    </div>
<?php }

genesis();
