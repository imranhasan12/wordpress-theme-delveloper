<?php get_header();?>

    <!--Full Search-->
    <div class="search-full">
        <button type="submit" class="search-close"><i class="fas fa-times"></i></button>
        <div class="search-full--inner">
            <div class="container">
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
                        <h2>Contact Us</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Breadcrumb Area -->

    <!-- Contact Area -->
    <section class="section-padding pb-0 contact-area bg-white">
        <div class="container">

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


    <!-- // copyright Area -->
<?php get_footer();?>
  