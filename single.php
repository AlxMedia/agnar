<?php get_header(); ?>

<div class="container-inner">	
	<div class="flex-wrapper">

		<div class="flex-group flex-left">
			<div class="flex-contain group">
				<div class="flex-inner">
				
					<?php while ( have_posts() ): the_post(); ?>
					
						<article <?php post_class(); ?>>	
							
							<header class="post-header">
								<h1 class="post-title"><?php the_title(); ?></h1>
								<div class="post-byline"><?php echo get_avatar(get_the_author_meta('user_email'),'64'); ?><?php esc_html_e('by','agnar'); ?> <?php the_author_posts_link(); ?> &mdash; <i class="far fa-clock"></i> <?php the_time( get_option('date_format') ); ?> <?php esc_html_e('in','agnar'); ?> <?php the_category(' / '); ?></div>
							</header>

							<?php do_action( 'alx_ext_sharrre' ); ?>
							<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
							
							<div class="entry">	
								<?php the_content(); ?>
								<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','agnar'),'after'=>'</div>')); ?>
								<div class="clear"></div>
								<?php do_action( 'alx_ext_sharrre_footer' ); ?>
							</div><!--/.entry-->
							
						</article><!--/.post-->	
						
					<?php endwhile; ?>
					
					<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','agnar').'</span> ','','</p>'); ?>
					
					<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
						<div class="author-bio">
							<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
							<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
							<p class="bio-desc"><?php the_author_meta('description'); ?></p>
							<div class="clear"></div>
						</div>
					<?php endif; ?>
					
					<?php if ( get_theme_mod( 'post-nav', 's1' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
					
					<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>
					
					<?php if ( get_theme_mod( 'post-comments', 'on' ) == 'on' ) { comments_template('/comments.php',true); } ?>

				</div><!--/.flex-inner-->
			</div><!--/.flex-contain-->
		</div><!--/.flex-group-->
		
	<?php get_sidebar(); ?>

	</div><!--/.flex-wrapper-->
</div><!--/.container-inner-->

<?php get_footer(); ?>