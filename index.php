
    <?php get_header();?>
    <!--Full Search-->
   <div class="search-full">
        <button type="submit" class="search-close"><i class="fas fa-times"></i></button>
        <div class="search-full--inner">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <form class="main-search-form">
                            <input type="search" name="main_search" id="main_search" placeholder="Search here...">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Full Search-->


    <!-- Breadcrumb Area -->
    <section class="section-padding breadcrumb-area bg-overlay" style="background-image: url(<?php bloginfo('template_directory');?>/assets/img/breadcrumb.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner-title text-center">
                        <h2>Blog</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Breadcrumb Area -->

    <section class="section-padding bg-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <!-- Blog Area -->
                    <div class="row">
					
					<?php
					if(have_posts()):
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
					
			
                       
                    </div>
                    <!-- // Blog Area -->

                    <!-- Blog Pagination -->
                    <div class="blog-pagination text-center">
					
                        <ul>
						
						   <?php
						the_posts_pagination(array(
						'mid_size'=>2,
						'prev_text'=>__('','textdomain'),
						'next_text'=>__('','textdomain'),
					
						));
						
						?>
                            <li><a href="blog.html"><i class="fas fa-angle-left"></i></a></li>
                            <li><a class="active" href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
					<?php
						wp_reset_postdata();

						?>
                    <!-- // Blog Pagination -->
                </div>

                <!-- sidebar widget -->
                <div class="col-lg-4">
                    <!-- Single sidebar widget -->
					<?php get_search_form();?>
                    
                    <!-- // Single sidebar widget -->

                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget sidebar-list">
                        
                        <ul>
						
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('custom_sidebar') ) : ?>
                     <!–Default sidebar info goes here–>
                       <?php endif; ?>
                            <li><a href="blog.html">Business <span>49</span></a></li>
                            <li><a href="blog.html">Facebook Marketing <span>05</span></a></li>
                            <li><a href="blog.html">SEO <span>09</span></a></li>
                            <li><a href="blog.html">Twitter <span>12</span></a></li>
                            <li><a href="blog.html">Business Groth<span>18</span></a></li>
                        </ul>
                    </div>
                    <!-- // Single sidebar widget -->

                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget popular-posts">
                        <h3>popular posts</h3>
					
                        <ul>
							<?php if ( !function_exists('dynamic_sidebar1') || !dynamic_sidebar('custom_sidebar') ) : ?>
                     <!–Default sidebar info goes here–>
                       <?php endif; ?>
						
						
						
						
                            <!-- Single Popular Post -->
                            <li><a href="blog-details.html">
                                    <span class="popular-post-thumd">
                                        <img src="assets/img/blog/blog-1.jpg" alt="">
                                    </span>
                                    <div class="popular-post-content">
                                        <h4>Google Search tips</h4>
                                        <p class="post-meta"><i class="fas fa-eye"></i>5963</p>
                                    </div>
                                </a></li>
                            <!-- // Single Popular Post -->
                            <!-- Single Popular Post -->
                            <li><a href="blog-details.html">
                                    <span class="popular-post-thumd">
                                        <img src="assets/img/blog/blog-2.jpg" alt="">
                                    </span>
                                    <div class="popular-post-content">
                                        <h4>How to do seo?</h4>
                                        <p class="post-meta"><i class="fas fa-eye"></i>5963</p>
                                    </div>
                                </a></li>
                            <!-- // Single Popular Post -->
                            <!-- Single Popular Post -->
                            <li><a href="blog-details.html">
                                    <span class="popular-post-thumd">
                                        <img src="assets/img/blog/blog-3.jpg" alt="">
                                    </span>
                                    <div class="popular-post-content">
                                        <h4>How to Marketing?</h4>
                                        <p class="post-meta"><i class="fas fa-eye"></i>5963</p>
                                    </div>
                                </a></li>
                            <!-- // Single Popular Post -->
                            <!-- Single Popular Post -->
                            <li><a href="blog-details.html">
                                    <span class="popular-post-thumd">
                                        <img src="assets/img/blog/blog-4.jpg" alt="">
                                    </span>
                                    <div class="popular-post-content">
                                        <h4>Want to Earn money?</h4>
                                        <p class="post-meta"><i class="fas fa-eye"></i>5963</p>
                                    </div>
                                </a></li>
                            <!-- // Single Popular Post -->
                            <!-- Single Popular Post -->
                            <li><a href="blog-details.html">
                                    <span class="popular-post-thumd">
                                        <img src="assets/img/blog/blog-5.jpg" alt="">
                                    </span>
                                    <div class="popular-post-content">
                                        <h4>Creative Blog writer</h4>
                                        <p class="post-meta"><i class="fas fa-eye"></i>5963</p>
                                    </div>
                                </a></li>
                            <!-- // Single Popular Post -->
                        </ul>
                    </div>
                    <!-- // Single sidebar widget -->



                    <!-- Single sidebar widget -->
                    <div class="sidebar-widget tags">
					  
					
					
                        <h3>Tags</h3>
                        <ul>
						 <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
                            
                        </ul>
                    </div>
                    <!-- // Single sidebar widget -->

                </div>
            </div>
            <!-- // sidebar widget -->
        </div>
    </section>

    <!-- Call to Action -->
	
	<?php if(get_theme_mod('display')=="Yes"){?>
    <section class="section-padding call-to-action bg-overlay" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('image'));?>/assets/img/cta-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="inner-promo">
                        <h2><?php echo get_theme_mod('text_setting');?></h2>
                        <p><?php echo get_theme_mod('text_tara')?></p>
                        <a href="<?php echo get_permalink(get_theme_mod('text_link'))?>" class="bttn-md-light">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php }?>
    <!-- // Call to Action -->
    <?php get_footer();?>