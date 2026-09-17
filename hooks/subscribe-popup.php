<?php

add_action('wp_footer', function () {
    if (is_front_page() || is_category()) {
        include get_stylesheet_directory() . '/components/subscribe-popup.php';
    }
});