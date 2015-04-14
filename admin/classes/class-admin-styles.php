<?php
/**
 * Load the Admin Styles
 */
class CJHS_Admin_Styles {
    /**
     * Class Constructor
     *
     * @param string $plugin_slug The plugin slug
     * @param string $version The plugin version 
     */
    public function __construct( $plugin_slug, $version ) {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_styles' ) );
        $this->plugin_slug = $plugin_slug;
        $this->version = $version;
    }
    /**
     * Styles for the Functionlity Settings page
     */
    public function enqueue_styles() {
        global $hook_suffix;
        if( $hook_suffix == 'settings_page_acf-options-theme-settings' ) {
            wp_enqueue_style( 'acf-admin', plugins_url( 'assets/css/acf.css', dirname( __FILE__ ) ), array(), $this->version );
        }
    }
}