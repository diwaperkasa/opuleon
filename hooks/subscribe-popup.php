<?php

add_action('wp_footer', function () {
    if (is_front_page()) {
        include get_stylesheet_directory() . '/components/subscribe-popup.php';
    }
});