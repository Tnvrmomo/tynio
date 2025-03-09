<?php
// filepath: /workspaces/tynio/pi-payment-plugin/uninstall.php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Clean up plugin data
delete_option('pi_payment_options');