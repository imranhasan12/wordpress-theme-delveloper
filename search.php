	             


              <?php get_header();?>


				 <?php
					if(have_posts()): ?>
					
					<h2>search result for:<?php the_search_query();?></h2>
					
					<?php 
					
					while(have_posts()): the_post();
					?>
					<!-- Single Blog -->
                        <div class="col-md-6">
                            <div class="single-blog">
                                <div class="blog-thumb">
                                    <?php the_post_thumbnail('smail-thumbnail'); ?>
                                </div>
							
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <p>By <a href="<?php the_permalink();?>">Aseven</a> <span class="blog-categories"><a href="#">Business</a>, <a href="#">Marketing</a></span></p>
                                    </div>
                                    <h3><a href="<?php the_permalink();?>"><?php echo get_the_title();?></a></h3>
					
					                 <p class="post-info">
									 	
                                    <?php the_time('F jS  , Y g:i a'); ?> by<a href="<?php get_author_posts_url(get_the_author_meta('ID'));?>">
									<?php the_author();?></a>
                                       
									 </p>
						
		
									
                                    <p class="text"><?php echo get_the_excerpt();?></p>
                                    <a href="<?php the_permalink();?>" class="bttn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- // Single Blog -->
					
					
					
					
				<?php	endwhile;
					
					
					else:
					echo '<p>no contact found</p>';
					
					
					endif;
					?>
					
				<?php get_footer();?>	
					