
    <?php get_header();?>

	<div class="wrapper">
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<h1 style="color:<?php echo $redux_demo['fields_2']?>;"><?php echo $redux_demo['fields_1']?></h1>
							<p style="color:<?php echo $redux_demo['fields_4']?>;"><?php echo $redux_demo['fields_3']?></p>
							<div class="buttons">
								<a href="#" class="btn btn-learn">Purchase Now</a>
								<a href="Contact" class="btn btn-learn">View Featurese</a>
							</div>
						</div>
					</div>
				</div>
			</div> 
			<div class="scrolldown">
	            <a id="scroll" href="#features" class="scroll"></a>
	        </div>
		</section>
		<section id="features">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h2 style="color:<?php echo $redux_demo['fields_7']?>;"><?php echo $redux_demo['fields_6']?></h2>
							<p style="color:<?php echo $redux_demo['fields_9']?>;"><?php echo $redux_demo['fields_8']?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-xs-6 col-sm-6">
						<div class="feature-block text-center">
							<div class="icon-box">
								<i class="ion-easel"></i>
							</div>
							<h4 class="wow fadeInUp" data-wow-delay=".3s" style="color:<?php echo $redux_demo['fields_12']?>;"><?php echo $redux_demo['fields_11']?></h4>
							<p class="wow fadeInUp" data-wow-delay=".3s" style="color:<?php echo $redux_demo['fields_14']?>;"><?php echo $redux_demo['fields_13']?></p>
						</div>
					</div>
					<div class="col-md-4 col-xs-6 col-sm-6">
						<div class="feature-block text-center">
							<div class="icon-box">
								<i class="ion-paintbucket"></i>
							</div>
							<h4 class="wow fadeInUp" data-wow-delay=".3s"  style="color:<?php echo $redux_demo['fields_17']?>;"><?php echo $redux_demo['fields_16']?></h4>
							<p class="wow fadeInUp" data-wow-delay=".5s" style="color:<?php echo $redux_demo['fields_19']?>;"><?php echo $redux_demo['fields_18']?></p>
						</div>
					</div>
					<div class="col-md-4 col-xs-6 col-sm-6">
						<div class="feature-block text-center">
							<div class="icon-box">
								<i class="ion-paintbrush"></i>
							</div>
							<h4 class="wow fadeInUp" data-wow-delay=".3s"  style="color:<?php echo $redux_demo['fields_22']?>;"><?php echo $redux_demo['fields_21']?></h4>
							<p class="wow fadeInUp" data-wow-delay=".5s" style="color:<?php echo $redux_demo['fields_24']?>;"><?php echo $redux_demo['fields_23']?></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="counter">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2 style="color:<?php echo $redux_demo['fields_27']?>;"><?php echo $redux_demo['fields_26']?></h2>
						<p style="color:<?php echo $redux_demo['fields_29']?>;"><?php echo $redux_demo['fields_28']?></p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="block wow fadeInRight" data-wow-delay=".3s">
							<i class="ion-code"></i>
							<p class="count-text">
								<span class="counter-digit">136800 </span> k
							</p>
							<p>Lines Coded</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="block wow fadeInRight" data-wow-delay=".5s">
							<i class="ion-compass"></i>
							<p class="count-text">
								<span class="counter-digit">7800 </span> +
							</p>
							<p>Lines Coded</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="block wow fadeInRight" data-wow-delay=".7s">
							<i class="ion-compose"></i>
							<p class="count-text">
								<span class="counter-digit">399</span>
							</p>
							<p>Lines Coded</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="block wow fadeInRight" data-wow-delay=".9s">
							<i class="ion-image"></i>
							<p class="count-text">
								<span class="counter-digit">9995</span>
							</p>
							<p>Lines Coded</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	<section id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h2 style="color:<?php echo $redux_demo['fields_32']?>;"><?php echo $redux_demo['fields_31']?></h2>
							<p style="color:<?php echo $redux_demo['fields_34']?>;"><?php echo $redux_demo['fields_33']?></p>
						</div>
						<div class="block">
							<div class="recent-work-mixMenu">
								<ul>
									<li><button class="filter" data-filter="all">All</button></li>
									<li><button class="filter" data-filter=".category-2">Printing</button></li>
									<li><button class="filter" data-filter=".category-1">Web</button></li>
									<li><button class="filter" data-filter=".category-2">Illustration</button></li>
									<li><button class="filter" data-filter=".category-1">Media</button></li>
								</ul>
							</div>
							<div class="recent-work-pic">
								<ul id="mixed-items">
									<li class="mix category-1 col-md-4 col-xs-6" data-my-order="1">
									 <a href="portfolio-details.html" class="single-portfolio" style="background-image: url(<?php bloginfo('template_directory');?>/img/work-2.jpg);">
                                     <div class="portfolio-content">
                                    <h3>Brand Marketing</h3>
                                       <p>Branding</p>
                                      </div>
                                      </a>
									</li>
									<li class="mix category-2 col-md-4 col-xs-6" data-my-order="2">
										<a class="example-image-link" href="img/work2.jpg" data-lightbox="example-set">
											<img class="img-responsive" src="img/work2.jpg" alt="">
											<div class="overlay">
												<h3>Web design</h3>
												<i class="ion-ios-plus-empty"></i>
											</div>
										</a>
									</li>
									<li class="mix category-1 col-md-4 col-xs-6" data-my-order="3">
										<a class="example-image-link" href="img/work3.jpg" data-lightbox="example-set">
											<img class="img-responsive" src="img/work3.jpg" alt="">
											<div class="overlay">
												<h3>Web design</h3>
												<i class="ion-ios-plus-empty"></i>
											</div>
										</a>
									</li>
									<li class="mix category-2 col-md-4 col-xs-6" data-my-order="4">
										<a class="example-image-link" href="img/work4.jpg" data-lightbox="example-set">
											<img class="img-responsive" src="img/work4.jpg" alt="">
											<div class="overlay">
												<h3>Web design</h3>
												<i class="ion-ios-plus-empty"></i>
											</div>
										</a>
									</li>
									<li class="mix category-1 col-md-4 col-xs-6" data-my-order="5">
										<a class="example-image-link" href="img/work5.jpg" data-lightbox="example-set">
											<img class="img-responsive" src="img/work5.jpg" alt="">
											<div class="overlay">
												<h3>Web design</h3>
												<i class="ion-ios-plus-empty"></i>
											</div>
										</a>
									</li>
									<li class="mix category-2 col-md-4 col-xs-6" data-my-order="6">
										<a class="example-image-link" href="img/work6.jpg" data-lightbox="example-set">
											<img class="img-responsive" src="img/work6.jpg" alt="">
											<div class="overlay">
												<h3>Web design</h3>
												<i class="ion-ios-plus-empty"></i>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		
		
		

		<section id="play-video">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<h2 class="wow fadeInUp" data-wow-delay=".3s"><?php echo $redux_demo['fields_36']?></h2>
							<p class="wow fadeInUp" data-wow-delay=".5s style="color:<?php echo $redux_demo['fields_39']?>;"><?php echo $redux_demo['fields_38']?></p>
							<a href="https://vimeo.com/channels/staffpicks/145743834" class="html5lightbox" data-width=800 data-height=400>
								<div class="button ion-ios-play-outline wow zoomIn" data-wow-delay=".3s"></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="team">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2><?php echo $redux_demo['fields_41']?></h2>
						<p style="color:<?php echo $redux_demo['fields_44']?>;"><?php echo $redux_demo['fields_43']?></p>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="block wow fadeInLeft" data-wow-delay=".3s">
							<img src="<?php echo wp_get_attachment_image_src ($redux_demo['fields_50'],'full')[0];?>" alt="">
							
							<div class="team-overlay">
								<h3><?php echo $redux_demo['fields_46']?></h3>
								<span class="icon"><i class="ion-quote"></i></span>
								<p><?php echo $redux_demo['fields_48']?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4  col-sm-4 col-xs-6">
						<div class="block wow fadeInLeft" data-wow-delay=".6s">
							<img src="<?php echo wp_get_attachment_image_src ($redux_demo['fields_55'],'full')[0];?>" alt="">
							<div class="team-overlay">
								<h3 style="color:<?php echo $redux_demo['fields_52']?>;" ><?php echo $redux_demo['fields_51']?></h3>
								<span class="icon"><i class="ion-quote"></i></span>
								<p style="color:<?php echo $redux_demo['fields_54']?>;"><?php echo $redux_demo['fields_53']?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4  col-sm-4 col-xs-6">
						<div class="block wow fadeInLeft" data-wow-delay=".9s">
							<img src="<?php echo wp_get_attachment_image_src ($redux_demo['fields_60'],'full')[0];?>" alt="">
							<div class="team-overlay">
								<h3 style="color:<?php echo $redux_demo['fields_57']?>;"><?php echo $redux_demo['fields_56']?></h3>
								<span class="icon"><i class="ion-quote"></i></span>
								<p style="color:<?php echo $redux_demo['fields_59']?>;"><?php echo $redux_demo['fields_58']?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="pricing-table">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2 style="color:<?php echo $redux_demo['fields_62']?>;"><?php echo $redux_demo['fields_61']?></h2>
						<p style="color:<?php echo $redux_demo['fields_64']?>;"><?php echo $redux_demo['fields_63']?></p>
					</div>
					<div class="col-md-4 col">
						<div class="block text-center wow fadeInLeft" data-wow-delay=".3s">
							<ul>
								<li>
									<h4 style="color:<?php echo $redux_demo['fields_67']?>;" ><?php echo $redux_demo['fields_66']?></h4>
									<p style="color:<?php echo $redux_demo['fields_69']?>;"><?php echo $redux_demo['fields_68']?></p>
								</li>
								
								<li>
									<a href="#team" class="btn btn-buy">BUY NOW</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col">
						<div class="block text-center wow zoomIn" data-wow-delay=".3s">
							<ul>
								<li>
									<h4 style="color:<?php echo $redux_demo['fields_72']?>;"><?php echo $redux_demo['fields_71']?></h4>
									<p style="color:<?php echo $redux_demo['fields_74']?>;" ><?php echo $redux_demo['fields_73']?></p>
								</li>
							
								<li>
									<a href="#" class="btn btn-buy">BUY NOW</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col">
						<div class="block text-center wow fadeInRight" data-wow-delay=".3s">
							<ul>
								<li>
									<h4 style="color:<?php echo $redux_demo['fields_77']?>;" ><?php echo $redux_demo['fields_76']?></h4>
									<p style="color:<?php echo $redux_demo['fields_79']?>;"><?php echo $redux_demo['fields_78']?></p>
								</li>

								<li>
									<a href="#" class="btn btn-buy">BUY NOW</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h2 style="color:<?php echo $redux_demo['fields_82']?>;" ><?php echo $redux_demo['fields_81']?></h2>
							<p style="color:<?php echo $redux_demo['fields_84']?>;"><?php echo $redux_demo['fields_83']?></p>
						</div>
						<div id="blog-post" class="owl-carousel">
							<div>
								<div class="block">
									<img src="<?php echo wp_get_attachment_image_src ($redux_demo['fields_90'],'full')[0];?>" alt="" class="img-responsive">
									<div class="content">
										<h4 style="color:<?php echo $redux_demo['fields_87']?>;"><a href="blog.html"><?php echo $redux_demo['fields_86']?></a></h4>
										<small>By admin / Sept 18, 2014</small>
										<p style="color:<?php echo $redux_demo['fields_89']?>;">
									<?php echo $redux_demo['fields_88']?>
										</p>
										<a href="blog.html" class="btn btn-read">Read More</a>
										
									</div>
								</div>
							</div>
							<div>
								<div class="block">
									<img src="<?php echo wp_get_attachment_image_src ($redux_demo['fields_95'],'full')[0];?>" alt="" class="img-responsive">
									<div class="content">
										<h4 style="color:<?php echo $redux_demo['fields_92']?>;"><a href="blog.html"><?php echo $redux_demo['fields_91']?></a></h4>
										<small>By admin / Sept 18, 2014</small>
										<p style="color:<?php echo $redux_demo['fields_94']?>;" >
										<?php echo $redux_demo['fields_93']?>
										</p>
										<a href="blog.html" class="btn btn-read">Read More</a>
										
									</div>
								</div>
							</div>
							<div>
								<div class="block">
									<img src="<?php echo wp_get_attachment_image_src ($redux_demo['fields_100'],'full')[0];?>" alt="" class="img-responsive">
									<div class="content">
										<h4 style="color:<?php echo $redux_demo['fields_97']?>;"><a href="blog.html"><?php echo $redux_demo['fields_96']?></a></h4>
										<small>By admin / Sept 18, 2014</small>
										<p style="color:<?php echo $redux_demo['fields_99']?>;" >
										<?php echo $redux_demo['fields_98']?>
										</p>
										<a href="blog.html" class="btn btn-read">Read More</a>
										
									</div>
								</div>
							</div>
							<div>
								<div class="block">
									<img src="<?php echo wp_get_attachment_image_src ($redux_demo['fields_105'],'full')[0];?>" alt="" class="img-responsive">
									<div class="content">
										<h4 style="color:<?php echo $redux_demo['fields_102']?>;"><a href="blog.html"><?php echo $redux_demo['fields_101']?></a></h4>
										<small>By admin / Sept 18, 2014</small>
										<p style="color:<?php echo $redux_demo['fields_104']?>;">
										<?php echo $redux_demo['fields_103']?>
										</p>
										<a href="blog.html" class="btn btn-read">Read More</a>
										
									</div>
								</div>
							</div>
							<div>
								<div class="block">
									<img src="<?php echo wp_get_attachment_image_src ($redux_demo['fields_110'],'full')[0];?>" alt="" class="img-responsive" >
									<div class="content">
										<h4 style="color:<?php echo $redux_demo['fields_107']?>;" ><a href="blog.html"><?php echo $redux_demo['fields_106']?></a></h4>
										<small>By admin / Sept 18, 2014</small>
										<p style="color:<?php echo $redux_demo['fields_109']?>;">
										<?php echo $redux_demo['fields_108']?>
										</p>
										<a href="blog.html" class="btn btn-read">Read More</a>
										
									</div>
								</div>
							</div>
							
						</div>		
					</div>
				</div>
			</div> 
		</section>




		<section id="testimonial">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2 style="color:<?php echo $redux_demo['fields_112']?>;" ><?php echo $redux_demo['fields_111']?></h2>
						<p style="color:<?php echo $redux_demo['fields_114']?>;" ><?php echo $redux_demo['fields_113']?></p>
					</div>
					<div class="col col-md-6">
						<div class="media wow fadeInLeft" data-wow-delay=".3s">
						  <div class="media-left">
						    <a href="#">
						      <img src="<?php echo wp_get_attachment_image_src ($redux_demo['fields_120'],'full')[0];?>" 
							  alt="">
						    </a>
						  </div>
						  <div class="media-body">
						    <a href="#"><h4 class="media-heading" style="color:<?php echo $redux_demo['fields_117']?>;"><?php echo $redux_demo['fields_116']?></h4></a>
						    <p  style="color:<?php echo $redux_demo['fields_119']?>;" ><?php echo $redux_demo['fields_118']?></p>
						  </div>
						</div>
					</div>
					<div class="col col-md-6">
						<div class="media wow fadeInRight" data-wow-delay=".3s">
						  <div class="media-left">
						    <a href="#">
						      <img src="<?php echo wp_get_attachment_image_src ($redux_demo['fields_125'],'full')[0];?>"
							  alt="">
						    </a>
						  </div>
						  <div class="media-body">
						    <a href="#"><h4 class="media-heading"style="color:<?php echo $redux_demo['fields_122']?>;" ><?php echo $redux_demo['fields_121']?></h4></a>
						    <p style="color:<?php echo $redux_demo['fields_124']?>;"><?php echo $redux_demo['fields_123']?></p>
						  </div>
						</div>
					</div>
					<div class="col col-md-6">
						<div class="media wow fadeInLeft" data-wow-delay=".3s">
						  <div class="media-left">
						    <a href="#">
						      <img src="<?php echo wp_get_attachment_image_src($redux_demo['fields_130'],'full')[0];?>" 
							  alt="">
						    </a>
						  </div>
						  <div class="media-body">
						    <a href="#"><h4 class="media-heading" style="color:<?php echo $redux_demo['fields_127']?>;"><?php echo $redux_demo['fields_126']?></h4></a>
						    <p style="color:<?php echo $redux_demo['fields_129']?>;"><?php echo $redux_demo['fields_128']?></p>
						  </div>
						</div>
					</div>
					<div class="col col-md-6">
						<div class="media wow fadeInRight" data-wow-delay=".3s">
						  <div class="media-left">
						    <a href="#">
						      <img src="<?php echo wp_get_attachment_image_src($redux_demo['fields_135'],'full')[0];?>" 
							  alt="">
						    </a>
						  </div>
						  <div class="media-body">
						    <a href="#"><h4 class="media-heading" style="color:<?php echo $redux_demo['fields_132']?>;"><?php echo $redux_demo['fields_131']?></h4></a>
						    <p style="color:<?php echo $redux_demo['fields_134']?>;"><?php echo $redux_demo['fields_133']?></p>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="client-logo">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<div id="Client_Logo" class="owl-carousel">
								<div>
									<a href="#"><img class="img-responsive" src="<?php echo wp_get_attachment_image_src ($redux_demo['fields_5'],'full')[0];?>" alt=""></a>
								</div>
								<div>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/clientLogo/client-logo2.jpg" alt=""></a>
								</div>
								<div>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/clientLogo/client-logo3.jpg" alt=""></a>
								</div>
								<div>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/clientLogo/client-logo4.jpg" alt=""></a>
								</div>
								<div>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/clientLogo/client-logo5.jpg" alt=""></a>
								</div>
								<div>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/clientLogo/client-logo6.jpg" alt=""></a>
								</div>
								<div>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/clientLogo/client-logo1.jpg" alt=""></a>
								</div>
								<div>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/clientLogo/client-logo2.jpg" alt=""></a>
								</div>
								<div>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/clientLogo/client-logo3.jpg" alt=""></a>
								</div>
								<div>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/clientLogo/client-logo4.jpg" alt=""></a>
								</div>
								<div>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/clientLogo/client-logo5.jpg" alt=""></a>
								</div>
								<div>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>img/clientLogo/client-logo6.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="contact-form">
			<div class="container">
				<div class="row">
					<div class="title">
						<h2>CONTACT US</h2>
						<p>Dantes remained confused and silent by this explanation of the <br> thoughts which had unconsciously</p>
					</div>
					<div class="col-md-6 col">
						<!-- map -->
						<div class="map">
	                      <div id="googleMap"></div>  
	                   </div><!--/map-->

					</div>
					<div class="col-md-6">
						<form>
                            <input type="text" class="form-control" placeholder="Name">
                            <input type="text" class="form-control" placeholder="Email">
                            <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                            <button class="btn btn-default" type="submit">SEND</button>
                        </form>
					</div>
				</div>
			</div>
		</section>
		
 <?php get_footer();?>
		