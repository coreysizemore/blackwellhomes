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