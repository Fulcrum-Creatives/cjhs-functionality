<?php
/**
 * Output Bing Verification meta code
 */
class CJHS_Bing_Verification {
    /**
     * Class Constructor
     */
    public function __construct() {
        if( get_field( 'cjhs_bing_verification_code', 'options' ) ) {
            add_action( 'wp_head',array( $this, 'bing_verification' ) );
        }
    }
    public function bing_verification() {
        echo '<meta name="msvalidate.01" content="'. get_field( 'cjhs_bing_verification_code', 'options' ) .'" />';
        echo "\r\n";
    }
}