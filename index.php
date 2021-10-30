  <?php get_header();?>

	<div class="wrapper">
		<section id="global-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block text-center">
							<h1><?php echo get_theme_mod('text_header_section');?></h1>
							<p><?php echo wpautop(get_theme_mod('text_header_area'))?></p>
						</div>
					</div>
				</div>
			</div>
		</section> 

		<section id="blog-left">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-0 col-sm-10 col-sm-offset-1">
					   <div class="blog-img row">
							<div class="col-md-12">
								<img class="img-responsive" src="img/blog-details-img2.jpg" alt="">
							</div>
							<div class="col-md-6 col-sm-6">
								<img class="img-responsive" src="img/blog-details-img3.jpg" alt="">
							</div>
							<div class="col-md-6 col-sm-6">
								<img class="img-responsive" src="img/blog-details-img4.jpg" alt="">
							</div>
						</div>
						   
				
						     <div class="block">
						    <?php if(have_posts()):
						   while(have_posts()): the_post();
						     ?>
						
						 		<h5 class="first-child-span"><?php the_title();?></h5>
								
								<?php the_author();?>
							<p class="first-child"><?php the_content();?></p>
							<div class="tags">
								<h3>Tags</h3>
						           <?php the_tags();?>
							</div>
							<div class="blog-comment">
								<a class="comment-img" href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/avtar6.jpg" alt=""></a>
								
								<?php echo get_avatar(get_the_author_meta('ID'),512)?>
								<a href="<?php the_permalink();?>"><p><?php echo get_the_author_meta('nickname')?></p></a>
								
								<div class="comment-text">
									<h5><a href="<?php get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?> </a></h5>
									<span>Paul Scrivens - Creative Head</span>
									<span><?php the_time('F jS  , Y g:i a'); ?></span>
									<p><?php echo wpautop(get_the_author_meta('description'))?></p>
								</div>
							</div>
							<!-- social media icon -->
							<div class="media-link">
								<a href="https://www.facebook.com/sharer?u=&lt;?php the_permalink();?&gt;&amp;t=&lt;?php the_title(); ?&gt;" target="_blank" rel="noopener noreferrer">Facebook</a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
					
	                <?php	endwhile;
					
					
					  else:
					    echo '<p>no contact found</p>';
					
					
					  endif;
					  ?>
							
						</div>
				
						<div class="blog-comment-main">
							<div class="blog-comment">
								<a class="comment-img" href="<?php the_permalink();?>">
								<img class="img-responsive" src="<?php echo wp_get_attachment_url(get_theme_mod('image'))?>" alt="">
								</a>
								
						
								<div class="comment-text">
									<a class="title" href="<?php the_permalink();?>"><?php echo get_theme_mod('text_setting');?></a>
									<span><?php the_time('F jS  , Y g:i a'); ?></span>
									<p><?php echo wpautop(get_theme_mod('text_tara'))?></p>
									<a class="btn" href="#">Post Reply</a>
								</div>
							</div>
							<div class="sub-blog-comment">
								<a class="comment-img" href="<?php the_permalink();?>">
									<img class="img-responsive" src="<?php echo wp_get_attachment_url(get_theme_mod('gallery'))?>" alt="">
								</a>
								<div class="comment-text">
									<a class="title" href="<?php the_permalink();?>"><?php echo get_theme_mod('text_section');?></a>
									<span><?php the_time('F jS  , Y g:i a'); ?></span>
									<p><?php echo wpautop(get_theme_mod('text_area'))?></p>
									<a class="btn" href="#">Post Reply</a>
								</div>
							</div>
							<div class="blog-comment">
								<a class="comment-img" href="<?php the_permalink();?>">
									<img class="img-responsive" src="<?php echo wp_get_attachment_url(get_theme_mod('images'))?>" alt="">
								</a>
								<div class="comment-text">
									<a class="title" href="<?php the_permalink();?>"><?php echo get_theme_mod('text_section_three');?></a>
									<span><?php the_time('F jS  , Y g:i a'); ?></span>
									<p><?php echo wpautop(get_theme_mod('text_area_three'))?></p>
									<a class="btn" href="#">Post Reply</a>
								</div>
							</div>
			
							
						</div>
						
					<?php 
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
					
					
					?>
					
					
					
					
						
					</div>
					<div class="col-md-3 col-md-offset-1 col-sm-4">
						<div class="widget">
						
						<?php get_search_form();?>
							
						</div>
						<div class="widget">
							<span>Categories</span>
							<div class="widget-body">
								<ul class="category-list">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1') ) : ?>
                     <!–Default sidebar info goes here–>
                       <?php endif; ?>
								</ul>
							</div>
						</div>
						<div class="widget">
							<span>ABOUT ME</span>
							<div class="widget-body">
								<img class="img-responsive" src="img/blog-img8.jpg" alt="">
								<span class="title">JOHN DEO</span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been industry's standard.</p>
							</div>
						</div>
						<div class="widget">
							<span>TEXT WIDGET</span>
							<div class="widget-body">
								<p>Lorem Ipsum is simply dummy text of printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the of type and scrambled it to make a type specimen.</p>
							</div>
						</div>
						<div class="widget">
							<span>POPULAR POSTS</span>
							<div class="widget-body">
								<ul class="category-list">
								  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1') ) : ?>
                                     <!–Default sidebar info goes here–>
                                   <?php endif; ?>
								</ul>
							</div>
						</div>
						<div class="widget sidebar-tags">
							<span>Tags</span>
							<div class="widget-body">
								<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
							</div>
						</div>
						<div class="widget">
							<span>RECENT COMMENTS</span>
							<div class="widget-body">
								<ul class="category-list">
								   <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1') ) : ?>
                              <!–Default sidebar info goes here–>
                              <?php endif; ?> 
								</ul>
							</div>
						</div>
						<div class="widget">
							<a href="#">
								<img class="img-responsive" src="img/blog-img7.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

   <?php get_footer();?>