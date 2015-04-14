<?php
/* Template Name: Home */ 
get_header();
?>
<div class="home-page">
    <div class="slider-wrapper">
        <div class="ribbon"></div>
        <div id="nivoslider-1359" class="nivoSlider">
            <?php
                $query = new WP_Query(array(
                            'post_type'     => 'background',
                            'posts_per_page'    => -1,
                            'orderby'           => 'rand'
                        ));
                while ($query->have_posts()) : $query->the_post();
                $image = get_field('background_image');
                $image_full = get_field('full_image');
                $caption = get_field('full_image_caption');
                if(get_field('background_image')):
            ?>
            <a href="<?php echo $image_full['url']; ?>" class="fancybox" title="<?php echo $caption; ?>">
                <img src="<?php echo $image['url']; ?>" alt="" />
            </a>
            <?php endif; endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="touts clearfix">
        <div class="touts-group-1">
            <?php cjhs_event_tout();?>  
            <?php cjhs_news_tout();?>
        </div>
        <div class="touts-group-2">
            <?php echo cjhs_past_perfect_tout();?>
            <?php cjhs_feat_hist_tout();?>
        </div>
    </div>
</div>
<?php get_footer(); ?>