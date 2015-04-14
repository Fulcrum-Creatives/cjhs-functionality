<?php
/**
 * Output the title for the title tag based on what kind of page is being desplayed
 */
if( !function_exists( 'cjhs_title_tag' ) ) {
    function cjhs_title_tag( $args = array() ) {
        CJHS_Title_Tag::init( $args );
    }
// If another function is with the same name is called stop processing and output the error message
} else {
    echo 'The function <strong>cjhs_title_tag()</strong> already exists!';
    die;
}