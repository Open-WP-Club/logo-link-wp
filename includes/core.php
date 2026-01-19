<?php

/**
 * Logo Link for WP - Core
 */

// Prevent direct access
if (!defined('ABSPATH')) {
  exit;
}

class WP_Logo_Link
{
  public ?WP_Logo_Link_Admin $admin = null;
  public ?WP_Logo_Link_Frontend $frontend = null;

  /**
   * Constructor
   */
  public function __construct()
  {
    $this->init_hooks();
    $this->init_components();
  }

  /**
   * Initialize hooks
   */
  private function init_hooks(): void
  {
    register_activation_hook(WPLL_PLUGIN_DIR . 'wp-logo-link.php', array($this, 'activate'));
    register_deactivation_hook(WPLL_PLUGIN_DIR . 'wp-logo-link.php', array($this, 'deactivate'));
  }

  /**
   * Initialize components
   */
  private function init_components(): void
  {
    // Initialize admin
    if (is_admin()) {
      $this->admin = new WP_Logo_Link_Admin();
    }

    // Initialize frontend
    if (!is_admin()) {
      $this->frontend = new WP_Logo_Link_Frontend();
    }
  }

  /**
   * Plugin activation
   */
  public function activate(): void
  {
    // Set default options only if they don't exist
    if (!get_option('wpll_right_click_type')) {
      update_option('wpll_right_click_type', 'assets');
    }
    if (!get_option('wpll_assets_url')) {
      update_option('wpll_assets_url', '');
    }
    if (!get_option('wpll_custom_text')) {
      update_option('wpll_custom_text', '');
    }
    if (!get_option('wpll_custom_url')) {
      update_option('wpll_custom_url', '');
    }
  }

  /**
   * Plugin deactivation
   */
  public function deactivate(): void
  {
    // Clear transient cache on deactivation
    delete_transient('wpll_logo_selector_cache');
    // Options are preserved for reactivation - deleted only on uninstall
  }

  /**
   * Get plugin version
   */
  public function get_version(): string
  {
    return WPLL_VERSION;
  }
}
