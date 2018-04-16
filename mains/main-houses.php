<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>

<div class="main <?php echo basename(get_permalink()); ?> ">
	
	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="container"><div class="row gutters"><div class="col_12"><div class="breadcrumb_wrapper"><span class="breadcrumbs">','</span></div></div></div></div>');} ?>

	<?php if( get_field('default_editor')): ?>
	
		<div class="default_editor">
		
			<div class="container">
					
				<div class="row gutters">
						
					<?php if( get_field('sidebar_selection') == 'right' ): ?>
						
						<div class="col_9">
								
							<div class="content">
					
								<?php get_template_part( 'loops/loop', 'page' ); ?>
									
							</div>
								
						</div>
							
						<div class="col_3">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
								
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'none' ): ?>
					
						<div class="col_12">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'left' ): ?>
					
						<div class="col_3">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
							
						</div>
						
						<div class="col_9">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
						
				</div>
				
			</div>
			
		</div>
	
	<?php endif; ?>
	
	<?php
		
		if( get_field('houses') ):
		
			if( have_rows('houses') ):
			
				$count = count(get_field('houses'));
			
				echo '<div class="container"><div class="row gutters"><div class="col_12"><div class="content" id="houses"><h1>';
				
				the_field('houses_section_title');
				
				echo '</h1><hr class="divider" />';
						
				while ( have_rows('houses') ) : the_row();
				
					$image = get_sub_field('image');
					
					if($count == 1):
						        
					echo '<div class="house_wrapper single">';
					
					else :
					
					echo '<div class="house_wrapper">';
					
					endif;
					
					if( get_sub_field('link') ):
					
						echo '<a href="';
							        
						the_sub_field('link');
						
						echo '" class="house_image">';
						
						echo '<img src="';
					
						echo $image['url'];
							
						echo '" alt="';
						
						echo $image['alt'];
						
						echo '" /></a>';
					
					else :
					
						echo '<img src="';
					
						echo $image['url'];
							
						echo '" alt="';
						
						echo $image['alt'];
						
						echo '" />';
					
					endif;
					
					echo '<span class="location">';
					
					the_sub_field('location');
					
					echo '</span></div>';
						
				endwhile;
					
				echo '</div></div></div></div>';
							
			else :
				
			endif;
			
		endif;
		
	?>
	
	
	
	
	<?php if(is_user_logged_in()):?>
	
		<div class="edit_button">
		
			<span class="edit"><?php edit_post_link(); ?></span>
		
		</div>
	
	<?php endif; ?>

</div>

	
<?php if( get_field('parallax_feature')): ?>
	
	<div class="parallax parallax-home parallax_default_image" data-stellar-background-ratio="0.15">
			
		<?php
		
			if( get_field('parallax_content') ) {
				echo '<div class="filter">' . get_field('parallax_content') . '</div>';
			}
											
		?>
		
	</div>

<?php endif; ?>

<?php

	if(get_field('appointment_feature'))
	{
		get_template_part( 'sidebars/sidebar' , 'appointment' );
	}
						
?>
	
	