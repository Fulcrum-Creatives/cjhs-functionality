<?php 
/* Template Name: Events */ 
get_header();
get_sidebar(); 
?>
<div id="primary" class="primary events-page">
	<div id="content" role="main" class="events clearfix">				
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1 class="entry-title"><?php the_title()?></h1>
		<?php endwhile; endif;
		if( is_page( 'exhibits-programs' ) || is_page( 'exhibits-programs-2' ) || is_page( 'upcoming' ) ) :
			$args = array(
			   'post_type' => 'events',
			   'posts_per_page' => -1,
			   'meta_key' => 'date',
			   'orderby' => 'date',
			   'order' => 'ASC',
			   'meta_query' => array(
			       array(
			           'key' => 'date_start',
			           'value' => date('Ymd'),
			           'compare' => '>',
		       ))
			);
		elseif( is_page('current-exhibits') ) :
			$args = array(
			   'post_type' => 'events',
			   'posts_per_page' => -1,
			   'meta_key' => 'date',
			   'orderby' => 'date',
			   'order' => 'ASC',
			   'meta_query' => array(
			       array(
			           'key' => 'date',
			           'value' => date('Ymd'),
			           'compare' => '>',
			      ),
			      array(
			           'key' => 'date_start',
			           'value' => date('Ymd'),
			           'compare' => '<',
			      ))
			);
		elseif( is_page('past') ) :
			$args = array(
			   'post_type' => 'events',
			   'posts_per_page' => -1,
			   'meta_key' => 'date',
			   'orderby' => 'date',
			   'order' => 'DESC',
			   'meta_query' => array(
			       array(
			           'key' => 'date',
			           'value' => date('Ymd'),
			           'compare' => '<',
		       ))
			);
		endif;
		$events_loop = new WP_Query( $args );	
		while ( $events_loop->have_posts() ) : $events_loop->the_post();
		?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title() ?></h1>
				</header>
				<div class="entry-content">
					<?php 
					the_content();
					if( get_field( 'display_date' ) ) : 
					?>
						<p><span class="label">Date </span><?php the_field( 'display_date' ); ?></p>
					<?php 
					endif;
					if( get_field( 'location' ) ) : 
					?>
						<p><span class="label">Location</span> <?php the_field( 'location' ); ?></p>
					<?php endif; ?>
				</div>
				<?php cjhs_thumbnail_display(); ?>
			</article>
		<?php endwhile; wp_reset_query(); ?>
	</div>
</div>
<?php get_footer();?>