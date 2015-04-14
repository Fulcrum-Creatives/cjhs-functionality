<?php
/**
 * Move the Author Meta Box
 */
class CJHS_Move_Author_Box {
    /**
     * Class Constructor
     */
    public function __construct() {
        add_action( 'admin_menu', array( $this, 'remove_author_metabox' ) );
        add_action( 'post_submitbox_misc_actions', array( $this, 'move_author_to_publish_metabox' ) );
    }
    /**
     * Remove standard autor meta box
     */
    public function remove_author_metabox() {
        remove_meta_box( 'authordiv', 'post', 'normal' );
    }
    /**
     * Create new author meta box in 'Publish'
     */
    public function move_author_to_publish_metabox() {
        global $post_ID;
        $post = get_post( $post_ID );
        echo '<div id="author" class="misc-pub-section" style="border-top-style:solid; border-top-width:1px; border-top-color:#EEEEEE; border-bottom-width:0px;">Author: ';
        post_author_meta_box( $post );
        echo '</div>';
    }
}