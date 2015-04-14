<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$links_query = new WP_Query(array(
    'post_type'         => 'custom_link',
    'posts_per_page'    => -1,
    'paged'             => $paged
));
$posts_count = '';
$html = '';
global $wp_query;
while ( $links_query->have_posts() ) : $links_query->the_post();


if( get_post_meta($post_id, 'cjhs_link_logo', true)):
							$attachment_id = get_post_meta($post_id, 'cjhs_link_logo', true);
							$size = "small"; // (thumbnail, medium, large, full or custom size)
							$image = wp_get_attachment_image_src( $attachment_id, $size );		 
						endif;


    $url = get_field( 'cjhs_link_url' );
    $text = get_field( 'cjhs_link_text' );
    $logo = get_field( 'cjhs_link_logo' );
    
    $posts_count++;
    $count_posts = wp_count_posts();

    $html .= '<div class="links">';
    
    $html .= '<div class="links__logo"><a target="_blank" href="';
    $html .= $url;
    $html .= '"><img src="';
    $html .= $logo['url'];
    $html .= '" /></a></div>';
    
    $html .= '<h3 id="heading-';
    $html .= $posts_count;
    $html .= '" class="links__heading"><strong>';
    $html .= get_the_title();
    $html .= '</strong></h3><div class="links__content">';
    $html .= get_the_content();
    $html .= '</div> <div class="links__url"><a href="';
    $html .= $url;
    $html .='"><strong>';
    $html .= $text; 
    $html .= '</strong></a></div></div><hr/>';
endwhile;
wp_reset_query();
?>

