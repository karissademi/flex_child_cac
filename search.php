<?php get_header(); ?>

	<div class="page-content" id="search-container">
		<div class="container">
			<h3 class="search-title"><?php _e('Results for:', MD_THEME_NAME);?> <span><?php echo get_search_query(); ?></span></h3>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2 class="post-title<?php echo $padding_top;?>"><a href="<?php the_permalink(); ?>" title="<?php esc_attr(the_title()) ?>"><?php the_title(); ?></a></h2>


		<div class="post-content"><?php the_excerpt(); ?></div>
			
		<?php get_template_part('/templates/blog/read-more'); ?>
			<hr>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	
<?php get_footer(); ?>