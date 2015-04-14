<?php
/**
 * Load the Admin scripts
 */
class CJHS_Admin_Scripts {
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
     * Scripts for the Functionlity Settings page
     */
    public function enqueue_styles() {
        global $hook_suffix;
        if( $hook_suffix == 'tools_page_functionality' ) {
            wp_enqueue_script( $this->plugin_slug, plugins_url( 'assets/js/admin.js', dirname( __FILE__ ) ), array( 'jquery' ), $this->version, true );
        }
    }
}