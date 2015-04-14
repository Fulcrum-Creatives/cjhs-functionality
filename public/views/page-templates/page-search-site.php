<?php 
/* Template Name: Search Site */ 
get_header();
get_sidebar();
?>
<div id="primary" class="primary">
	<div id="content" role="main">
		<div class="entry-content search-site">
			<article id="post-0" class="post hentry">
			<header class="entry-header">
				<h1 class="entry-title">
					<?php _e( 'Type your search inquiry here to search the Columbus Jewish Historical Society website', 'cjhs-functionality' ); ?>
				</h1>
			</header><!-- .entry-header -->						
			<div class="refine">
				<?php get_search_form(); ?>
				<div class="options">
					<strong>Show me only results from:</strong>
					<p>
						<a href="<?php echo $base_search_url; ?>&refine=oral_histories" class="label" data-refine="oral_histories"><?php _e( 'Oral Histories', 'cjhs-functionality' ); ?></a> 
						<a href="<?php echo $base_search_url; ?>&refine=topy_photos" class="label" data-refine="topy_photots"><?php _e( 'Topy Photos', 'cjhs-functionality' ); ?></a> 
						<a href="<?php echo $base_search_url; ?>&refine=events" class="label" data-refine="events"><?php _e( 'Exhibits', 'cjhs-functionality' ); ?></a> 
						<a href="<?php echo $base_search_url; ?>&refine=pages" class="label" data-refine="pages"><?php _e( 'Sections', 'cjhs-functionality' ); ?></a> 
						<a href="<?php echo $base_search_url; ?>&refine=news" class="label" data-refine="news"><?php _e( 'News', 'cjhs-functionality' ); ?></a> 
					</p>
				</div>
				<a href="#" class="label search-submit">><?php _e( 'Search Site', 'cjhs-functionality' ); ?></a> 
			</div>
			</article><!-- #post-0 -->
		</div>
		<? add_touts(get_the_ID()); ?>
	</div>
</div>
<?php get_footer();?>