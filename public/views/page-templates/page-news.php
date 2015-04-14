<?php 
/* Template Name: News */ 
get_header();
get_sidebar();
?>
<div id="primary" class="primary">
	<div id="content" role="main" class="events">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php endwhile; endif; ?>
		<?php
			$args = array(
			   'post_type' => 'site-news',
			   'posts_per_page' => 20,
			 );
			$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); 
			$rows = get_field( 'cjhs_content_images' );
			$first_row = $rows[0];
			$image = $first_row['cjhs_content_image' ];
            $url = $image['url'];
            $alt = $image['alt'];
            $caption = $image['caption'];
            $size = 'thumbnail';
            $thumb = $image['sizes'][ $size ];
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h3 class="entry-title news__heading"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<ul class="content__thubnails">
					<li>
	                   	<?php if( get_field('cjhs_content_images' ) ) : ?>
							<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"/>
						<?php endif; ?>
	                </li>
				</ul>
			</article>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</div>
</div>
<?php get_footer();?>