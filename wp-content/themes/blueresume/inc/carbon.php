<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'image', 'logo_image', __( 'Logo' ) )
                ->set_value_type( 'url' ),
            Field::make( 'complex', 'social_links', __( 'Social Links' ) )
                ->add_fields( array(
                    Field::make( 'text', 'fonts_code', __( 'Код шрифта' ) ),
                    Field::make( 'text', 'social_link', __( 'Ссылка на сеть' ) ),
                ) ),
            Field::make( 'textarea', 'footer_text', __( 'Текст в футере' ) ),
        ) );

    Container::make( 'post_meta', 'main-page', __( 'Содержимое Прайс', 'blueresume' ) )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'main-page.php' )
        ->add_fields( array(
            Field::make( 'text', 'main-slag', __( 'Заголовок страницы', 'blueresume' ) )
                ->set_required( true ),
        ) );
}