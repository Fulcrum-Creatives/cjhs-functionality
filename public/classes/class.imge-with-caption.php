<?php
/**
 * Image With Caption
 */
class CJHS_Image_With_Caption {
    /**
     * Use the image attachment caption for the link title attribute
     * @param  int $post_id             the post ID
     * @param  string $image_type       the type of image to display
     * @param  string $image_size       the size of image to display
     * @param  string $link_rel         optional: the rel attribute
     * @param  string $image_classes    optional: additional classes to add to the image tag
     * @return mixed                    output the link and image tags
     */
    public function init( $post_id, $image_type, $image_size = 'full', $link_rel = '', $image_classes = '' ){
        $attachment_id = get_post_meta($post_id, $image_type, true);
        $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
        $url =  wp_get_attachment_image_src($attachment_id, $image_size );
        $linkurl =  wp_get_attachment_image_src($attachment_id, 'large' );
        $title = the_title();
        $caption = get_post_field('post_excerpt', cjhs_get_attachment_id( $url[0] ));
        echo '<a href="' . $linkurl[0] . '" rel="' . $link_rel . '" title="' . $caption . '">
        <img src="' . $url[0] . '" alt="' . $alt . '"  class="attachment-' . $image_size . ' ' . $image_classes . '"/>
        </a>';
    }
}