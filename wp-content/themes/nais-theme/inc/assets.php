<?php

function nais_vite_assets() {
    // Configuration
    $dev_server = 'http://localhost:5173';
    $is_dev = false;

    // Détection simple du mode DEV (si le serveur Vite répond)
    $handle = @fsockopen('host.docker.internal', 5173, $errno, $errstr, 0.1);
    if ($handle) {
        $is_dev = true;
        fclose($handle);
    } elseif (defined('WP_DEBUG') && WP_DEBUG) {
        // Fallback : si WP_DEBUG est actif, on tente le dev
        $is_dev = true; 
    }

    if ($is_dev) {
        // --- MODE DEV ---
        wp_enqueue_script('vite-client', $dev_server . '/@vite/client', [], null, true);
        wp_enqueue_script('nais-main', $dev_server . '/assets/js/app.js', [], null, true);
        
        // Ajout du type="module" (INDISPENSABLE pour Vite)
        add_filter('script_loader_tag', function($tag, $handle, $src) {
            if (in_array($handle, ['vite-client', 'nais-main'])) {
                return '<script type="module" src="' . esc_url($src) . '"></script>';
            }
            return $tag;
        }, 10, 3);

    } else {
        // --- MODE PROD ---
        $manifest_path = get_theme_file_path('dist/.vite/manifest.json');
        if (file_exists($manifest_path)) {
            $manifest = json_decode(file_get_contents($manifest_path), true);
            
            if (isset($manifest['assets/js/app.js'])) {
                $js = $manifest['assets/js/app.js']['file'];
                $css = $manifest['assets/js/app.js']['css'][0] ?? null;

                wp_enqueue_script('nais-main', get_theme_file_uri('dist/' . $js), [], null, true);
                if ($css) {
                    wp_enqueue_style('nais-style', get_theme_file_uri('dist/' . $css));
                }
            }
        }
    }
}
add_action('wp_enqueue_scripts', 'nais_vite_assets');
