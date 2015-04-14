<?php 
/* Template Name: Wall of Donors */ 
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
            <?php get_sidebar( 'right' ); ?>
		<?php endwhile; endif; ?>
		<div class="o-sidebar">
			<div class="touts sponsored disclaimer web_sponsor">
				<a href="<?php echo get_permalink( '1195' ); ?>"><strong class="no-sponsor"><?php _e( 'Sponsor a Central Ohio History! <em><br>CONTACT CJHS</em>', 'cjhs-functionality' ); ?></strong></a>																	
			</div>
		</div>
		<div class="entry-content">
			<div class="web-sponsors o-histories">
				<?php
				get_sponsor_section(7,'$25,000+');
				get_sponsor_section(6,'$100');
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
