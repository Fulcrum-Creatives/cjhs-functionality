<?php
/**
 * Custom Title tage
 */
class CJHS_Title_Tag {
    /**
     * Display title based on page type
     *
     * @param array $args The user defined settings
     */
    public static function init( $args = array() ) {
        global  $page, 
                $paged;
        $defaults = array(
            'separator'     => '|',
            'search_text'   => 'Search Results for',
            'error_text'    => 'Page Not Found',
            'archive_text'  => 'Archive :'
        );
        $args = array_merge( $defaults, $args );
        extract( $args );
        switch( true ) {
            // If is the home page
            case ( is_home() ) :
                bloginfo( 'name' );
                if ( $paged > 1 )
                    echo ' : Page '. $paged;
                break;
            // If is a page or a single
            case ( is_page() ) :
            case ( is_single() ) :
                bloginfo( 'name' );
                echo ' ' . $separator . ' ';
                wp_title( '', 'echo', 'right' );
                if ( $paged > 1) 
                    echo ' : Page '. $paged;
                break;
            // If is the search results page
            case ( is_search() ) :
                bloginfo( 'name' );
                echo ' ' . $separator . ' ';
                _e( $search_text, DOMAIN) ;
                echo ' ' . get_query_var('s');
                if ( $paged > 1 )
                    echo ' : Page '. $paged;
                break;
            // If is the author page
            case ( is_author() ) :
                bloginfo( 'name' );
                echo ' ' . $separator . ' ';
                wp_title( '', 'echo', 'right' );
                break;
            // If is the 404 error page
            case ( is_404() ) :
                bloginfo( 'name' );
                echo ' ' . $separator . ' ';
                _e( $error_text, DOMAIN ) ;
                break;
            // If is a category page
            case ( is_category() ) :
                bloginfo( 'name' );
                echo ' ' . $separator . ' ';
                wp_title( '', true, 'right' );
                break;
            // If is a tag page
            case ( is_tag() ) :
                bloginfo( 'name' );
                echo ' ' . $separator . ' ';
                wp_title( '', true, 'right' );
                break;
            // If is an archive page
            case ( is_archive() ) :
                bloginfo( 'name' );
                echo ' ' . $separator . ' ';
                _e( $archive_text, DOMAIN );
                echo ' ';
                wp_title( '', true, 'right' );
                break;
            // Default
            default:
                bloginfo( 'name' );
                echo ' ' . $separator . ' ';
                wp_title( '', true, 'right' );
                if ( $paged > 1 )
                    echo ' : page '. $paged;
                break;
        }
    }
}