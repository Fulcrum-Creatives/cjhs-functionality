<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="primary" class="primary">
    <div id="content" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
<?php $name_array = explode(' ', get_the_title());
    $o_name = '';
    foreach($name_array as $name){
        $o_name .= ' ' . $name;
    }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?= $o_name ?></h1>
    </header>
    <div class="entry-content">
        <?php
        $post_id = get_the_ID();
        if( get_post_meta($post_id, 'oh_photo', true)):
            cjhs_show_image_with_caption($post_id, 'oh_photo', 'full', 'o_gallery');
        endif; ?>
        <div class="o-sidebar">
            <div class="touts sponsored disclaimer web_sponsor">
                <?php 
                $post_objects = get_field('sponsored_by');
                if( $post_objects ): 
                ?>
                <div class="sponsor-box">
                    <a href="<?php echo get_permalink( '351' ); ?>">
                        <?php _e( '<span class="sponsor-sml-txt">THIS ORAL HISTORY IS <strong>Sponsored By:</strong></span>', 'cjhs-functionality' ); ?>
                    </a>
                </div>
                    <ul class="sponsors-listed">
                    <?php foreach( $post_objects as $post): ?>
                        <?php setup_postdata($post); ?>
                           <li>
                            <?php the_title(); ?>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                    <?php wp_reset_postdata(); else: ?>
                <div class="sponsor-box">
                    <a href="/?page_id=314">
                        <?php _e( '<strong class="no-sponsor">Sponsor <em class="sponsor-sml-txt">THIS ORAL HISTORY</span></strong>', 'cjhs-functionality' ); ?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <?=get_oh_side_photo($post_id,2)?>
            <?=get_oh_side_photo($post_id,3)?>
            <?=get_oh_side_photo($post_id,4)?>
            <?=get_oh_side_photo($post_id,5)?>
        </div>
        <?php the_content(); ?>
    </div>
</article>
        <?php 
        endwhile; wp_reset_postdata(); 
        if('open' == $post->comment_status) :
            comments_number(  '<h4 class="entry-title">Have something to add to this Oral History? Leave a comment</h4>', 
                                    '<h4 class="entry-title">This Oral History has 1 comment, view comments</h4>', 
                                    '<h4 class="entry-title">This Oral History has % comments, view comments</h4>' );
            comments_template();
        endif;
        ?>
    </div>
</div>
<?php get_footer();?>