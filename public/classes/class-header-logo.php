<?php
/**
 * Display the Featured Header
 */
class CJHS_Header_Logo {
    /**
     * Display custom header based on the set parameters
     *
     * @param array $args The user defined settings
     */
    public static function init( $args = array() ){
        global $plugin_slug;
        $defaults = array(
              'type'    => '',
              'tagline' => false,
              'alt'     => get_bloginfo('name')
          );
        $args = array_merge( $defaults, $args );
        extract( $args );
        switch ($type) {
            // If is header-image
            case 'header-image':
                // if current theme doesn't supports 'custom-header' output error box
                if( !current_theme_supports( 'custom-header' ) ) {
                    $alert_args = array(
                        'type'      => 'warning',
                        'heading'   => __('This theme does not have Custom Header Support!', $plugin_slug ),
                        'message'   => __('Please enable Custom Header Support', $plugin_slug )
                    );
                    // Call the Alert Class
                    \FT\Classes\Alerts::init( $alert_args );
                } else {
                    echo '<h1 class="site-heading">
                        <a href="' . home_url() . '" class="site-header-image header-link" itemprop="url">
                            <img src="'; header_image(); echo '" height="' . get_custom_header()->height . '" width="' . get_custom_header()->width . ' " alt="' . $alt . '" itemprop="image"/>
                        </a>
                        <div class="ir" itemprop="name">'; bloginfo('name'); echo '</div>
                    </h1>';
                    if( $tagline == true && get_bloginfo( 'description' ) != '' ) {
                        echo '<p class="tagline" itemprop="description">' . bloginfo( 'description' ) . '</p>';
                    }
                }
            break;
            // If type is custom
            case 'custom':
                    echo '<h1 class="site-heading">
                        <a href="' . home_url() . '" class="site-header-image header-link" itemprop="url"></a>
                        <div class="ir" itemprop="name">'; bloginfo( 'name' ); echo '</div>
                    </h1>';
                    if( $tagline == true && get_bloginfo( 'description' ) != '' ) {
                        echo '<p class="tagline" itemprop="description">' . bloginfo( 'description' ) . '</p>';
                    }
            break;
            // Deafult
            default:
                echo '<h1 class="site-heading">
                    <a href="' . home_url() . '" calss="site-header-text header-link" itemprop="url">
                        <span itemprop="name">'; bloginfo( 'name' ); echo '</span>
                    </a>
                </h1>';
                if( $tagline == true && get_bloginfo( 'description' ) != '' ) {
                    echo '<p class="tagline" itemprop="description">' . bloginfo( 'description' ) . '</p>';
                }
            break;
        }
    }
}