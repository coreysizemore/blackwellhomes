<?php
	
	/*
		@package WordPress
		@subpackage alderaan
	*/
	 
?>
	
<?php get_template_part( 'sidebars/sidebar' , 'announcement' ); ?>

<div class="main <?php echo basename(get_permalink()); ?>">

	<?php if( get_field('default_editor')): ?>
	
		<div class="default_editor">
		
			<div class="container">
					
				<div class="row gutters">
						
					<?php if( get_field('sidebar_selection') == 'right' ): ?>
						
						<div class="col_8">
								
							<div class="content">
					
								<?php get_template_part( 'loops/loop', 'home' ); ?>
									
							</div>
								
						</div>
							
						<div class="col_4">
									
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
								
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'none' ): ?>
					
						<div class="col_12">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'home' ); ?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'left' ): ?>
					
						<div class="col_4">
	
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
							
						</div>
						
						<div class="col_8">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'home' ); ?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
						
				</div>
				
			</div>
			
		</div>
	
	<?php endif; ?>
	
	<?php if(is_user_logged_in()):?>
	
		<div class="edit_button">
		
			<span class="edit"><?php edit_post_link(); ?></span>
		
		</div>
	
	<?php endif; ?>

</div>

<?php
	
	if( get_field('accordion') ):
	
		if( have_rows('accordion_content') ):
		
			echo '<div class="main"><div class="container"><div class="row gutters"><div class="col_12"><div id="accordion" class="content">';
					
			while ( have_rows('accordion_content') ) : the_row();
					        
				echo '<h3>';
					        
				the_sub_field('section_heading');
					
				echo '</h3>';
					
				echo '<div>';
					
				the_sub_field('section_content');
					        
				echo '</div>';
					
			endwhile;
				
			echo '</div></div></div></div></div>';
						
		else :
			
		endif;
		
	endif;
	
?>

<?php
	
	if( get_field('tabs') ):
	
		if( have_rows('tabs_content') ):
		
			echo '<div class="main"><div class="container"><div class="row gutters"><div class="col_12"><div id="tabs" class="content">';
				
			echo '<ul>';
					
			while ( have_rows('tabs_content') ) : the_row();
					
				echo '<li><a href="#tabs-';
					
				the_sub_field('section_number');
					
				echo '">';
					        
				the_sub_field('section_heading');
					
				echo '</a></li>';
					
			endwhile;
			
			echo '</ul>';
				
			while ( have_rows('tabs_content') ) : the_row();
					
				echo '<div id="tabs-';
					
				the_sub_field('section_number');
					
				echo '">';
					        
				the_sub_field('section_content');
					
				echo '</div>';
					
			endwhile;
				
			echo '</ul>';
				
			echo '</div></div></div></div></div>';
						
		else :
			
		endif;
		
	endif;
	
?>

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
				
		if( get_field('column_selection') == 'one' ):
		
			echo '<div class="main accentbg">';
					
			if( have_rows('one_columns') ):
					
				while ( have_rows('one_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_12"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
			echo '</div>';
			
		elseif( get_field('column_selection') == 'two' ):
		
			echo '<div class="main accentbg">';
		
			if( have_rows('two_columns') ):
					
				while ( have_rows('two_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_6"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_6"><div class="content">';
					        
					the_sub_field('column_2');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
			echo '</div>';
			
		elseif( get_field('column_selection') == 'onethree' ):
		
			echo '<div class="main accentbg">';
		
			if( have_rows('one_three_columns') ):
					
				while ( have_rows('one_three_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_3"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_9"><div class="content">';
					        
					the_sub_field('column_2');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
			echo '</div>';
			
		elseif( get_field('column_selection') == 'threeone' ):
			
			echo '<div class="main accentbg">';
		
			if( have_rows('three_one_columns') ):
					
				while ( have_rows('three_one_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_9"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_3"><div class="content">';
					        
					the_sub_field('column_2');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
			echo '</div>';
			
		elseif( get_field('column_selection') == 'three' ):
		
			echo '<div class="main accentbg">';
		
			if( have_rows('three_columns') ):
					
				while ( have_rows('three_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_4"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_4"><div class="content">';
					        
					the_sub_field('column_2');
					    
					echo '</div></div><div class="col_4"><div class="content">';
					        
					the_sub_field('column_3');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
			echo '</div>';
			
		elseif( get_field('column_selection') == 'four' ):
		
			echo '<div class="main accentbg">';
		
			if( have_rows('four_columns') ):
					
				while ( have_rows('four_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_3"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_3"><div class="content">';
					        
					the_sub_field('column_2');
					    
					echo '</div></div><div class="col_3"><div class="content">';
					        
					the_sub_field('column_3');
					    
					echo '</div></div><div class="col_3"><div class="content">';
					        
					the_sub_field('column_3');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
			echo '</div>';
				
		endif; 
			
	?>

<?php

	if(get_field('appointment_feature'))
	{
		get_template_part( 'sidebars/sidebar' , 'appointment' );
	}
						
?>
	
	
	