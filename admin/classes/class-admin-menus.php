<?php
/**
 * Create the Admin menu
 */
class CJHS_Admin_Menus {
    /**
     * Class Constructor
     */
    public function __construct() {
        add_action( 'admin_menu', array( $this, 'add_admin_menus' ) );
        add_action( 'admin_menu', array( $this, 'remove_admun_menu' ) );
        
    }
    /**
     * Add the Taxanomy Menu Items
     */
    public function add_admin_menus() {
        add_submenu_page('edit.php?post_type=custom_posts', 'Sponsor Level', 'Sponsor Level', 'manage_options', 'edit-tags.php?taxonomy=sponsor_level');
        add_submenu_page('edit.php?post_type=custom_posts', 'Award Type', 'Award Type', 'manage_options', 'edit-tags.php?taxonomy=award_type');
    }
    /**
     * Remove the New menu items for menu Post Types
     */
    public function remove_admun_menu(){
        remove_submenu_page( 'edit.php?post_type=custom_posts', 'post-new.php?post_type=custom_posts' );
        remove_submenu_page( 'edit.php?post_type=custom_history', 'post-new.php?post_type=custom_history' );
        remove_submenu_page( 'edit.php?post_type=custom_history', 'edit.php?post_type=custom_history' );
    }
}