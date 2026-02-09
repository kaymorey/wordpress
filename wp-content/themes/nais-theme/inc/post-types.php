<?php

use PostTypes\PostType;

class Clothing extends PostType {
    public function name(): string {
        return 'clothing';
    }

    public function labels(): array {
        return [
            'name'               => __( 'Vêtements', 'text-domain' ),
            'singular_name'      => __( 'Vêtement', 'text-domain' ),
            'menu_name'          => __( 'Vêtements', 'text-domain' ),
            'all_items'          => __( 'Tous les vêtements', 'text-domain' ),
            'add_new'            => __( 'Ajouter', 'text-domain' ),
            'add_new_item'       => __( 'Ajouter un vêtement', 'text-domain' ),
            'edit_item'          => __( 'Modifier le vêtement', 'text-domain' ),
            'new_item'           => __( 'Nouveau vêtement', 'text-domain' ),
            'view_item'          => __( 'Voir le vêtement', 'text-domain' ),
            'search_items'       => __( 'Rechercher des vêtements', 'text-domain' ),
            'not_found'          => __( 'Aucun vêtement trouvé', 'text-domain' ),
            'not_found_in_trash' => __( 'Aucun vêtement trouvé dans la corbeille', 'text-domain' ),
            'parent_item_colon'  => __( 'Vêtement parent', 'text-domain' ),
        ];
    }

    public function supports(): array {
        return [
            'title',
            'editor',
        ];
    }
}

$clothing = new Clothing;
$clothing->register();
