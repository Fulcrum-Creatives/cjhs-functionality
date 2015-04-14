<?php
/**
 * Load the Text Domain for localization
 */
class CJHS_Thumbnail_Display {
    /**
     * Add the thumbnails with lightbox link
     */
    public static function init() {
        if( have_rows('cjhs_content_images') ):
            echo '<ul class="content__thubnails">';
            while ( have_rows('cjhs_content_images') ) : the_row();
                $image = get_sub_field('cjhs_content_image');
                $url = $image['url'];
                $alt = $image['alt'];
                $caption = $image['caption'];
                $size = 'thumbnail';
                $thumb = $image['sizes'][ $size ];
                echo '<li>';
                    echo '<a href="'. $url .'" title="'. $caption .'" class="fancybox-img">';
                        echo '<img src="'. $thumb .'"  alt="'. $alt .'" />';
                    echo'</a>';
                echo '</li>';
            endwhile;
            echo '</ul>';
        endif;
    }
}