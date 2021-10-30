            <?php get_header();?>


				 <?php
					if(have_posts()): ?>
					
					<h2>search result for:<?php the_search_query();?></h2>
					
					<?php 
					
					while(have_posts()): the_post();
					?>
					
					
					
		
					
					
					
					
					
					
					
					
					
					
					
					
				<?php	endwhile;
					
					
					else:
					echo '<p>no contact found</p>';
					
					
					endif;
					?>
					
				<?php get_footer();?>		
					