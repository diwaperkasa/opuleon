<div class="subscribe-popup-fixed w-100">
    <div class="bg-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="d-flex justify-content-between">
                        <p class="text-warning dm-sans tracking-wide mb-1"><?= esc_html(carbon_get_theme_option('subs_title')) ?></p>
                        <div class="d-md-none d-flex justify-content-end mt-n2">
                            <button style="height: 40px; width: 40px;" type="button" class="btn btn-light text-reset rounded-pill subscribe-close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <p class="h4 playfair-display"><?= esc_html(carbon_get_theme_option('subs_sub_title')) ?></p>
                    <p class="dm-sans text-secondary mb-0"><?= esc_html(carbon_get_theme_option('subs_desc')) ?></p>
                </div>
                <div class="col-md-4 my-auto">
                    <!-- <form id="mc-embedded-subscribe-form" class="validate mt-3 mt-md-0" action="https://opuleon.us14.list-manage.com/subscribe/post?u=219e2fbdd33790cfdbb025217&amp;id=9224677bee&amp;f_id=00fdbee5f0" method="post" name="mc-embedded-subscribe-form" target="_blank">
                        <div class="mb-3">
                            <input name="EMAIL" type="email" class="rounded form-control dm-sans border-warning" id="email" placeholder="Your email address" required />
                        </div>
                        <div id="mce-responses" class="clear foot">
                            <div id="mce-error-response" class="response mb-3" style="display: none;"></div>
                            <div id="mce-success-response" class="response mb-3" style="display: none;"></div>
                        </div>
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            /* real people should not fill this in and expect good things - do not remove this or risk form bot signups */
                            <input tabindex="-1" name="b_219e2fbdd33790cfdbb025217_9224677bee" type="text" value="" />
                        </div>
                        <button id="mc-embedded-subscribe" type="submit" class="w-100 border-black rounded btn btn-light text-uppercase dm-sans text-warning-hover border-warning-hover">Subscribe
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                            </svg>
                        </button>
                    </form> -->
                    <a href="/subscribe" id="mc-embedded-subscribe" type="submit" class="text-decoration-none w-100 border-black rounded btn btn-light text-uppercase dm-sans text-warning-hover border-warning-hover tracking-wide">Subscribe
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg>
                    </a>
                </div>
                <div class="col-md-1 d-none d-md-block">
                    <div class="d-flex justify-content-end mt-n1">
                        <button style="height: 40px; width: 40px;" type="button" class="btn btn-light text-reset rounded-pill subscribe-close d-flex justify-content-center align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>