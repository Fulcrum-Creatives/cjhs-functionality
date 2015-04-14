<?php
/**
 * Add page templates to the theme
 */
class CJHS_Page_Templates {
    protected $templates;
    /**
     * Class Constructor
     *
     * @param string $plugin_slug The plugin slug
     */
    public function __construct( $plugin_slug ) {
        $this->templates = array();
        $this->plugin_slug = $plugin_slug;
        // Add a filter to the page attributes metabox to inject our template into the page template cache.
        add_filter('page_attributes_dropdown_pages_args', array( $this, 'register_project_templates' ) );
        // Add a filter to the save post in order to inject out template into the page cache
        add_filter('wp_insert_post_data', array( $this, 'register_project_templates' ) );
        // Add a filter to the template include in order to determine if the page has our template assigned and return it's path
        add_filter('template_include', array( $this, 'view_project_template') );
        // Add your templates to this array.
        $this->templates = array(
            'page-events.php'           => __( 'Events Template', $this->plugin_slug ),
            'page-histories.php'        => __( 'Histories Template', $this->plugin_slug ),
            'page-news.php'             => __( 'News Template', $this->plugin_slug ),
            'page-oral-histories.php'   => __( 'Oral Histories Template', $this->plugin_slug ),
            'page-search-site.php'      => __( 'Advanced Search Template', $this->plugin_slug ),
            'page-shop.php'             => __( 'Shop Template', $this->plugin_slug ),
            'page-wall-donors.php'      => __( 'Wall of Donors Template', $this->plugin_slug ),
            'page-home.php'             => __( 'Home Template', $this->plugin_slug ),
        );
        $templates = wp_get_theme()->get_page_templates();
        $templates = array_merge( $templates, $this->templates );
    }
    /**
     * Adds our template to the pages cache in order to trick WordPress
     * into thinking the template file exists where it doens't really exist.
     */
    public function register_project_templates( $atts ) {
        $cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );
        $templates = wp_cache_get( $cache_key, 'themes' );
        if ( empty( $templates ) ) {
            $templates = array();
        }
        wp_cache_delete( $cache_key , 'themes');
        $templates = array_merge( $templates, $this->templates );
        wp_cache_add( $cache_key, $templates, 'themes', 1800 );
        return $atts;
    }
    /**
     * Checks if the template is assigned to the page
     */
    public function view_project_template( $template ) {
        global $post;
        if ( ! isset( $this->templates[ get_post_meta( $post->ID, '_wp_page_template', true ) ] ) ) {
            return $template;
        }
        $file = plugin_dir_path( __FILE__ ) . '../views/page-templates/' . get_post_meta( $post->ID, '_wp_page_template', true );
        if( file_exists( $file ) ) {
            return $file;
        }
        return $template;
    }
    /**
     * Retrieves and returns the slug of this plugin. This function should be called on an instance
     * of the plugin outside of this class.
     */
    public function get_locale() {
        return $this->plugin_slug;
    }

}