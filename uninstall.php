<?php

/**
 * Logo Link for WP - Uninstall
 *
 * Fired when the plugin is uninstalled.
 */

if (!defined('WP_UNINSTALL_PLUGIN')) {
  exit;
}

// Delete plugin options
delete_option('wpll_right_click_type');
delete_option('wpll_assets_url');
delete_option('wpll_custom_text');
delete_option('wpll_custom_url');

// Delete transients
delete_transient('wpll_logo_selector_cache');
