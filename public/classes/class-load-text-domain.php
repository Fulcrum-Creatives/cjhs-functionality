<?php
/**
 * Load the Text Domain for localization
 */
class CJHS_Load_Text_Domain {
    /**
     * Class Constructor
     *
     * @param string $plugin_slug The plugin slug
     */
    public function __construct( $plugin_slug ) {
        // Load plugin text domain
        add_action( 'init', array( $this, 'load_plugin_textdomain' ) );
        $this->plugin_slug = $plugin_slug;
    }
    /**
     * Load the plugin text domain for translation
     */
    public function load_plugin_textdomain() {
        $domain = $this->plugin_slug;
        $locale = apply_filters( 'plugin_locale', get_locale(), $domain );
        load_textdomain( $domain, trailingslashit( WP_LANG_DIR ) . $domain . '/' . $domain . '-' . $locale . '.mo' );
    }
}