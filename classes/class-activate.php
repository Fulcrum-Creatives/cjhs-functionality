<?php
/**
 * Run on activation
 */
class Activate {
    /**
     * Class Constructor
     */
    public function __construct() {
        // Activate plugin when new blog is added
        add_action( 'wpmu_new_blog', array( $this, 'activate_new_site' ) );
        add_action( 'admin_init', array( $this, 'check_version' ) );
        // Don't run anything else in the plugin, if we're on an incompatible WordPress version
        if ( ! self::compatible_version() ) {
            return;
        }
    }
    /**
     * Fired when the plugin is activated.
     *
     * @param boolean $network_wide True if WPMU superadmin uses "Network Deactivate" action, false if WPMU is disabled or plugin is deactivated on an individual blog.
     */
    public static function activate( $network_wide ) {
        if ( function_exists( 'is_multisite' ) && is_multisite() ) {
            if ( $network_wide  ) {
                // Get all blog ids
                $blog_ids = Get_Blog_IDs::get_blog_ids();
                foreach ( $blog_ids as $blog_id ) {
                    switch_to_blog( $blog_id );
                    self::single_activate();
                }
                restore_current_blog();
            } else {
                self::single_activate();
            }
        } else {
            self::single_activate();
        }
    }
    /**
     * Fired when a new site is activated with a WPMU environment
     *
     * @param int $blog_id ID of the new blog
     */
    public function activate_new_site( $blog_id ) {
        if ( 1 !== did_action( 'wpmu_new_blog' ) ) {
            return;
        }
        switch_to_blog( $blog_id );
        self::single_activate();
        restore_current_blog();
    }
    /**
     * Fired for each blog when the plugin is activated
     */
    private static function single_activate() {
        self::activation_check();
    }
    /**
     * The primary sanity check, automatically disable the plugin on activation if it doesn't meet minimum requirements
     */
    public static function activation_check() {
        if ( ! self::compatible_version() ) {
            deactivate_plugins( plugin_basename( __FILE__ ) );
            wp_die( __( 'My Plugin requires WordPress 3.7 or higher!', 'cjhs-functionality' ) );
        } 
    }
    /**
     * The backup sanity check, in case the plugin is activated in a weird way, or the versions change after activation
     */
    public function check_version() {
        if ( ! self::compatible_version() ) {
            if ( is_plugin_active( plugin_basename( __FILE__ ) ) ) {
                deactivate_plugins( plugin_basename( __FILE__ ) );
                add_action( 'admin_notices', array( $this, 'cjhs-functionality' ) );
                if ( isset( $_GET['activate'] ) ) {
                    unset( $_GET['activate'] );
                }
            } 
        } 
    }
    /**
     * Text to display in the notice
     */
    public function disabled_notice() {
       echo '<strong>' . esc_html__( 'My Plugin requires WordPress 3.7 or higher!', 'my-plugin' ) . '</strong>';
    } 
    /**
     * Check current version against $version_check
     */
    public static function compatible_version() {
        if ( version_compare( $GLOBALS['wp_version'], '3.7', '<' ) ) {
             return false;
             
         }
        return true;
    }
}