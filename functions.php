<?php 
define('af_theme_version', 1);

// Adding theme styles and scripts
add_action('wp_enqueue_scripts', 'af_add_theme_scripts');

function af_add_theme_scripts() {
    wp_enqueue_style(
        'bootstrap-styles',
        get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css',
    );
    
    wp_enqueue_style(
        'theme-styles',
        get_template_directory_uri() . '/assets/styles/styles.css',
    );

    wp_enqueue_script(
        'bootstrap-script',
        get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.js',
        ['jquery'],
        af_theme_version,
        true
    );

    wp_enqueue_script(
        'theme-main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        ['jquery'],
        af_theme_version,
        true
    );
}

/* Adding theme features */
// General
include_once 'theme-features/general/general.php';

// Theme rest api
include_once 'theme-features/rest-api/rest-api.php';

// Theme settings admin page
include_once 'theme-features/admin/antonio-flores-theme-settings.php';

// Call Elementor custom widgets only if the elementor plugin is activated
include_once 'theme-features/elementor-custom-widgets/Af_Custom_Widgets.php';