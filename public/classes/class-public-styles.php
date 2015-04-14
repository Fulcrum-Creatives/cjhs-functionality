<?php
/**
 * Load the Public styles
 */
class CJHS_Public_Styles {
    /**
     * Class Constructor
     *
     * @param string $plugin_slug The plugin slug
     * @param string $version The plugin version 
     */
    public function __construct( $plugin_slug, $version ) {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
        $this->plugin_slug = $plugin_slug;
        $this->version = $version;
    }
    public function enqueue_styles() {
    }
}