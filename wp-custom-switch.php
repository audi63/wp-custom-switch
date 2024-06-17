<?php
/*
Plugin Name: WP Custom Switch
Description: Un plugin pour créer des boutons switch paramétrables via un shortcode.
Version: 1.0
Author: Votre Nom
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'WP_CUSTOM_SWITCH_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WP_CUSTOM_SWITCH_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Inclure les fichiers nécessaires
require_once WP_CUSTOM_SWITCH_PLUGIN_DIR . 'includes/class-wp-custom-switch.php';
require_once WP_CUSTOM_SWITCH_PLUGIN_DIR . 'includes/admin/class-wp-custom-switch-admin.php';

// Initialiser les classes
function wp_custom_switch_init() {
    new WP_Custom_Switch();
    new WP_Custom_Switch_Admin();
}
add_action('plugins_loaded', 'wp_custom_switch_init');

// Activer le plugin
function wp_custom_switch_activate() {
    // Code à exécuter lors de l'activation
}
register_activation_hook(__FILE__, 'wp_custom_switch_activate');

// Désactiver le plugin
function wp_custom_switch_deactivate() {
    // Code à exécuter lors de la désactivation
}
register_deactivation_hook(__FILE__, 'wp_custom_switch_deactivate');