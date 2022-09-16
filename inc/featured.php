<?php
// Query featured entries
$featured = new WP_Query(
	array(
		'no_found_rows'				=> false,
		'update_post_meta_cache'	=> false,
		'update_post_term_cache'	=> false,
		'ignore_sticky_posts'		=> 1,
		'posts_per_page'			=> absint( get_theme_mod('featured-posts-count','4') ),
		'cat'						=> absint( get_theme_mod('featured-category','') )
	)
);
?>

<?php if ( is_home() && !is_paged() && ( get_theme_mod('featured-posts-count', '4') !='0') ): ?>
<div class="container-inner">	
	<div class="featured-posts group <?php 
		if ( get_theme_mod('featured-posts-count', '4') =='1') { echo 'featured-count-1'; } 
		if ( get_theme_mod('featured-posts-count', '4') =='2') { echo 'featured-count-2'; } 
		if ( get_theme_mod('featured-posts-count', '4') =='3') { echo 'featured-count-3'; } 
		if ( get_theme_mod('featured-posts-count', '4') =='4') { echo 'featured-count-4'; } 
		if ( get_theme_mod('featured-posts-count', '4') =='5') { echo 'featured-count-5'; } 
	?>">

		<?php while ( $featured->have_posts() ): $featured->the_post(); ?>
			<?php get_template_part('content-featured'); ?>
		<?php endwhile; ?>
		
		<?php if ( ( get_theme_mod( 'featured-title' ) != '' ) ): ?>
			<div class="featured-category-title"><span><?php echo esc_html( get_theme_mod('featured-title') ); ?></span></div>
		<?php endif; ?>
	</div>
</div>
<div class="clear"></div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>