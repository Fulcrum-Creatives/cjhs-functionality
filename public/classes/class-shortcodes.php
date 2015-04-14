<?php
/**
 * Load the Admin scripts
 */
class CJHS_Shortcodes {
    /**
     * Class Constructor
     */
    public function __construct( $plugin_slug, $version ) {
        $this->plugin_slug = $plugin_slug;
        $this->version = $version;
        add_action( 'init', array( $this, 'register_links_page_shortcode' ) );

    }
    /**
     * Register Sortcodes
     */
    public function register_links_page_shortcode(){
        add_shortcode('cjhs-display-links', array( $this, 'links_page_display' ) );
        add_shortcode('cjhs-display-videos', array( $this, 'video_page_display' ) );
        add_shortcode('cjhs-toc', array( $this, 'table_of_contents' ) );
    }
    /**
     * Ticket Display Page
     */
    public function links_page_display(){
        include( plugin_dir_path( __FILE__ ) . '../views/links-page.php' );
        return $html;
    }
    /**
     * Video Display Page
     */
    public function video_page_display(){
        include( plugin_dir_path( __FILE__ ) . '../views/video-page.php' );
        return $html;
    }
    /**
     * Table of Contents
     */
    public function table_of_contents(){
        wp_enqueue_script( 'toc-js', plugins_url( 'assets/js/toc.js', dirname( __FILE__ ) ), array( 'jquery' ), $this->version, true );
    }
    /**
     * Table of Contents Scripts
     */
    public function table_of_contents_scripts(){
        echo '
            <style>
            </style>
        ';
    }
}