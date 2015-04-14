<?php
get_header();
get_sidebar(); 
?>
<div id="primary" class="primary">
    <div id="content" role="main" class="videos">
        <?php 
        while ( have_posts() ) : the_post(); 
        $url = get_field( 'cjhs_video_embed_url' );
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <div class="entry-content">
                <div class="videos">
                    <div class="videos__display">
                        <?php echo wp_oembed_get( $url ); ?>
                    </div>
                </div>
                
                <div class="videos__content"><?php the_content(); ?></div>
                
            </div>
            <footer class="entry-meta">
            </footer>
        </article>
        <?php 
        endwhile; wp_reset_postdata();
        if('open' == $post->comment_status) :
            comments_number(  '<h4 class="entry-title">Have something to add to this Video? Leave a comment</h4>', 
                                    '<h4 class="entry-title">This Video has 1 comment, view comments</h4>', 
                                    '<h4 class="entry-title">This Video has % comments, view comments</h4>' );
            comments_template();
        endif;       
        ?>
    </div>
</div>
<?php get_footer();?>