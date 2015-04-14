<?php
/**
 * Load and Initalize Public classes
 */
class CJHS_Public_Init {
    /**
     * Class Constructor
     * 
     * @param string $plugin_slug The plugin slug
     * @param string $version The plugin version 
     */
    public function __construct($plugin_slug, $version) {
        // Load Class Files
        foreach( glob( plugin_dir_path( __FILE__ ) . 'classes/*.php' ) as $files ){
            require_once( $files );
        }
        $cjhs_load_text_domain = new CJHS_Load_Text_Domain( $plugin_slug );
        $cjhs_shortcodes = new CJHS_Shortcodes( $plugin_slug, $version );
        $cjhs_single_templates = new CJHS_Single_Templates();
        //$public_scripts = new CJHS_Public_Scripts( $plugin_slug, $version );
        //$cjhs_public_styles = new CJHS_Public_Styles( $plugin_slug, $version );
        $cjhs_alexa_verification = new CJHS_Alexa_Verification();
        $cjhs_bing_verification = new CJHS_Bing_Verification();
        $cjhs_google_analytics = new CJHS_Google_Analytics();
        $cjhs_google_verification = new CJHS_Google_Verification();
        $cjhs_auto_copyright = new CJHS_Auto_Copyright();
        $cjhs_optimized_menu = new CJHS_Optimized_Menu();
        //$remove_generated_links = new CJHS_Generated_Links();
        $cjhs_page_templates = new CJHS_Page_Templates( $plugin_slug );
    }
}