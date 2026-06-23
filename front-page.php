<?php

remove_action('genesis_loop', 'genesis_do_loop');

add_action('genesis_loop', 'content');

function content()
{
?>
    <div class="container">
        <section id="hero-section" class="mb-3">
            <div class="border-bottom">
                <div class="position-relative bg-dark">
                    <img class="img-fluid w-100" src="https://placehold.co/1980x1080/png" alt="Description of the image"/>
                    <div class="position-absolute bottom-0 start-0 w-100 p-4 text-white dm-sans">
                        <span class="opacity-75">This is a caption for the image.</span>
                    </div>
                </div>
                <div class="hero-background">
                    <div class="d-flex flex-wrap py-2 category-container dot-between-item">
                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Journey</span>
                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Japan</span>
                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Ryokan</span>
                    </div>
                    <h1 class="playfair-display fw-bold">Nishiyama Onsen Keiunkan:
                        <span class="fw-normal fst-italic">Thirty-Seven Generations of Uninterrupted Silence</span>
                    </h1>
                    <p class="playfair-display fst-italic">The world's oldest hotel does not advertise. What its offer cannot be replicated.</p>
                    <div class="d-flex flex-wrap dot-between-item py-2">
                        <span class="fw-bold dm-sans">By Alvin Wong</span>
                        <span class="dm-sans">4 June 2026</span>
                        <span class="dm-sans">7 min read</span>
                    </div>
                </div>
            </div>
        </section>
        <section id="latest-articles" class="mb-3">
            <h2 class="h6 text-uppercase dm-sans mb-4 h4 fw-normal tracking-wide">Latest Stories</h2>
            <div class="border-bottom">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-3 border-0">
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
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-3 border-0">
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
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-3 border-0">
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
        </section>
        <section id="archives" class="mb-3">
            <div class="row">
                <div class="col">
                    <div class="border-bottom mb-3">
                        <h2 class="h6 text-uppercase dm-sans h4 fw-normal tracking-wide">More from The Archives</h2>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="card mb-3 border-0">
                                <img src="https://placehold.co/600x400/png" class="img-fluid rounded" alt="Description of the image"/>
                                <div class="card-body px-0">
                                    <div class="d-flex flex-wrap mb-2 dot-between-item">
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Journey</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Japan</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Ryokan</span>
                                    </div>
                                    <h3 class="card-title playfair-display fw-bold h5">Nishiyama Onsen Keiunkan:
                                        <span class="fw-normal fst-italic">Thirty-Seven Generations of Uninterrupted Silence</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-3 border-0">
                                <img src="https://placehold.co/600x400/png" class="img-fluid rounded" alt="Description of the image"/>
                                <div class="card-body px-0">
                                    <div class="d-flex flex-wrap mb-2 dot-between-item">
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Journey</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Japan</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Ryokan</span>
                                    </div>
                                    <h3 class="card-title playfair-display fw-bold h5">Nishiyama Onsen Keiunkan:
                                        <span class="fw-normal fst-italic">Thirty-Seven Generations of Uninterrupted Silence</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-3 border-0">
                                <img src="https://placehold.co/600x400/png" class="img-fluid rounded" alt="Description of the image"/>
                                <div class="card-body px-0">
                                    <div class="d-flex flex-wrap mb-2 dot-between-item">
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Journey</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Japan</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Ryokan</span>
                                    </div>
                                    <h3 class="card-title playfair-display fw-bold h5">Nishiyama Onsen Keiunkan:
                                        <span class="fw-normal fst-italic">Thirty-Seven Generations of Uninterrupted Silence</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-3 border-0">
                                <img src="https://placehold.co/600x400/png" class="img-fluid rounded" alt="Description of the image"/>
                                <div class="card-body px-0">
                                    <div class="d-flex flex-wrap mb-2 dot-between-item">
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Journey</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Japan</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Ryokan</span>
                                    </div>
                                    <h3 class="card-title playfair-display fw-bold h5">Nishiyama Onsen Keiunkan:
                                        <span class="fw-normal fst-italic">Thirty-Seven Generations of Uninterrupted Silence</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-3 border-0">
                                <img src="https://placehold.co/600x400/png" class="img-fluid rounded" alt="Description of the image"/>
                                <div class="card-body px-0">
                                    <div class="d-flex flex-wrap mb-2 dot-between-item">
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Journey</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Japan</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Ryokan</span>
                                    </div>
                                    <h3 class="card-title playfair-display fw-bold h5">Nishiyama Onsen Keiunkan:
                                        <span class="fw-normal fst-italic">Thirty-Seven Generations of Uninterrupted Silence</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-3 border-0">
                                <img src="https://placehold.co/600x400/png" class="img-fluid rounded" alt="Description of the image"/>
                                <div class="card-body px-0">
                                    <div class="d-flex flex-wrap mb-2 dot-between-item">
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Journey</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Japan</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Ryokan</span>
                                    </div>
                                    <h3 class="card-title playfair-display fw-bold h5">Nishiyama Onsen Keiunkan:
                                        <span class="fw-normal fst-italic">Thirty-Seven Generations of Uninterrupted Silence</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-3 border-0">
                                <img src="https://placehold.co/600x400/png" class="img-fluid rounded" alt="Description of the image"/>
                                <div class="card-body px-0">
                                    <div class="d-flex flex-wrap mb-2 dot-between-item">
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Journey</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Japan</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Ryokan</span>
                                    </div>
                                    <h3 class="card-title playfair-display fw-bold h5">Nishiyama Onsen Keiunkan:
                                        <span class="fw-normal fst-italic">Thirty-Seven Generations of Uninterrupted Silence</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-3 border-0">
                                <img src="https://placehold.co/600x400/png" class="img-fluid rounded" alt="Description of the image"/>
                                <div class="card-body px-0">
                                    <div class="d-flex flex-wrap mb-2 dot-between-item">
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Journey</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Japan</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Ryokan</span>
                                    </div>
                                    <h3 class="card-title playfair-display fw-bold h5">Nishiyama Onsen Keiunkan:
                                        <span class="fw-normal fst-italic">Thirty-Seven Generations of Uninterrupted Silence</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-3 border-0">
                                <img src="https://placehold.co/600x400/png" class="img-fluid rounded" alt="Description of the image"/>
                                <div class="card-body px-0">
                                    <div class="d-flex flex-wrap mb-2 dot-between-item">
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Journey</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Japan</span>
                                        <span class="fs-small text-warning text-uppercase dm-sans fw-light tracking-wide fs-small">Ryokan</span>
                                    </div>
                                    <h3 class="card-title playfair-display fw-bold h5">Nishiyama Onsen Keiunkan:
                                        <span class="fw-normal fst-italic">Thirty-Seven Generations of Uninterrupted Silence</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="h-100">
                        <div class="rounded-3 bg-light p-3 sticky-top top-5">
                            <p class="text-warning dm-sans text-uppercase tracking-wide">The Opuleon Letter</p>
                            <p class="h4 playfair-display">One considered read, once a week.</p>
                            <p class="dm-sans">No aggregation. No list for volume. Editorial Picks for reader who pursue the finest things with curiosity.</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="rounded form-control dm-sans" id="email" placeholder="Your email address" required/>
                                </div>
                                <button type="submit" class="w-100 border-black rounded btn btn-light text-uppercase dm-sans text-warning-hover border-warning-hover">Subscribe
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
}

genesis();
