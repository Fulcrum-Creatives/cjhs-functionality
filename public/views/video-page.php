<?php
$links_query = new WP_Query(array(
    'post_type'         => 'videos',
    'posts_per_page'    => -1
));
$post_count = '';
$html = '';
while ( $links_query->have_posts() ) : $links_query->the_post();
    $url = get_field( 'cjhs_video_embed_url' );
    $thumb = str_replace( 'http://youtu.be/', '', $url );
    $screenshot = get_field( 'cjhs_video_screenshot' );
    $post_count++;
    $html .= '<section class="videos videos__page clearfix">';
    $html .= '<div class="videos__thumb"><a href="';
    $html .= get_permalink(); 
    $html .= '"><div class="videos__overlay"></div><img src="http://img.youtube.com/vi/';
    $html .= $thumb;
    $html .= '/';
    $html .= $screenshot;
    $html .= '.jpg" alt"';
    $html .= get_the_title();
    $html .= '" /></a></div>';
    $html .= '<header class="video__heading"><h2 id="heading-';
    $html .= $post_count;
    $html .= '" class="videos__title"><a href="';
    $html .= get_permalink();
    $html .= '" title="';
    $html .= get_the_title();
    $html .= '">';
    $html .= get_the_title();
    $html .='</a></h2>';
    $html .='<p>';
    $html .= get_the_excerpt();
    $html .='<p>';
    $html .= '<div class="videos__button"><a href="';
    $html .= get_permalink();
    $html .= '">';
    $html .= __( 'View Video', 'cjhs-functionality');
    $html .= '</a></div></header>';
    $html .= '</section>';
endwhile; wp_reset_query();
?>