<?php
/*
Plugin Name: Custom Switch for WP
Description: Un plugin pour créer des boutons switch paramétrables via un shortcode.
Version: 1.0.1
Author: johan63360
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('CUSTOM_SWITCH_PLUGIN_URL', plugin_dir_url(__FILE__));
define('CUSTOM_SWITCH_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Inclure les fichiers nécessaires
require_once CUSTOM_SWITCH_PLUGIN_DIR . 'includes/class-custom-switch.php';
require_once CUSTOM_SWITCH_PLUGIN_DIR . 'includes/admin/class-custom-switch-admin.php';

/**
 * Initialiser les classes
 *
 * @return void
 */
function custom_switch_init() {
    new Custom_Switch();
}
add_action('plugins_loaded', 'custom_switch_init');

// Initialiser la partie admin
function custom_switch_admin_init() {
    if (is_admin() && current_user_can('manage_options')) {
        new Custom_Switch_Admin();
    }
}
add_action('admin_init', 'custom_switch_admin_init');

/**
 * Activer le plugin
 *
 * @return void
 */
function custom_switch_activate() {
    // Code à exécuter lors de l'activation
}
register_activation_hook(__FILE__, 'custom_switch_activate');

/**
 * Désactiver le plugin
 *
 * @return void
 */
function custom_switch_deactivate() {
    // Code à exécuter lors de la désactivation
}
register_deactivation_hook(__FILE__, 'custom_switch_deactivate');
