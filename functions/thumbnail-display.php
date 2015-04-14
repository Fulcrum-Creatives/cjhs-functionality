<?php
/**
 * Creates a copywrite based on the first published post through the current year
 */
if( !function_exists( 'cjhs_thumbnail_display' ) ) {
    function cjhs_thumbnail_display(){
        CJHS_Thumbnail_Display::init();
    } 
// If another function is with the same name is called stop processing and output the error message
} else {
    echo 'The function <strong>cjhs_thumbnail_display()</strong> already exists!';
    die;
}