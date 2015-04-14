<?php
/**
 * Choose the default Site Name and Tagline, Header Image and Tagline,
 * or custom Image and Tagline
 */
if( !function_exists( 'cjhs_header_logo' ) ){
    function cjhs_header_logo( $args = array() ){
        CJHS_Header_Logo::init( $args );
    }
// If another function is with the same name is called stop processing and output the error message
} else {
    echo 'The function <strong>cjhs_header_logo()</strong> already exists!';
    die;
}