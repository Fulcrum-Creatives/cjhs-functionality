<?php 
/* Template Name: Shop */ 
get_header();
get_sidebar(); 
?>
<div id="primary" class="primary SHOP">
	<div id="content" role="main">
		<div class="shop-header clearfix">
			<div class="shop-header-content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			            <header class="entry-header">
			                <h1 class="entry-title"><?php the_title(); ?></h1>
			            </header>
			            <div class="entry-content">
			                <?php the_content(); ?>
			            </div>
			        </article>
				<?php endwhile; endif; ?>
			</div>
			<div class="cart">
				<?php echo do_shortcode('[show_wp_shopping_cart]'); ?>
			</div>
		</div>
		<div class="entry-content shop-content">
			<div class="o-histories">
				<ul class="shop o-nav">
					<?php 
					$args = array(
					   'post_type' => 'shop',
					   'posts_per_page' => -1,
					);
					$loop = new WP_Query( $args );
					$x = 1;
					while ( $loop->have_posts() ) : $loop->the_post();
						$post_id = get_the_ID();
						if( get_post_meta($post_id, 'shop_photo', true)):
							$attachment_id = get_post_meta($post_id, 'shop_photo', true);
							$size = "thumbnail"; // (thumbnail, medium, large, full or custom size)
							$image = wp_get_attachment_image_src( $attachment_id, $size );		 
							$fullsize_image = wp_get_attachment_image_src( $attachment_id, 'full' );
						endif;
						$price = '';
						if( get_post_meta($post_id, 'price', true)):
							$price = '<span class="price">'.get_post_meta($post_id, 'price', true).'</span>';
						endif;
						$created_by = '';
						if( get_post_meta($post_id, 'created_by', true)):
							$created_by = '<span>by '.get_post_meta($post_id, 'created_by', true).'</span>';
						endif;
						?>
						<?php 
							$title = get_the_title(); 
							$cost = get_post_meta($post_id, 'price', true);
							$shipping = get_post_meta('cart_base_shipping_cost')
						?>
						<li class="shop-item">
							<div class="shop-item-image">
								<img src="<?php echo $image[0]; ?>" />
								<?php 
								if(get_field('sold_out') && in_array('Sold Out', get_field('sold_out'))): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/sold-out.png" alt="Sold Out" class="sold-out"/>
								<?php endif; ?>
							</div>
							<div class="shop-item-details">
								<strong><?php the_title()?></strong>
								<?php echo $price ?>
								<ul class="cart-buttons">
									<li>
										<a class="label fancybox" href="#shop_item_<?php echo $post_id?>">Learn More</a>
									</li>
									<?php if(!get_field('sold_out')): ?>
									<li class="add-to-cart">
										<?php echo print_wp_cart_button_for_product($title,$cost,'0.001'); 
										?>
									</li>
									<?php endif; ?>
								</ul>
							</div>
							<div class="fancybox_wrap">
								<div id="shop_item_<?php echo$post_id?>" class="shop_item">
									<div class="item_image">
										<img src="<?php echo $fullsize_image[0]?>" width="<?php echo $fullsize_image[1]?>" />
									</div>
									<div class="item_desc">
										<h4><?php the_title()?><?php echo $created_by ?></h4>
										<?php the_content() ?>
									</div>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
