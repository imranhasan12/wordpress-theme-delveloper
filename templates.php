
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
	
	
	

    <!-- Hero Area -->
    <section class="hero-aria h-100">
        <div class="hero-slider owl-carousel h-100">
            <!-- Single-hero -->
            <div class="single-hreo h-100" style="background-image: url(<?php echo get_theme_file_uri('/assets/img/hero-1.png')?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 d-table h-100">
                            <div class="hero-content d-table-cell">
                                <h1 style="color:<?php echo $redux_demo['fields_2']?>;"><?php echo $redux_demo['fields_1']?> <span>business</span></h1>
                                <p style="color:<?php echo $redux_demo['fields_4']?>;"><?php echo $redux_demo['fields_3']?></p>
                                <a href="Service" class="bttn-md">Our Services</a>
                                <a href="Contact" class="bttn-md-light">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Single-hero -->

            <!-- Single-hero -->
            <div class="single-hreo h-100" style="background-image: url(<?php echo wp_get_attachment_image_src ($redux_demo['fields_5'],'full')[0];?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 d-table h-100">
                            <div class="hero-content d-table-cell">
                                <h1>grow<span> Business</span> <br> with us</h1>
                                <p style="color:<?php echo $redux_demo['fields_4']?>;"><?php echo $redux_demo['fields_3']?></p>
                                <a href="service.html" class="bttn-md">Our Services</a>
                                <a href="contact.html" class="bttn-md-light">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Single-hero -->

            <!-- Single-hero -->
            <div class="single-hreo h-100" style="background-image: url(<?php echo get_theme_file_uri('/assets/img/hero-3.png')?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 d-table h-100">
                            <div class="hero-content d-table-cell">
                                <h1>We Providing <br> business <span>plan</span></h1>
                                <p>Our management consulting services focus on our clients most critical issues and opportunities strategy, marketing, technology</p>
                                <a href="service.html" class="bttn-md">Our Services</a>
                                <a href="contact.html" class="bttn-md-light">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Single-hero -->
        </div>
    </section>
    <!-- // Hero Area -->

    <!-- Feature Area-->
    <section class="feature-area section-padding pb-90 bg-light">
        <div class="container">
            <div class="row">
                <!-- Single Feature -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="services-details.html">
                            <i class="fas fa-users"></i>
                            <h3 style="color:<?php echo $redux_demo['fields_7']?>;"><?php echo $redux_demo['fields_6']?> </h3>
                            <p style="color:<?php echo $redux_demo['fields_9']?>;"><?php echo $redux_demo['fields_8']?></p>
                        </a>
                    </div>
                </div>
                <!-- // Single Feature -->

                <!-- Single Feature -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="services-details.html">
                            <i class="fas fa-users"></i>
                            <h3 style="color:<?php echo $redux_demo['fields_12']?>;"><?php echo $redux_demo['fields_11']?> </h3>
                            <p style="color:<?php echo $redux_demo['fields_14']?>;" ><?php echo $redux_demo['fields_13']?> </p>
                        </a>
                    </div>
                </div>
                <!-- // Single Feature -->

                <!-- Single Feature -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="services-details.html">
                            <i class="fas fa-users"></i>
                            <h3 style="color:<?php echo $redux_demo['fields_22']?>;"><?php echo $redux_demo['fields_21']?></h3>
                            <p style="color:<?php echo $redux_demo['fields_24']?>;"><?php echo $redux_demo['fields_23']?></p>
                        </a>
                    </div>
                </div>
                <!-- // Single Feature -->

                <!-- Single Feature -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="services-details.html">
                            <i class="fas fa-users"></i>
                            <h3 style="color:<?php echo $redux_demo['fields_27']?>;" ><?php echo $redux_demo['fields_26']?></h3>
                            <p style="color:<?php echo $redux_demo['fields_29']?>;" ><?php echo $redux_demo['fields_28']?> </p>
                        </a>
                    </div>
                </div>
                <!-- // Single Feature -->
            </div>
        </div>
    </section>
    <!-- // Feature Area-->

    <!-- Request a call back -->
    <section class="section-padding call-back-area bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="call-back-user-image " style="background-image: url(<?php bloginfo('template_directory');?>/assets/img/about-1.jpg)"></div>
                </div>
                <div class="col-md-6">
                    <div class="call-back-content">
                        <!-- Section title -->
                        <div class="section-title text-center">
                            <h2>Request a Call Back</h2>
                            <div class="section-line">
                                <span></span>
                                <span class="line-big"></span>
                                <span></span>
                            </div>
                            <p style="color:<?php echo $redux_demo['fields_24']?>;" ><?php echo $redux_demo['opt-editor-tiny']?></p>
                        </div>
                        <!-- // Section title -->
                        <form action="#">
                            <input type="text" placeholder="Full Name" />
                            <input type="text" placeholder="Phone Number" />
                            <input type="email" placeholder="Email" />
                            <select name="specialties">
                                <option value="">Select a Service</option>
                                <option value="">Business Consultant</option>
                                <option value="">Corporate Finance</option>
                                <option value="">Market Analysis</option>
                                <option value="">Other </option>
                            </select>
                            <button type="submit" class="bttn-md">Send Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Request a call back -->

    <!-- About Area -->
    <section class="section-padding bg-light about-area">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <!-- section title -->
                    <div class="section-title">
                        <h2>OUR COMPANY</h2>
                        <div class="section-line">
                            <span></span>
                            <span class="line-big"></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- // section title -->

                    <div class="about-us">
                        <p>Our management consulting services focus on our clients most critical issues and opportunities strategy, marketing, technology, transformation. Our management consulting services focus on our clients.</p>

                        <h4> Our Mission</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, consectetur, maiores? Reprehenderit amet quidem cupiditate!</p>
                        <h4> our vision</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, consectetur, maiores? Reprehenderit amet quidem cupiditate!</p>

                        <ul>
                            <li>A Global Network</li>
                            <li>Cpmmitment to Innovation</li>
                            <li>Building trusted partnership</li>
                        </ul>


                        <a href="About" class="bttn-md">Know More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="call-back-user-image" style="background-image: url(<?php bloginfo('template_directory');?>/assets/img/about-2.jpg)"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- // About Area -->

    <!-- Service Area -->
    <section class="section-padding pb-90 service-area bg-white">
        <div class="container">
            <!-- section title -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>Our Services</h2>
                        <div class="section-line">
                            <span></span>
                            <span class="line-big"></span>
                            <span></span>
                        </div>
                        <p>Our management consulting services focus on our clients most critical issues and opportunities strategy.</p>
                    </div>
                </div>
            </div>
            <!-- // section title -->

            <!-- Service content -->
            <div class="row">
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service text-center">
                        <i class="fas fa-chart-bar"></i>
                        <h2>Business Consulting</h2>
                        <p>Our management consulting services focus on our clients most critical.</p>
                        <a href="Services-Details" class="bttn-sm">Learn More</a>
                    </div>
                </div>
                <!-- Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service text-center">
                        <i class="fas fa-chart-pie"></i>
                        <h2>Business Growth</h2>
                        <p>Our management consulting services focus on our clients most critical.</p>
                        <a href="Services-Details" class="bttn-sm">Learn More</a>
                    </div>
                </div>
                <!-- Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service text-center">
                        <i class="fas fa-coins"></i>
                        <h2>Marketing Plan</h2>
                        <p>Our management consulting services focus on our clients most critical.</p>
                        <a href="Services-Details" class="bttn-sm">Learn More</a>
                    </div>
                </div>
                <!-- Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service text-center">
                        <i class="fas fa-filter"></i>
                        <h2>Advanced Analytics</h2>
                        <p>Our management consulting services focus on our clients most critical.</p>
                        <a href="Services-Details" class="bttn-sm">Learn More</a>
                    </div>
                </div>
                <!-- Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service text-center">
                        <i class="fas fa-chart-line"></i>
                        <h2>Financial Analysis</h2>
                        <p>Our management consulting services focus on our clients most critical.</p>
                        <a href="Services-Details" class="bttn-sm">Learn More</a>
                    </div>
                </div>
                <!-- Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service text-center">
                        <i class="fas fa-dollar-sign"></i>
                        <h2>Performance</h2>
                        <p>Our management consulting services focus on our clients most critical.</p>
                        <a href="Services-Details" class="bttn-sm">Learn More</a>
                    </div>
                </div>
                <!-- Single Service -->
            </div>
            <!-- // Service content -->
        </div>
    </section>
    <!-- // Service Area -->

    <!-- Call to Action -->
    <section class="section-padding call-to-action bg-overlay" style="background-image: url(<?php bloginfo('template_directory');?>/assets/img/cta-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="inner-promo">
                        <h2>LOOKING FOR AN EXCELENT BUSINESS SOLUTION ?</h2>
                        <p>Our management consulting services focus on our clients most critical.</p>
                        <a href="Contact" class="bttn-md-light">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Call to Action -->

    <!-- Portfolio Area -->
    <section class="section-padding bg-light portfolio-area">
        <div class="container-fluid">
            <!-- section title -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>RECENTLY FINISHED</h2>
                        <div class="section-line">
                            <span></span>
                            <span class="line-big"></span>
                            <span></span>
                        </div>
                        <p>Our management consulting services focus on our clients most criticalOur management consulting.</p>
                    </div>
                </div>
            </div>
            <!-- // section title -->

            <!-- Portfolio Filter -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="portfolio-filter text-center">
                        <ul>
                            <li class="filter active" data-role="button" data-filter="all">All</li>
							<?php
							$terms=get_terms('categories');
							
							foreach($terms as $term){ ?>
							
								 <li class="filter" data-role="button" data-filter=".<?php echo $term->slus;?>"><?php echo $term->name;?></li>
								
                                
						<?php	}
							
							
							?>
							
							
                           
                        </ul>
                    </div>
                </div>
            </div>
            <!-- // Portfolio Filter -->

            <div class="row">
			
			
			<?php   
			
			$hello_portfolio_post=new WP_Query(
			
			array(
			'post_type'=>'protfolio',
			'taxonomy'=>'categories',
			'post_per_page'=>50,
			
			));
			
			if($hello_portfolio_post->have_posts()):while($hello_portfolio_post->have_posts()):$hello_portfolio_post->the_post();

			?>
			<?php
             // Get the terms with each post
            $terms = get_the_terms( $post->ID, 'categories' );
						
            if ( $terms && ! is_wp_error( $terms ) ) : 

	         $cat_links = array();

	        foreach ( $terms as $term ) {
		    $cat_links[] = $term->slug;
	          }
						
	        $mycats = join( " ", $cat_links );
             ?>
			
                <!-- Single Portfolio -->
                <div class="<?php echo $mycats ; ?>">
                    
					
					     <?php the_post_thumbnail();?>
                        <div class="portfolio-content">
                            <h3>SEO Consulting</h3>
                            <p>Branding</p>
                        </div>
                    
                </div>
				<?php endif;?>
				<?php endwhile; endif; ?>
                <!-- Single Portfolio -->

               
                <!-- Single Portfolio -->
            </div>

            <div class="row justify-content-center ">
                <div class="col-lg-4 text-center">
                    <a href="#" class="bttn-md">Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- // Portfolio Area -->


    <!--  Fact Counter Section -->
    <!-- ====================================================================
            NOTE: You need to change  'data-count="10"' and 'p' Eliments 
        ===================================================================== -->

    <section class="section-padding pb-90 counter-area" id="counter" style="background-image: url(<?php bloginfo('template_directory');?>/assets/img/map.png)">
        <div class="container">
            <div class="row">
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="5">0</span>+</h2>
                        <p>Years Experience</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="900">0</span>+</h2>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="09">0</span>+</h2>
                        <p>Awards Win</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="620">0</span>+</h2>
                        <p>Cups of Coffee</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
            </div>
        </div>
    </section>
    <!--  // Fact Counter Section -->

    <!-- Pricing Area -->
    <section class="section-padding pb-90 bg-light pricing-area">
        <div class="container">
            <!-- section title -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>Choose Pricing Plan</h2>
                        <div class="section-line">
                            <span></span>
                            <span class="line-big"></span>
                            <span></span>
                        </div>
                        <p>Our management consulting services focus on our clients most criticalOur management consulting.</p>
                    </div>
                </div>
            </div>
            <!-- // section title -->
            <div class="row">
                <!-- Single Pricing -->
                <div class="col-lg-4">
                    <div class="single-pricing bg-white">
                        <div class="pricing-head">
                            <h3>Basic <span class="price">$59 <span>/Month</span></span></h3>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>1 Perfect Project</li>
                                <li>5 Analytics Campaign</li>
                                <li>30 Keywords</li>
                                <li>10 Social Media Reviews</li>
                                <li>1 Year Support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer text-center">
                            <a href="#" class="bttn-sm">Join Now</a>
                        </div>
                    </div>
                </div>
                <!-- // Single Pricing -->
                <!-- Single Pricing -->
                <div class="col-lg-4">
                    <div class="single-pricing bg-white active">
                        <div class="pricing-head">
                            <h3>Standard <span class="price">$99 <span>/Month</span></span></h3>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>1 Perfect Project</li>
                                <li>5 Analytics Campaign</li>
                                <li>30 Keywords</li>
                                <li>10 Social Media Reviews</li>
                                <li>1 Year Support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer text-center">
                            <a href="#" class="bttn-sm">Join Now</a>
                        </div>
                    </div>
                </div>
                <!-- // Single Pricing -->
                <!-- Single Pricing -->
                <div class="col-lg-4">
                    <div class="single-pricing bg-white">
                        <div class="pricing-head">
                            <h3>Business <span class="price">$139 <span>/Month</span></span></h3>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>1 Perfect Project</li>
                                <li>5 Analytics Campaign</li>
                                <li>30 Keywords</li>
                                <li>10 Social Media Reviews</li>
                                <li>1 Year Support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer text-center">
                            <a href="#" class="bttn-sm">Join Now</a>
                        </div>
                    </div>
                </div>
                <!-- // Single Pricing -->
            </div>
        </div>
    </section>
    <!-- // Pricing Area -->

    <!-- Testimonial Area -->
    <section id="testimonial" class="section-padding bg-img testimonial-area" style="background-image: url(<?php bloginfo('template_directory');?>/assets/img/testimonial-image.jpg)">
        <div class="container bg-white">
            <div class="row">
                <!-- Section title -->
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Testimonial</h2>
                        <div class="section-line">
                            <span></span>
                            <span class="line-big"></span>
                            <span></span>
                        </div>
                        <p>Our management consulting services focus on our clients.</p>
                    </div>
                </div>
                <!-- // Section title -->
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonials owl-carousel" data-ride="carousel">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>Identifying opportunities and developing business cases to make sustainability a source of on-going valueIdentifying opportunities and developing business cases to.</p>
                            <h4>Aseven M <span>CEO - aseven.info</span></h4>

                        </div>
                        <!-- // Single Testimonial -->
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>Identifying opportunities and developing business cases to make sustainability a source of on-going valueIdentifying opportunities and developing business cases to.</p>
                            <h4>Aseven M <span>CEO - aseven.info</span></h4>

                        </div>
                        <!-- // Single Testimonial -->
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>Identifying opportunities and developing business cases to make sustainability a source of on-going valueIdentifying opportunities and developing business cases to.</p>
                            <h4>Aseven M <span>CEO - aseven.info</span></h4>

                        </div>
                        <!-- // Single Testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Testimonial Area -->

    <!-- Blog Area -->
    <section class="section-padding pb-90 bg-light blog-area">
        <div class="container">

            <!-- section title -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>Recent News</h2>
                        <div class="section-line">
                            <span></span>
                            <span class="line-big"></span>
                            <span></span>
                        </div>
                        <p>Identifying opportunities and developing business cases to make sustainability a source of on-going valueIdentifying opportunities and developing business cases to.</p>
                    </div>
                </div>
            </div>
            <!-- // section title -->

            <div class="row">
                <!-- Single Blog -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog-1.jpg" alt="">
                        </div>

                        <div class="blog-content">
                            <div class="blog-meta">
                                <p>By <a href="#">Aseven</a> <span class="blog-categories"><a href="#">Business</a>, <a href="#">Marketing</a></span></p>
                            </div>
                            <h3><a href="Blog-Details">Identifying business cases</a></h3>
                            <p class="text">Identifying opportunities and developing business cases to.</p>
                            <a href="Blog-Details" class="bttn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- // Single Blog -->
                <!-- Single Blog -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog-2.jpg" alt="">
                        </div>

                        <div class="blog-content">
                            <div class="blog-meta">
                                <p>By <a href="#">Aseven</a> <span class="blog-categories"><a href="#">Business</a>, <a href="#">Marketing</a></span></p>
                            </div>
                            <h3><a href="Blog-Details">Identifying business cases</a></h3>
                            <p class="text">Identifying opportunities and developing business cases to.</p>
                            <a href="Blog-Details" class="bttn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- // Single Blog -->
                <!-- Single Blog -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog-3.jpg" alt="">
                        </div>

                        <div class="blog-content">
                            <div class="blog-meta">
                                <p>By <a href="#">Aseven</a> <span class="blog-categories"><a href="#">Business</a>, <a href="#">Marketing</a></span></p>
                            </div>
                            <h3><a href="Blog-Details">Identifying business cases</a></h3>
                            <p class="text">Identifying opportunities and developing business cases to.</p>
                            <a href="Blog-Details" class="bttn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- // Single Blog -->
            </div>
        </div>
    </section>
    <!-- // Blog Area -->

    <!-- Contact Area -->
    <section class="section-padding pb-0 contact-area bg-white">
        <div class="container">
            <!-- section title -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>Contact Us</h2>
                        <div class="section-line">
                            <span></span>
                            <span class="line-big"></span>
                            <span></span>
                        </div>
                        <p>Identifying opportunities and developing business cases to.Identifying opportunities and developing business cases to.</p>
                    </div>
                </div>
            </div>
            <!-- // section title -->

            <div class="row pb-90">
                <!-- Single contact info -->
                <div class="col-md-4">
                    <div class="single-contact-info text-center">
                        <i class="fas fa-map-marker"></i>
                        <p>658 West Orchard <br>ings, NC 28086</p>
                    </div>
                </div>
                <!-- // Single contact info -->
                <!-- Single contact info -->
                <div class="col-md-4">
                    <div class="single-contact-info text-center">
                        <i class="fas fa-phone"></i>
                        <p>+1 1234 5678 00 <br><span>8 AM to 11 PM</span></p>
                    </div>
                </div>
                <!-- // Single contact info -->
                <!-- Single contact info -->
                <div class="col-md-4">
                    <div class="single-contact-info text-center">
                        <i class="fas fa-envelope"></i>
                        <p>name@website.com <br> support@website.com</p>
                    </div>
                </div>
                <!-- // Single contact info -->
            </div>
        </div>

        <!-- Contact Form -->
        <div class="section-padding contact-form-area bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <!-- Form -->
					
						
						
						
						
                        <form id="contact-form" action="#" method="post" class="contact-form bg-white">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" required placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" required placeholder="Email">
                                </div>
                            </div>
                            <input type="text" name="subject" required placeholder="Subject">
                            <textarea name="message" required placeholder="Message"></textarea>

                            <div class="form-btn text-center">
                                <button class="bttn-md" type="submit">Send Message</button>
                            </div>
                        </form>
                        <!-- // Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- //Contact Form -->
    </section>
    <!-- // Contact Area -->

   <?php get_footer();?>