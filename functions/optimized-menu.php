<?php
/**
 * Create an Optimized menu using transients
 */
if( !function_exists( 'cjhs_optimized_menu' ) ){
    function cjhs_optimized_menu( $args = array() ){
        CJHS_Optimized_Menu::init( $args );
    }
// If another function is with the same name is called stop processing and output the error message
} else {
    echo 'The function <strong>cjhs_optimized_menu()</strong> already exists!';
    die;
}