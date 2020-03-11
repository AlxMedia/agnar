<?php get_header(); ?>

<div class="container-inner">
	<div class="flex-wrapper">
		<div class="flex-group flex-left">
		
			<?php get_template_part('inc/page-title'); ?>
			
			<div class="notebox">
				<div class="pad">
					<?php get_search_form(); ?>
				</div>
			</div>
			
			<div class="flex-contain group">
				<div class="flex-inner">
					
					<div class="entry">
						<p><?php esc_html_e( 'The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'agnar' ); ?></p>
					</div>

				</div><!--/.flex-inner-->
			</div><!--/.flex-contain-->

		</div><!--/.flex-group-->
		
	<?php get_sidebar(); ?>

	</div><!--/.flex-wrapper-->
</div><!--/.container-inner-->

<?php get_footer(); ?>