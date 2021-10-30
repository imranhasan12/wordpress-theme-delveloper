<?php get_header();


while (have_posts()){
 the_post(); ?>


 <!-- About Area -->
    <section class="section-padding bg-white about-area">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <!-- section title -->
                    <div class="section-title">
                        <h2><?php the_title();?></h2>
                        <div class="section-line">
                            <span></span>
                            <span class="line-big"></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- // section title -->

                    <div class="about-us">
					<?php the_content();?>
					
                 


                            <a href="Contact" class="bttn-md">Contact Now</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="call-back-user-image" style="background-image: url(<?php bloginfo('template_directory')?>/assets/img/about-2.jpg)"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- // About Area -->





<?php }

 get_footer();
 
?>















