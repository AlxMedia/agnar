<?php $format = get_post_format(); ?>

<li class="flex-item">

	<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>	
		<div class="post-inner post-hover">
			
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ): ?>
						<?php the_post_thumbnail('agnar-medium'); ?>
					<?php elseif ( get_theme_mod('placeholder') !='off' ): ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/thumb-medium.png" alt="<?php the_title_attribute(); ?>" />
					<?php endif; ?>
					<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
					<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
					<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
				</a>
				<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
					<a class="post-comments" href="<?php comments_link(); ?>"><span><i class="fas fa-comments"></i><?php comments_number( '0', '1', '%' ); ?></span></a>
				<?php endif; ?>				
			</div><!--/.post-thumbnail-->
				
			<div class="post-content">
			
				<h2 class="post-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2><!--/.post-title-->
				
				<ul class="post-meta group">
					<li><?php the_category(' / '); ?></li>
					<li><i class="far fa-clock"></i><?php the_time( get_option('date_format') ); ?></li>
				</ul><!--/.post-meta-->
				
				<?php if (get_theme_mod( 'excerpt-length','0' ) != '0'): ?>
					<div class="entry excerpt">				
						<?php the_excerpt(); ?>
					</div><!--/.entry-->
				<?php endif; ?>
				
				<?php if ( get_theme_mod( 'author-avatar', 'on' ) =='on' ): ?>
					<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar(get_the_author_meta('user_email'),'64'); ?></a>
				<?php endif; ?>
				
				<?php if ( get_theme_mod( 'format-icon', 'on' ) =='on' ): ?>
					<div class="format-circle"><a href="<?php echo get_post_format_link($format); ?>"><i class="fa"></i></a></div>
				<?php endif; ?>
				
			</div><!--/.post-content-->

		</div><!--/.post-inner-->	
	</article><!--/.post-->

</li>