<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function() {
    // Theme options
    Container::make('theme_options', 'Options du thème')
    ->add_fields(array(
      Field::make('textarea', 'about', 'A propos'),
    ));

    // Custom fields pour clothing post type
    Container::make('post_meta', 'Médias du vêtement')
    ->where('post_type', '=', 'clothing')
    ->add_fields(array(
        Field::make('media_gallery', 'gallery', 'Galerie d\'images')
            ->set_type('image')
    ));

    Container::make('post_meta', 'Détails du vêtement')
    ->where('post_type', '=', 'clothing')
    ->add_fields(array(
        Field::make('text', 'url', 'URL du produit'),
        Field::make('textarea', 'description', 'Description'),
        Field::make('textarea', 'composition', 'Composition'),
        Field::make('textarea', 'care_instructions', 'Conseil d\'entretien'),
    ));

    // Custom fields for pages
    Container::make( 'post_meta', 'Contenu À Propos')
    ->where('post_template', '=', 'templates/about.php')
    ->add_fields( array(
        Field::make('complex', 'about_sections', 'Sections')
            ->add_fields(array(
                Field::make('text', 'title', 'Titre'),
                Field::make('rich_text', 'text', 'Texte'),
                Field::make('image', 'image', 'Image'),
                Field::make('text', 'link_url', 'Lien (URL)'),
                Field::make('text', 'link_text', 'Lien (Texte)'),
            ) )
    ));
});
