<?php
/**
 * Output Alexa Verification meta code
 */
class CJHS_Google_Verification {
    /**
     * Class Constructor
     */
    public function __construct() {
        if( get_field( 'cjhs_google_verification_code', 'options' ) ) {
            add_action( 'wp_head', array( $this, 'google_webmaster_tools' ) );
        }
    }
    public function google_webmaster_tools() {
        echo '<meta name="google-site-verification" content="'. get_field( 'cjhs_google_verification_code', 'options' ) .'" />';
        echo "\r\n";
    }
}