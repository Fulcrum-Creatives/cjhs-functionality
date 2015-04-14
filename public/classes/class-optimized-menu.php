<?php
/**
 * Autimatiacly set the copyright years
 */
class CJHS_Optimized_Menu {
    /**
     * Creates a transient for the menu
     */
    public static function init( $args = array() ){
        $defaults = array(
            'theme_location'  => '',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        );
        $args = array_merge( $defaults, $args );
        extract( $args );
        $menu = get_transient( $theme_location );
        if( $menu === false ){
            if( has_nav_menu( $theme_location ) ){
                $menu = wp_nav_menu( array(
                    'theme_location'    => $theme_location,
                    'menu'              => $menu,
                    'container'         => $container,
                    'container_class'   => $container_class,
                    'container_id'      => $container_id,
                    'menu_class'        => $menu_class,
                    'menu_id'           => $menu_id,
                    'echo'              => $echo,
                    'fallback_cb'       => $fallback_cb,
                    'before'            => $before,
                    'after'             => $after,
                    'link_before'       => $link_before,
                    'link_after'        => $link_after,
                    'items_wrap'        => $items_wrap,
                    'depth'             => $depth,
                    'walker'            => $walker
                ) );
                set_transient( $theme_location, $menu, 60*60*24 );
            }
        }
        echo $menu;
    } 
}