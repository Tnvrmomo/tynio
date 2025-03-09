<?php
/*
Plugin Name: Pi Payment Plugin
Description: Accept Pi Network payments in your WooCommerce store.
Version: 1.0.0
Author: Your Name
License: GPLv2 or later
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define( 'PI_PAYMENT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'PI_PAYMENT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include necessary files
include_once PI_PAYMENT_PLUGIN_DIR . 'includes/class-pi-payment-api.php';
include_once PI_PAYMENT_PLUGIN_DIR . 'includes/class-pi-payment-gateway.php';
include_once PI_PAYMENT_PLUGIN_DIR . 'includes/class-pi-payment-secure.php';

// Initialize the plugin
function pi_payment_plugin_init() {
    if (class_exists('WC_Payment_Gateway')) {
        include_once PI_PAYMENT_PLUGIN_DIR . 'includes/class-pi-payment-gateway.php';
        add_filter('woocommerce_payment_gateways', 'add_pi_payment_gateway');
    }
}
add_action('plugins_loaded', 'pi_payment_plugin_init');

function add_pi_payment_gateway($methods) {
    $methods[] = 'WC_Pi_Payment_Gateway';
    return $methods;
}
?>