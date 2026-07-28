<?php

function crb_load()
{
    require_once( __DIR__ . "/../vendor/autoload.php" );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'after_setup_theme', 'crb_load' );

function crb_attach_theme_options()
{
    $basic_options_container = Carbon_Fields\Container::make( 'theme_options', __( 'Themes Options' ) )
        ->add_fields( array(
            \Carbon_Fields\Field::make( 'header_scripts', 'theme_header_script', __( 'Header Script' ) ),
            \Carbon_Fields\Field::make( 'footer_scripts', 'theme_footer_script', __( 'Footer Script' ) ),
        ) );
    
    \Carbon_Fields\Container::make( 'theme_options', __( 'Social Links' ) )
        ->set_page_parent( $basic_options_container )
        ->add_fields([
            \Carbon_Fields\Field::make( 'text', 'social_facebook', 'Facebook URL' ),
            \Carbon_Fields\Field::make( 'text', 'social_twitter', 'Twitter URL' ),
            \Carbon_Fields\Field::make( 'text', 'social_instagram', 'Instagram URL' ),
            \Carbon_Fields\Field::make( 'text', 'social_linkedin', 'LinkedIn URL' ),
        ]);
    
    \Carbon_Fields\Container::make( 'theme_options', __( 'Subscribe Settings' ) )
        ->set_page_parent( $basic_options_container )
        ->add_fields([
            \Carbon_Fields\Field::make( 'text', 'subs_title', 'Title' ),
            \Carbon_Fields\Field::make( 'text', 'subs_sub_title', 'Subtitle' ),
            \Carbon_Fields\Field::make( 'textarea', 'subs_desc', 'Description' ),
        ]);

    \Carbon_Fields\Container::make( 'theme_options', __( 'General Settings' ) )
        ->set_page_parent( $basic_options_container )
        ->add_fields([
            \Carbon_Fields\Field::make( 'text', 'general_more_post_btn_text', 'More post button text' ),
        ]);

    \Carbon_Fields\Container::make('post_meta', 'Featured image caption')
        ->where('post_type', '=', 'post')
        ->add_fields([
            \Carbon_Fields\Field::make('text', 'featured_image_caption', ''),
        ]);

    $front_page_id = (int) get_option('page_on_front');

    \Carbon_Fields\Container::make('post_meta', 'Homepage Settings')
        ->where('post_id', '=', $front_page_id)
        ->add_fields([
            \Carbon_Fields\Field::make('text', 'number_of_posts', 'How many latest articles?'),
            \Carbon_Fields\Field::make('text', 'number_of_category_posts', 'How many category articles?'),
            \Carbon_Fields\Field::make('complex', 'categories', 'Selected Categories')
                ->add_fields([
                    \Carbon_Fields\Field::make('select', 'category_id', 'Category')
                        ->set_options(function () {
                            $categories = get_categories([
                                'hide_empty' => false,
                            ]);

                            $options = [];

                            foreach ($categories as $category) {
                                $options[$category->term_id] = $category->name;
                            }

                            return $options;
                        }),
                ])
        ]);
}

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );