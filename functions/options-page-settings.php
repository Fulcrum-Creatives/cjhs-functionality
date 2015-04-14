<?php
if( function_exists('acf_add_options_sub_page' ) ) {
    acf_add_options_sub_page( array(
        'title' => 'Theme Settings',
        'parent' => 'options-general.php',
        'capability' => 'manage_options'
    ) );
}