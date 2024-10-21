<?php
// Registrar menús de navegación
function paak_theme_setup() {
    register_nav_menus(array(
        'main-menu' => __('Menú Principal', 'paak-theme'),
    ));
}
add_action('after_setup_theme', 'paak_theme_setup');

// Encolar scripts y estilos
function paak_theme_scripts() {
    wp_enqueue_style('paak-style', get_stylesheet_uri());
    wp_enqueue_script('paak-script', get_template_directory_uri() . '/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'paak_theme_scripts');
?>
