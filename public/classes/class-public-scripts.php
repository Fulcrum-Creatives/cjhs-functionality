<?php
/**
 * Load the Public Scripts
 */
class CJHS_Public_Scripts {
    /**
     * Class Constructor
     *
     * @param string $plugin_slug The plugin slug
     * @param string $version The plugin version 
     */
    public function __construct( $plugin_slug, $version ) {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
        $this->plugin_slug = $plugin_slug;
        $this->version = $version;
    }
    public function enqueue_scripts() {
        //wp_enqueue_script( $this->plugin_slug, plugins_url( 'assets/js/public.js', dirname( __FILE__ ) ), array( 'jquery' ), $this->version, true );
    }
}