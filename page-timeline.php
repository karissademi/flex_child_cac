<?php

/* 
	Template Name: Timeline Page
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

	<div class="page-content<?php echo $section_padding;?> timeline" id="page-container">

	<?php
		
	
			echo '<div class="container">';
				echo '<div class="row">';
					
					echo '<div class="col-md-2"><div id="timeline-menu"><h3>Jump to Month:</h3><ul class="timeline-links"></ul></div></div>';	

					echo '<div class="col-md-10 col-sm-12 content-full">';
							get_template_part( '/templates/page/content-page-body' );
					echo '</div>';


				echo '</div>';
			echo '</div>';

	?>
	
	</div>

<?php get_footer(); ?>