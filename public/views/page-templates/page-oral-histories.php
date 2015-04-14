<?php 
/* Template Name: Oral histories */ 
get_header();
get_sidebar(); 
?>
<div id="primary" class="primary">
	<div id="content" role="main" class="oral-histories">
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			get_template_part( 'content', 'single' );
		endwhile; endif; ?>
		<div class="o-sidebar">
			<div class="touts sponsored disclaimer web_sponsor sponsor">
				<a href="<?php echo get_permalink( '351' ); ?>">
					<?php _e( '<strong class="no-sponsor">Sponsor an oral history <em>and your<br>family receives<br>recognition</em></strong>', 'cjhs-functionality' ); ?>
				</a>																								
			</div>
			<div class="touts sponsored disclaimer web_sponsor ">
				<a href="<?php echo get_permalink( '689' ); ?>">
					<?php _e( '<strong class="no-sponsor">Unpublished<br>Oral Histories</em></strong>', 'cjhs-functionality' ); ?>
				</a>																								
			</div>
		</div>
		<div class="entry-content">
			<div class="o-histories">
				<span class="label"><?php _e( 'Alphabetical', 'cjhs-functionality' ); ?></span>
				<p><?php _e( 'Can\'t find the name of the person you\'re looking for? Click here to view a list of unpublished oral histories.', 'cjhs-functionality' ); ?></p>
				<p><?php _e( 'Indicates Sponsorship', 'cjhs-functionality' ); ?> <span class="sponsor-indicate"></span></p>
				<div class="o-nav">
					<a href="#" class="label sele" data-osection="all" data-osplit="10">All</a>
					<a href="#" class="label" data-osection="af" data-osplit="0">A-F</a>
					<a href="#" class="label" data-osection="gl" data-osplit="2">G-L</a>
					<a href="#" class="label" data-osection="mr" data-osplit="2">M-R</a>
					<a href="#" class="label" data-osection="sz" data-osplit="1">S-Z</a>
				</div>
				<div class="pull-left"></div>
				<div class="pull-right"></div>
				<div class="letter hide" data-letter="a">
					<span class="label">A</span>
					<ul>
			<?php
				$querystr = "
					SELECT DISTINCT wposts.*
					FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta, $wpdb->postmeta wpostmeta2
					WHERE wposts.ID = wpostmeta.post_id
					AND wposts.ID = wpostmeta2.post_id
					AND wpostmeta.meta_key = 'last_name'
					AND wpostmeta2.meta_key = 'first_name'
					AND wposts.post_type = 'oral_histories'
					AND wposts.post_status = 'publish'
					ORDER BY wpostmeta.meta_value ASC, wpostmeta2.meta_value ASC
				";
				$pageposts = $wpdb->get_results( $querystr, OBJECT );
				$last_letter = 'A';
				$x = 1;
				if ( $pageposts ) :
					foreach ( $pageposts as $post ) :
						setup_postdata( $post );
						$o_last_name = get_post_meta($post->ID, 'last_name', true);
						$o_first_name = get_post_meta($post->ID,'first_name',true);
						$last_name_letter = strtoupper(substr($o_last_name, 0,1));
						$oral_name = $o_last_name.', '. $o_first_name;
						$o_permalink = get_permalink( $post->ID );
						$o_sponsored = '';
						if( $last_name_letter !== $last_letter ) :  ?>
						</ul>
					</div>	
					<div class="letter hide" data-letter="<?=strtolower($last_name_letter);?>">
						<span class="label"><?php echo $last_name_letter; ?></span>
						<ul>
						<?php 
						endif;
						// Sponsored Span
						if(get_field('sponsored_by')):
							$o_sponsored = '&nbsp;<span class="sponsor-indicate"></span>';
						endif;
						echo '<li><a href="'.$o_permalink.'">'.$oral_name.$o_sponsored.'</a></li>';
						$last_letter = $last_name_letter;
						$x+=1;
					endforeach;
				endif;
				?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
