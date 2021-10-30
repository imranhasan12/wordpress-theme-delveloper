    <?php get_header();?>
    <!--// Header Area-->

    <!--Full Search-->
    
    <!--// Full Search-->


    <!-- Breadcrumb Area -->
    <section class="section-padding breadcrumb-area bg-overlay" style="background-image: url(<?php bloginfo(template_directory)?>/assets/img/breadcrumb.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner-title text-center">
                        <h2>Blog</h2>
                        <ul>
                            <li><a href="#Home">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Breadcrumb Area -->

    <section class="section-padding bg-light ">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <!-- Blog Area -->
                    <?php
					if(have_posts()):
					while(have_posts()): the_post();
					
					?>
                    <!-- Single Blog -->
                    <div class="single-blog col-1-blog">
                        <div class="blog-thumb">
                            <?php the_post_thumbnail('banner-image');?>
                        </div>
                              <span class="date">
                              <?php echo get_the_date('d/m/Y'); ?>
                               </span>
                        <div class="blog-content">

                            <div class="blog-meta">
                                <ul>
                                    <li><a href="blog-2.html"><i class="fas fa-user"></i>Aseven</a></li>
                                    <li><a href="blog-2.html"><i class="fas fa-calendar"></i>21 may 2020</a></li>
                                    <li><span class="view-count"><i class="fas fa-eye"></i>25400</span></li>
                                    <li><a href="blog-2.html"><i class="fas fa-tag"></i>Business</a></li>
                                </ul>
                            </div>

                            <h3><a href="#"><?php echo get_the_title();?></a></h3>
                            <p class="text"><?php echo the_content();?></p>
                            <a href="<?php the_permalink();?>" class="bttn-sm">Read More</a>

                        </div>
						<div class="blog-comment">
								<a class="comment-img" href="#">
									<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/blog-details-img5.jpg" alt="">
									<?php get_author_posts_url(get_the_author_meta('ID'));?>
									<p><?php echo get_the_author_meta('nickname')?> </p>
								</a>
								<div class="comment-text">
									<a class="title" href="<?php the_permalink()?>"><?php echo wpautop(get_the_author_meta('title'))?></a>
									<?php the_time('F jS  , Y g:i a'); ?>
									<p><?php echo wpautop(get_the_author_meta('description'))?></p>
									<a class="btn" href="#">Post Reply</a>
								</div>
							</div>
						
                    </div>
                    <!-- // Single Blog -->
					
					
			<?php endwhile;  endif;
					
					?>

              <?php wp_reset_postdata();?>



                    
                   
                   
                    <!-- // Single Blog -->

                    <!-- // Blog Area -->

                    <!-- Blog Pagination -->
                    <div class="blog-pagination text-center">
                        <ul>
                            <li><a href="blog.html"><i class="fas fa-angle-left"></i></a></li>
                            <li><a class="active" href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
					
					
					<?php
					 if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
					?>
					
					
					
					<div class="consultency_comments_form">
                            <h2 class="comments_title">Leave a Reply</h2>
                            <div class="row">
                                <form action="#" method="post">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="E-mail*">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="url" class="form-control" placeholder="Website">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" rows="4" placeholder="Your Comment"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="send_me_ph">
                                                <a class="submit_btn_quick_contact" href="#">Submit Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
					
					
					
					
					
					
                    <!-- // Blog Pagination -->
                </div>

                <!-- sidebar widget -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky" id="sidebar-sticky">
                        <!-- Single sidebar widget -->
                        <div class="sidebar-widget search-widget">
                            <form action="#">
                                <input type="text" placeholder="search" required>
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <!-- // Single sidebar widget -->

                        <!-- Single sidebar widget -->
                        <div class="sidebar-widget sidebar-list">
                            <h3>Categories</h3>
                            <ul>
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
                                <li><a href="blog.html">Seo</a></li>
                                <li><a href="blog.html">Marketing</a></li>
                                <li><a href="blog.html">Twitter</a></li>
                                <li><a href="blog.html">Instagram</a></li>
                                <li><a href="blog.html">Business</a></li>
                                <li><a href="blog.html">Tricks</a></li>
                            </ul>
                        </div>
                        <!-- // Single sidebar widget -->

                    </div>
                </div>
            </div>
            <!-- // sidebar widget -->
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section-padding call-to-action bg-overlay" style="background-image: url(assets/img/cta-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="inner-promo">
                        <h2><?php echo get_theme_mod('text_setting');?></h2>
                        <p> <?php echo get_theme_mod('text_tara')?></p>
                        <a href="<?php echo get_permalink(get_theme_mod('text_link'))?>" class="bttn-md-light">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Call to Action -->
    <?php get_footer();?>