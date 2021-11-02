<?php 

/* A simple admin page for the theme */
add_action('admin_menu', 'af_theme_settings_page');
function af_theme_settings_page() {
    add_menu_page(
        'AF Settings',
        'AF Settings',
        'manage_options',
        'antonio-flores-settings',
        'af_theme_settings_template',
        'dashicons-admin-generic',
        '100',
    );    
}

function af_theme_settings_template() {
    ?>
        <h1>Theme Settings Page</h1>
    <?php
}
