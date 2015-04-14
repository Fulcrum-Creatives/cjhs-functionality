<?php
/**
 * Creates a copywrite based on the first published post through the current year
 */
if( !function_exists( 'cjhs_auto_copyright' ) ) {
    function cjhs_auto_copyright( $year = 'auto' ){
        CJHS_Auto_Copyright::init( $year );
    } 
// If another function is with the same name is called stop processing and output the error message
} else {
    echo 'The function <strong>cjhs_auto_copyright()</strong> already exists!';
    die;
}