<?php

remove_action('genesis_loop', 'genesis_do_loop');

add_action('genesis_loop', 'content');

function content()
{ ?>
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class("py-4"); ?>>
                <?php $categories = get_the_terms(get_the_ID(), 'category'); ?>
                <?php if ($categories): ?>
                    <div class="d-flex flex-row-reverse justify-content-end flex-wrap py-2 category-container">
                        <?php $category = $categories[0] ?>
                        <a href="<?= get_term_link($category); ?>" class="text-decoration-none fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small"><?= $category->name ?></a>
                        <?php while ($category->parent): ?>
                            <?php $category = get_term($category->parent, 'category') ?>
                            <a href="<?= get_term_link($category); ?>" class="text-decoration-none fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small"><?= $category->name ?></a>
                        <?php endwhile ?>
                    </div>
                <?php endif; ?>
                <header class="post__header border-bottom pb-4 mb-5" role="heading">
                    <h1 class="post__title playfair-display fw-bold"><?php the_title() ?>
                        <?php if ($italic_title = get_post_meta(get_the_ID(), '_italic_title', true)) : ?>
                            <span class="fw-normal fst-italic"><?= esc_html($italic_title) ?></span>
                        <?php endif; ?>
                    </h1>
                    <?php if ($subtitle = get_the_subtitle(get_the_ID(), '', '', false)) : ?>
                        <p class="playfair-display fst-italic"><?= esc_html($subtitle) ?></p>
                    <?php endif; ?>
                    <div class="d-flex flex-wrap dot-between-item">
                        <?php $writers = get_the_terms(get_the_ID(), 'writer'); ?>
                        <?php if ($writers): ?>
                            <span class="fw-bold dm-sans">By
                                <span class="writers comma-between-item">
                                    <?php foreach ($writers as $writer): ?>
                                        <a href="<?= get_term_link($writer); ?>" class="text-decoration-none text-dark text-secondary-hover"><?= $writer->name ?></a>
                                    <?php endforeach ?>
                                </span>
                            </span>
                        <?php endif; ?>
                        <span class="dm-sans"><?= get_the_date('j F Y'); ?></span>
                        <span class="dm-sans"><?= get_reading_time(get_the_ID()) ?> min read</span>
                    </div>
                </header>
                <div class="featured__image mb-5">
                    <?= get_the_post_thumbnail(
                        get_the_ID(),
                        'full',
                        ['class' => 'img-fluid mb-2']
                    ); ?>
                    <?php $imageCaption = carbon_get_post_meta(get_the_ID(), 'featured_image_caption'); ?>
                    <?php if ($imageCaption): ?>
                        <p class="dm-sans">
                            <span class="opacity-75"><?= esc_html($imageCaption) ?></span>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="post__content libre-baskerville mb-5">
                            <?php the_content() ?> 
                        </div>
                        <div class="border-center position-relative mb-5">
                            <div class="d-flex justify-content-center">
                                <div class="px-2 bg-white text-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stars" viewBox="0 0 20 20">
                                        <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="post__footer">
                    <div class="d-flex justify-content-between align-items-center border-top border-bottom py-2 mb-5">
                        <span class="text-warning text-uppercase dm-sans tracking-wide">Share This Piece</span>
                        <div class="social-buttons d-flex">
                            <button class="btn" data-sharer="twitter" data-title="Share from Opuleon! <?= get_the_permalink() ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                                </svg>
                            </button>
                            <button class="btn" data-sharer="whatsapp" data-title="Share from Opuleon! <?= get_the_permalink() ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                </svg>
                            </button>
                            <button class="btn" data-sharer="threads" data-title="Share from Opuleon! <?= get_the_permalink() ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-threads" viewBox="0 0 16 16">
                                    <path d="M6.321 6.016c-.27-.18-1.166-.802-1.166-.802.756-1.081 1.753-1.502 3.132-1.502.975 0 1.803.327 2.394.948s.928 1.509 1.005 2.644q.492.207.905.484c1.109.745 1.719 1.86 1.719 3.137 0 2.716-2.226 5.075-6.256 5.075C4.594 16 1 13.987 1 7.994 1 2.034 4.482 0 8.044 0 9.69 0 13.55.243 15 5.036l-1.36.353C12.516 1.974 10.163 1.43 8.006 1.43c-3.565 0-5.582 2.171-5.582 6.79 0 4.143 2.254 6.343 5.63 6.343 2.777 0 4.847-1.443 4.847-3.556 0-1.438-1.208-2.127-1.27-2.127-.236 1.234-.868 3.31-3.644 3.31-1.618 0-3.013-1.118-3.013-2.582 0-2.09 1.984-2.847 3.55-2.847.586 0 1.294.04 1.663.114 0-.637-.54-1.728-1.9-1.728-1.25 0-1.566.405-1.967.868ZM8.716 8.19c-2.04 0-2.304.87-2.304 1.416 0 .878 1.043 1.168 1.6 1.168 1.02 0 2.067-.282 2.232-2.423a6.2 6.2 0 0 0-1.528-.161"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <p class="text-warning text-uppercase dm-sans tracking-wide">Continue Reading</p>
                    <?php
                        $args = [
                            'post_type'         => 'post',
                            'post_status'       => 'publish',
                            'posts_per_page'    => 3,
                            'post__not_in'      => [get_the_ID()],
                            'orderby'           => 'rand',
                        ];

                        if ($categories) {
                            $args['cat'] = $categories[0]->term_id;
                        }

                        $query = new WP_Query($args);
                    ?>
                    <div class="row">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="col-md-4">
                                <?php get_template_part('components/post-card'); ?>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                </footer>
            </article>
        <?php endwhile; ?>
    </div>
<?php }

genesis();
