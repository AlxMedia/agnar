<?php
/*
Template Name: Child Menu
*/
?>
<?php get_header(); ?>

<div class="container-inner">
	<div class="flex-wrapper">
		<div class="flex-group flex-left">
		
		<?php get_template_part('inc/page-title'); ?>
		
		<?php if ( have_posts() ) : ?>
				
			<div class="flex-contain group">
				<div class="flex-inner">
					
					<article <?php post_class('group'); ?>>
						
						<div class="entry themeform">
							<?php the_content(); ?>
							<div class="clear"></div>
						</div><!--/.entry-->
						
					</article>
					
					<?php if ( get_theme_mod( 'page-comments', 'off' ) == 'on' ) { comments_template('/comments.php',true); } ?>
					
				</div><!--/.flex-inner-->
			</div><!--/.flex-contain-->
			
		<?php endif; ?>

		</div><!--/.flex-group-->
		
	<?php get_sidebar(); ?>

	</div><!--/.flex-wrapper-->
</div><!--/.container-inner-->

<?php get_footer(); ?>