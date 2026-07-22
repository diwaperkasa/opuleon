<?php

add_action('wp_footer', function () {
    include get_stylesheet_directory() . '/components/subscribe-popup.php';
});