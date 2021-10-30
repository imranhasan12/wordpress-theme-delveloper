<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <title><?php bloginfo('name')?></title>
     
    
     
	<?php wp_head();?>
</head>

<body?php body_class();?> >




    <!-- Preloader -->
	
	<?php
       if($redux_demo['fields_35']){ ?>
		   
		       <div class="preloader">
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    <!-- // Preloader -->
		   
		   
    <?php }
	
	?>



					
    <!--Header Area-->
    <header class="header-area white-bg fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid pl-0 pr-0">
                <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto main-menu">
					
					
						<?php
					$args=array(
					
					'theme_location'=>'header',
					
					);
					?>
					   <?php
                      wp_nav_menu( $args ); 
                      
                            ?>
					
					
					
					
					
					
						 
						 
						 
                        <li class="nav-item"><a class="nav-link" href="Home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="About">About</a></li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="Service">Service</a>
                                <a class="dropdown-item" href="services-details.html">Service Details</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
                                <a class="dropdown-item" href="Blog 1">Blog 1</a>
                                <a class="dropdown-item" href="blog 2">Blog 2</a>
                                <a class="dropdown-item" href="Blog Details">Blog Details</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="Contact">Contact</a></li>
                    </ul>

                    <div class="header-btn justify-content-end">
                        <button type="button" class="search-btn"><i class="fas fa-search"></i></button>
                    </div>

                </div>
            </div>
        </nav>
    </header>
					
					
					
					
					
					
					
					
					
					
					
                     
					
					
					
					
                       