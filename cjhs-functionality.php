<?php
/**
 * Plugin Name:       CJHS Functionality
 * Plugin URI:        http://columbusjewishhistory.org/
 * Description:       CJHS Custom Functionality
 * Version:           1.0.0
 * Author:            Fulcrum Creatives
 * Author URI:        http://fulcrumcreatives.com
 * Text Domain:       cjhs-functionality
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
// Current Version
$version = '1.0.0';
// Unique identifier for the plugin.
$plugin_slug = 'functionality';
// Mode - production or development
$mode = 'development';

class CJHS_Functionality_Init {
    /**
     * Class Constructor
     */
    public function __construct($plugin_slug, $version, $mode) {
        // Required Files
        foreach( glob( plugin_dir_path( __FILE__ ) . 'classes/*.php' ) as $files ){
            require_once( $files );
        }
        // Register Activation and Deactivation Hook
        register_activation_hook( __FILE__, array( 'Activate', 'activate' ) );
        register_deactivation_hook( __FILE__, array( 'Deactivate', 'deactivate' ) );
        // Load Admin Files
        if( is_admin() ) {
            require_once( plugin_dir_path( __FILE__ ) . 'admin/class-admin-init.php' );
            $admin_init = new CJHS_Admin_Init($plugin_slug, $version);
        }
        // Load Public Files
        require_once( plugin_dir_path( __FILE__ ) . 'public/class-public-init.php' );
        $public_init = new CJHS_Public_Init($plugin_slug, $version);
        // Load Functions
        foreach( glob( plugin_dir_path( __FILE__ ) . 'functions/*.php' ) as $files ){
            include( $files );
        }
        // Load ACF
        if( $mode != 'development' ) {
            //require_once( plugin_dir_path( __FILE__ ) . 'includes/acf-options.php' );
            if( ! defined( 'ACF_LITE' ) ) {
                define( 'ACF_LITE', true );
            }
        }
    }
    
}
$ft_init = new CJHS_Functionality_Init( $plugin_slug, $version, $mode );