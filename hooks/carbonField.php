<?php

function crb_load()
{
    require_once( __DIR__ . "/../vendor/autoload.php" );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'after_setup_theme', 'crb_load' );

function crb_attach_theme_options()
{
    \Carbon_Fields\Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            \Carbon_Fields\Field::make( 'text', 'crb_facebook', 'Facebook URL' ),
            \Carbon_Fields\Field::make( 'text', 'crb_twitter', 'Twitter URL' ),
            \Carbon_Fields\Field::make( 'text', 'crb_instagram', 'Instagram URL' ),
            \Carbon_Fields\Field::make( 'text', 'crb_linkedin', 'LinkedIn URL' ),
        ) );

    \Carbon_Fields\Container::make('post_meta', 'Featured image caption')
        ->where('post_type', '=', 'post')
        ->add_fields([
            \Carbon_Fields\Field::make('text', 'featured_image_caption', ''),
        ]);
}

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );