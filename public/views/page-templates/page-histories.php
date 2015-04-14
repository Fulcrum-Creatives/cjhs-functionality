<?php 
/* Template Name: Histories */ 
get_header();
get_sidebar(); 
?>
<div id="primary" class="primary">
	<div id="content" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
		<div class="o-sidebar">									
			<ul class="histories-aside">
				<li>
					<?php get_history_side_photo(get_the_id(),1) ?>
				</li>
				<li>
					<?php get_history_side_photo(get_the_id(),2) ?>
				</li>
				<li>
					<?php get_history_side_photo(get_the_id(),3) ?>
				</li>
			</ul>
		</div>
		<?php add_touts(get_the_ID()); ?>
		<?php endwhile; endif; ?>

		<div class="entry-content">

			<div class="web-sponsors o-histories oral-history-entry">

				<div class="coh-histories">
					<ul class="coh-histories">
						<?php 
						$args = array(
						   'post_type' => 'histories',
						   'posts_per_page' => -1,
						  	);
						$loop = new WP_Query( $args );
						?> 
						<?php 
						while ( $loop->have_posts() ) : $loop->the_post(); 
						if( get_field('cjhs_content_images' ) ) {
							$rows = get_field( 'cjhs_content_images' ); // get all the rows
							$first_row = $rows[0]; // get the first row
							$image = $first_row['cjhs_content_image' ]; // get the sub field value
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
								<a href="<?php the_permalink()?>">
									<h4><strong><?php the_title(); ?></strong></h4>
								</a>
								<ul class="coh-hist-button">
									<li><a class="label" href="<?php the_permalink()?>">View History</a>
								</ul>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
				</div>
			</div>

		</div>

	</div>
</div>
<?php get_footer();?>
