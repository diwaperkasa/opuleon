<?php

add_action('edit_form_after_title', function ($post) {
    $italic_title = get_post_meta($post->ID, '_italic_title', true);
    ?>
    <input
        type="text"
        name="italic_title"
        value="<?php echo esc_attr($italic_title); ?>"
        placeholder="Italic Title"
        style="background-color: #fff;font-size: 1.4em;line-height: 1em;margin: 0;outline: 0;padding: 3px 8px;width: 100%;height: 1.7em;"
    >
    <?php
});

add_action('save_post', function ($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['italic_title'])) {
        update_post_meta(
            $post_id,
            '_italic_title',
            sanitize_text_field($_POST['italic_title'])
        );
    }
});

function override_title($parts) {
    if (is_single() && $italicTitle = get_post_meta(get_the_ID(), '_italic_title', true)) {
        if (isset($parts['title'])) {
            $title = $parts['title'];
            $parts['title'] = join(' ', [$italicTitle, $title]);
        }
    }

    return $parts;
}

add_filter('document_title_parts', 'override_title');
add_filter('wpseo_title', 'override_title');