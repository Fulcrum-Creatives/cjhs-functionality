<?php
/**
 * Load and Initalize Admin classes
 */
class CJHS_Admin_Init {
    /**
     * Class Constructor
     *
     * @param string $plugin_slug The plugin slug
     * @param string $version The plugin version 
     */
    public function __construct($plugin_slug, $version) {
        // Load Class Files
        foreach( glob( plugin_dir_path( __FILE__ ) . 'classes/*.php' ) as $files ){
            require_once( $files );
        }
        $admin_styles = new CJHS_Admin_Styles( $plugin_slug, $version );
        //$admin_styles = new CJHS_Admin_Scripts( $plugin_slug, $version );
        $admin_menus = new CJHS_Admin_Menus( $plugin_slug, $version );
        $cjhs_register_taxonomies = new CJHS_register_Taxonomies();
        $cjhs_remove_menu_items = new CJHS_Remove_Menu_Items();
        $cjhs_move_author_box = new CJHS_Move_Author_Box();
    }
}