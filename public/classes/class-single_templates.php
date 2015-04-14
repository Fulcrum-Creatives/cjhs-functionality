<?php
/**
 * Load the Public Scripts
 */
class CJHS_Single_Templates {
    /**
     * Class Constructor
     *
     * @param string $plugin_slug The plugin slug
     * @param string $version The plugin version 
     */
    public function __construct() {
        add_filter( 'single_template', array( $this, 'single_template' ) );
    }
    public function single_template() {
        global $post;
        $single_template = '';
        if ($post->post_type == 'videos') {
            $single_template = plugin_dir_path( __FILE__ ) . '../views/single-templates/video-single.php';
        }
        if ($post->post_type == 'topy_photos') {
            $single_template = plugin_dir_path( __FILE__ ) . '../views/single-templates/toby-photos-single.php';
        }
        if ($post->post_type == 'oral_histories') {
            $single_template = plugin_dir_path( __FILE__ ) . '../views/single-templates/oral-histories-single.php';
        }
        if ($post->post_type == 'histories') {
            $single_template = plugin_dir_path( __FILE__ ) . '../views/single-templates/histories-single.php';
        }
        if ($post->post_type == 'site-news') {
            $single_template = plugin_dir_path( __FILE__ ) . '../views/single-templates/news-single.php';
        }
        return $single_template;
    }
}