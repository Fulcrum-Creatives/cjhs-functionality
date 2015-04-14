<?php
/**
 * Output Alexa Verification meta code
 */
class CJHS_Alexa_Verification {
    /**
     * Class Constructor
     */
    public function __construct() {
        if( get_field( 'cjhs_alexa_verification_code', 'options' ) ) {
            add_action( 'wp_head',array( $this, 'alexa_verification' ) );
        }
    }
    public function alexa_verification() {
        echo '<meta name="alexaVerifyID" content="'. get_field( 'cjhs_alexa_verification_code', 'options' ) .'" />';
        echo "\r\n";
    }
}