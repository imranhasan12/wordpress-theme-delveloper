 <!-- Footer Area -->
    <footer class="footer-area section-padding pb-90" style="background-image: url(assets/img/footer-map.png);">
        <div class="container">
            <div class="row">
                <!-- Single Footer Widget -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget footer-about">
                        <img src="<?php echo get_template_directory_uri();?>assets/img/logo-2.png" alt="">
                        <p><?php bloginfo('description')?></p>

                        <!-- Socila Links -->
                        <div class="social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/sharer?u=&lt;?php the_permalink();?&gt;&amp;t=&lt;?php the_title(); ?&gt;" target="_blank" rel="noopener noreferrer"></a></li>
                                 
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- //Socila Links -->
                    </div>
                </div>
                <!-- // Single Footer Widget -->
                <!-- Single Footer Widget -->
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="footer-widget footer-nav">
                        <div class="footer-widget-title">
                            <h4>Quick Links</h4>
                        </div>
                        <ul>
						<?php
					$args=array(
					
					'theme_location'=>'footer',
					
					);
					?>
					   <?php
                      wp_nav_menu( $args ); 
                      
                            ?>
						
                            <li><a href="about.html">About us</a></li>
                            <li><a href="service.html">Our Services</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <!-- // Single Footer Widget -->
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="footer-widget footer-nav">
                        <div class="footer-widget-title">
                            <h4>Services</h4>
                        </div>
                        <ul>
						<?php
					$args=array(
					
					'theme_location'=>'footer2',
					
					);
					?>
					   <?php
                      wp_nav_menu( $args ); 
                      
                            ?>
						
						
                            <li><a href="about.html">About us</a></li>
                            <li><a href="service.html">Our Services</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <!-- // Single Footer Widget -->


                <!-- Single Footer Widget -->
                <div class="col-lg-4">
                    <div class="footer-widget footer-form">
                        <!-- Footer Title -->
                        <div class="footer-widget-title">
                            <h4>Newsletter</h4>
                        </div>
                        <!-- // Footer Title -->
                        <p><?php bloginfo('description')?></p>
                        <form action="#">
                            <input type="email" name="email" required placeholder="Email">
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
                <!-- // Single Footer Widget -->

            </div>
        </div>
    </footer>
    <!-- // Footer Area -->

    <!-- copyright Area -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="copyright-text">&copy; <?php echo date('Y');?> | Design by <a href="https://www.begindot.com/">BeginDot</a></p>
                </div>
                 
                <div class="col-md-6">
                    <div class="footer-copyright-nav text-right">
                        <ul>
                            <li><a href="#">Term</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Site map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // copyright Area -->


   <?php wp_footer();?>
</body>

</html>
