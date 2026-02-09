<?php

if (file_exists(get_theme_file_path('/vendor/autoload.php'))) {
    require_once get_theme_file_path('/vendor/autoload.php');
}

use Carbon_Fields\Carbon_Fields;
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    Carbon_Fields::boot();
}

require_once('inc/assets.php');
require_once('inc/post-types.php');
require_once('inc/fields.php');

add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_widgets_block_editor', '__return_false');
