<?php
get_header();
get_sidebar(); 
?>
<div id="primary" class="primary">
    <div id="content" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title">Topy Photo Collection</h1>
            </header>
            <div class="entry-content">
                <nav class="nav-single">
                    <span class="nav-next">
                        <?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
                    </span>
                </nav>
                <?php
                $post_id = get_the_ID();
                if( get_field('topy_photo') ) {
                    $image = get_field('topy_photo');
                    $url = $image['url'];
                    $alt = get_the_title();
                    $caption = get_the_title();
                    $size = 'large';
                    $thumb = $image['sizes'][ $size ];
                    echo '<a href="'. $url .'" title="'. $caption .'" class="fancybox-img">';
                        echo '<img src="'. $thumb .'"  alt="'. $alt .'" />';
                    echo'</a>';
                }
                the_content(); ?>
                <div id="other-topy-images" class="jThumbnailScroller">
                    <div class="jTscrollerContainer">
                        <div class="jTscroller">
                            <?php
                            $topy_query = new WP_Query( array(   'post_type' => 'topy_photos', 
                                                            'posts_per_page' => -1,  
                                                            'order' => 'ASC' 
                                                        ));
                            while ( $topy_query->have_posts() ) : $topy_query->the_post(); 
                                $attachment_id = get_post_meta( $post->ID , 'topy_photo', true);
                                $size = "thumbnail";
                                $image = wp_get_attachment_image_src( $attachment_id, $size );
                            ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo $image[0]; ?>" width="<?php echo $image[1];?>" /> 
                            </a>
                            <?php endwhile; wp_reset_postdata();?>
                        </div>
                    </div>
                    <a href="#" class="jTscrollerPrevButton"></a>
                    <a href="#" class="jTscrollerNextButton"></a>
                </div>
            </div>
        </article>
        <?php 
        endwhile; wp_reset_postdata(); 
        if('open' == $post->comment_status) :
            comments_number(  '<h4 class="entry-title">Have something to add to this Topy Photo? Leave a comment</h4>', 
                                    '<h4 class="entry-title">This Topy Photo has 1 comment, view comments</h4>', 
                                    '<h4 class="entry-title">This Topy Photo has % comments, view comments</h4>' );
            comments_template();
        endif;
        ?>
    </div>
</div>
<?php get_footer();?>