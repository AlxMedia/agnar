<?php get_header(); ?>

<div class="container-inner">
	<div class="flex-wrapper">
		<div class="flex-group flex-left">
		
		<?php get_template_part('inc/page-title'); ?>
		
		<div class="notebox">
			<div class="pad">
				<?php esc_html_e('For the term','agnar'); ?> "<span><?php echo get_search_query(); ?></span>".
				<?php if ( !have_posts() ): ?>
					<?php esc_html_e('Please try another search:','agnar'); ?>
				<?php endif; ?>
				<div class="search-again">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>	
		
		<?php if ( have_posts() ) : ?>
				
			<?php if ( get_theme_mod('blog-layout','blog-grid') == 'blog-grid' ) : ?>
				<ul class="flex-contain group">
					<?php while ( have_posts() ): the_post(); ?>
						<?php get_template_part('content'); ?>
					<?php endwhile; ?>
				</ul><!--/.flex-contain-->
			<?php elseif ( get_theme_mod('blog-layout','blog-grid') == 'blog-list' ) : ?>
				<ul class="flex-list group">
					<?php while ( have_posts() ): the_post(); ?>
						<?php get_template_part('content-list'); ?>
					<?php endwhile; ?>
				</ul><!--/.flex-list-->
			<?php endif; ?>
			
			<?php get_template_part('inc/pagination'); ?>
			
		<?php endif; ?>

		</div><!--/.flex-group-->
		
	<?php get_sidebar(); ?>

	</div><!--/.flex-wrapper-->
</div><!--/.container-inner-->

<?php get_footer(); ?>
