<?php

/* 
	Template Name: Futures
*/

get_header(); ?>
	<div class="container">
		<div class="breadcrumbs">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
		</div>
	</div>
	<?php
		$page_options = get_post_custom($post->ID);

		$section_padding = '';
		if(isset($page_options['page-sidebar'][0])):
			if($page_options['page-sidebar'][0] == 'no'):
				$section_padding = ' padding-no';
			else:
				$section_padding = '';
			endif;
		endif;
	?>

	<div class="page-content<?php echo $section_padding;?> philadelphia-futures" id="page-container">

	<?php
			echo '<div class="container">';
				echo '<div class="row">';
					
					echo '<div class="col-sm-9 content-full">';
							get_template_part( '/templates/page/content-page-body' );
					echo '</div>';

					echo '<div class="col-sm-3 content-full">';
							dynamic_sidebar('futures');
					echo '</div>';


				echo '</div>';
			echo '</div>';

	?>
	
	</div>

<?php get_footer(); ?>