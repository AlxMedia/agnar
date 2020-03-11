<?php get_header(); ?>

<?php
	$curr_cat = get_category( $cat );
	$cat_name = ( $curr_cat ) ? $curr_cat->slug : '';
	$loop_featured = new WP_Query(
		array(
			'category_name' => $cat_name,
			'posts_per_page' => get_theme_mod( 'featured-posts-count-category', '4' ),
		));
	$ids = array();
?>

<?php if ( get_theme_mod( 'featured-posts-count-category', '4' ) !='0'): ?>
<div class="container-inner">
	<div class="featured-posts group <?php 
		if ( get_theme_mod('featured-posts-count-category', '4') =='1') { echo 'featured-count-1'; } 
		if ( get_theme_mod('featured-posts-count-category', '4') =='2') { echo 'featured-count-2'; } 
		if ( get_theme_mod('featured-posts-count-category', '4') =='3') { echo 'featured-count-3'; } 
		if ( get_theme_mod('featured-posts-count-category', '4') =='4') { echo 'featured-count-4'; } 
		if ( get_theme_mod('featured-posts-count-category', '4') =='5') { echo 'featured-count-5'; } 
	?>">
		<?php

			while ( $loop_featured->have_posts() ) : $loop_featured->the_post();
				$ids[] = get_the_ID();
				get_template_part('content-featured');
			endwhile;
			wp_reset_postdata();
		?>
		<div class="featured-category-title"><span><?php echo single_cat_title('', false); ?></span></div>
	</div>
</div><!--/.container-inner-->
<div class="clear"></div>
<?php endif; ?>

<div class="container-inner">
	<div class="flex-wrapper">
		<div class="flex-group flex-left">
		
		<?php if ((category_description() != '') && !is_paged()) : ?>
			<div class="page-title group">
				<div class="pad group">
					<div class="category-description">
						<i class="fas fa-arrow-circle-right"></i>
						<?php echo category_description(); ?>
					</div>
				</div><!--/.pad-->
			</div><!--/.page-title-->
		<?php else: ?>
			<div class="category-splitter"></div>
		<?php endif; ?>
		
		<?php
			if ( get_query_var('paged') ) {
				$paged = get_query_var('paged');
			} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
				$paged = get_query_var('page');
			} else {
				$paged = 1;
			}

			$custom_query_args = array(
				'post_type' => 'post', 
				'posts_per_page' => get_option('posts_per_page'),
				'paged' => $paged,
				'post_status' => 'publish',
				'ignore_sticky_posts' => true,
				'post__not_in' => $ids,
				'category_name' => $cat_name,
				'order' => 'DESC',
				'orderby' => 'date'
			);
			$custom_query = new WP_Query( $custom_query_args );

			if ( $custom_query->have_posts() ) :
			 ?>
					
			<?php if ( get_theme_mod('blog-layout','blog-grid') == 'blog-grid' ) : ?>
				<ul class="flex-contain group">
					<?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
						<?php get_template_part('content'); ?>
					<?php endwhile; ?>
				</ul><!--/.flex-contain-->
			<?php elseif ( get_theme_mod('blog-layout','blog-grid') == 'blog-list' ) : ?>
				<ul class="flex-list group">
					<?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
						<?php get_template_part('content-list'); ?>
					<?php endwhile; ?>
				</ul><!--/.flex-list-->
			<?php endif; ?>
			
			<?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
			<?php
				$orig_query = $wp_query; // fix for pagination to work
				$wp_query = $custom_query;
			?>
			<?php get_template_part('inc/pagination'); ?>

			<?php $wp_query = $orig_query; // fix for pagination to work ?>
			<?php endif; ?>

			<?php wp_reset_postdata(); endif; ?>

		</div><!--/.flex-group-->
		
	<?php get_sidebar(); ?>

	</div><!--/.flex-wrapper-->
</div><!--/.container-inner-->

<?php get_footer(); ?>