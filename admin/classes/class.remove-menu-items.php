<?php


/**
 * Remove Admin Menu Items
 */
 
 
class CJHS_Remove_Menu_Items {
    /**
     * Class Constructor
     */
    public function __construct() {
        add_action('admin_menu', array( $this, 'post_remove' ) );
    }
    /**
     * Add the Taxanomy Menu Items
     */
    public function post_remove (){ 
       remove_menu_page('edit.php');
    }
}
