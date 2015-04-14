<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="primary" class="primary">
    <div id="content" role="main" class="news">
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <div class="o-sidebar"> 
                <?php cjhs_thumbnail_display(); ?>
            </div>
        <?php endwhile; wp_reset_postdata();?>
        <?php 
        if('open' == $post->comment_status) :
            comments_number(  '<h4 class="entry-title">Have something to add to this News? Leave a comment</h4>', 
                                    '<h4 class="entry-title">This News has 1 comment, view comments</h4>', 
                                    '<h4 class="entry-title">This News has % comments, view comments</h4>' );
            comments_template();
        endif;
        ?>
    </div>
</div>
<?php get_footer();?>