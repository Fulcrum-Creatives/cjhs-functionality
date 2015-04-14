<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="primary" class="primary">
	<div id="content" role="main" class="histories">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
		<h1 class="entry-title">View More Histories:</h1>
		<div class="web-sponsors o-histories oral-history-entry">
			<div class="coh-histories">
				<ul class="coh-histories clearfix">
					<?php
					$current_post = get_the_ID();
					$args = array(
					   'post_type' => 'histories',
					   'post__not_in' => array($current_post),
					   'posts_per_page' => 4,
					  	);
					$more_loop = new WP_Query( $args );
					while ( $more_loop->have_posts() ) : $more_loop->the_post(); 
					if( get_field('cjhs_content_images' ) ) {
						$rows = get_field( 'cjhs_content_images' );
						$first_row = $rows[0];
						$image = $first_row['cjhs_content_image' ];
		                $url = $image['url'];
		                $alt = $image['alt'];
		                $caption = $image['caption'];
		                $size = 'thumbnail';
		                $thumb = $image['sizes'][ $size ];
		            }
					?>
					<li class="coh-hist-item">
						<div class="coh-hist-item-image">
						<?php if( get_field('cjhs_content_images' ) ) : ?>
							<img src="<?php echo $thumb; ?>" />	
						<?php endif; ?>
						</div>
						<div class="coh-hist-item-details">
							<h4><strong><a href="<?php the_permalink()?>">
								<?php the_title(); ?></strong></h4>
							</a>
							<a class="label" href="<?php the_permalink()?>">View History</a>
						</div>
					</li>
					<?php endwhile; wp_reset_postdata();?>
				</ul>
			</div>
		</div>
		<?php 
		if('open' == $post->comment_status) :
			comments_number( 	'<h4 class="entry-title">Have something to add to this History? Leave a comment</h4>', 
								'<h4 class="entry-title">This History has 1 comment, view comments</h4>', 
								'<h4 class="entry-title">This History has % comments, view comments</h4>' ); 
			comments_template(); 
		endif;
		?>
	</div>
</div>
<?php get_footer();?>