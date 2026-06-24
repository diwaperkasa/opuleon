<?php

remove_action('genesis_loop', 'genesis_do_loop');

add_action('genesis_loop', 'content');

function content()
{ ?>
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class("py-4"); ?>>
                <div class="d-flex flex-wrap py-2 category-container dot-between-item">
                    <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Time</span>
                    <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">A. Lange & Sone</span>
                    <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Saxon Watchmaking</span>
                </div>
                <header class="post__header border-bottom pb-4 mb-5" role="heading">
                    <h1 class="post__title playfair-display fw-bold">The Hidden Heroes of
                        <span class="fw-normal fst-italic">Saxon Watchmaking</span>
                    </h1>
                    <p class="playfair-display fst-italic">Four complication that A. Lange & Sohne does not advertise loudly enought - and why that restraint is itself a form of eloquence</p>
                    <div class="d-flex flex-wrap dot-between-item">
                        <span class="fw-bold dm-sans">By Alvin Wong</span>
                        <span class="dm-sans">4 June 2026</span>
                        <span class="dm-sans">7 min read</span>
                    </div>
                </header>
                <div class="featured__image mb-5">
                    <div class="position-relative bg-dark">
                        <img class="img-fluid w-100" src="https://placehold.co/1980x1080/png" alt="Description of the image" />
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 text-white dm-sans">
                            <span class="opacity-75">This is a caption for the image.</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="post__content libre-baskerville mb-5">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised thanks to these sheets and more recently with desktop publishing software like Aldus PageMaker and Microsoft Word including versions of Lorem Ipsum.</p>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                            <p>The standard chunk of Lorem Ipsum used since 1966 is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                            <blockquote>
                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                            </blockquote>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
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
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                                </svg>
                            </button>
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                </svg>
                            </button>
                            <button class="btn p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                                    <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
                                    <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <p class="text-warning text-uppercase dm-sans tracking-wide">Continue Reading</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="border-top py-3">
                                <div class="card border-0">
                                    <img src="https://placehold.co/600x400/png" class="img-fluid rounded" alt="Description of the image"/>
                                    <div class="card-body px-0">
                                        <div class="d-flex flex-wrap mb-2 dot-between-item">
                                            <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Journey</span>
                                            <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Japan</span>
                                            <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Ryokan</span>
                                        </div>
                                        <h3 class="card-title playfair-display fw-bold">Nishiyama Onsen Keiunkan:
                                            <span class="fw-normal fst-italic">Thirty-Seven Generations of Uninterrupted Silence</span>
                                        </h3>
                                        <p class="dm-sans">The world's oldest hotel does not advertise. What its offer cannot be replicated.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="border-top py-3">
                                <div class="card border-0">
                                    <img src="https://placehold.co/600x400/png" class="img-fluid rounded" alt="Description of the image"/>
                                    <div class="card-body px-0">
                                        <div class="d-flex flex-wrap mb-2 dot-between-item">
                                            <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Journey</span>
                                            <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Japan</span>
                                            <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Ryokan</span>
                                        </div>
                                        <h3 class="card-title playfair-display fw-bold">Nishiyama Onsen Keiunkan:
                                            <span class="fw-normal fst-italic">Thirty-Seven Generations of Uninterrupted Silence</span>
                                        </h3>
                                        <p class="dm-sans">The world's oldest hotel does not advertise. What its offer cannot be replicated.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="border-top py-3">
                                <div class="card border-0">
                                    <img src="https://placehold.co/600x400/png" class="img-fluid rounded" alt="Description of the image"/>
                                    <div class="card-body px-0">
                                        <div class="d-flex flex-wrap mb-2 dot-between-item">
                                            <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Journey</span>
                                            <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Japan</span>
                                            <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Ryokan</span>
                                        </div>
                                        <h3 class="card-title playfair-display fw-bold">Nishiyama Onsen Keiunkan:
                                            <span class="fw-normal fst-italic">Thirty-Seven Generations of Uninterrupted Silence</span>
                                        </h3>
                                        <p class="dm-sans">The world's oldest hotel does not advertise. What its offer cannot be replicated.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </article>
        <?php endwhile; ?>
    </div>
<?php }

genesis();
