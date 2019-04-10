<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome | PRACTUS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- nivo slider CSS
    ============================================ -->
    <link rel="stylesheet" href="lib/custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="lib/custom-slider/css/preview.css" type="text/css" media="screen" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120544308-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-120544308-1');
	</script>
	
	
</head>

<body>

    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="logo-area">
                            <a href="index.php"><img src="img/logo.png" alt="image"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="header-top-right m-t-20">
                            <ul>
                                <li><img src="img/email.png" style="margin-right: 10px;"><a href="mailto:corporate@practusinc.com">corporate@practusinc.com</a></li>
								<li><a href="http://mycfo.in/" target="_blank">South Asia </a></li>
                                <li><a href="http://practusadvisors.ae" target="_blank">Middle East</a></li>
								<li class="r-link">Americas & Europe</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="main-menu-area">
						<?php
							$base = basename($_SERVER['PHP_SELF']); 
                            function getMenuActive($arg){

                                $base = basename($_SERVER['PHP_SELF']); 
                                switch ($arg) {

                                        case 'services':
                                                     if($base == 'services.php') return 'active';
                                                     else if($base == 'BusinessImprovement.php') return 'active';
                                                     else if($base == 'InterimManagement.php') return 'active';
                                                     else if($base == 'OfficeofCFOSolution.php') return 'active';
                                                     else if($base == 'Turnaround.php') return 'active';
                                                     else if($base == 'Automation.php') return 'active';
                                                     else if($base == 'Post-MergerIntegration.php') return 'active';
                                        break;

                                        case 'team':
                                                     if($base == 'our-team.php') return 'active';
                                                     else if($base == 's-venkat.php') return 'active';
                                                     else if($base == 'deepakNarayanan.php') return 'active';
                                                     else if($base == 'ramnathS.php') return 'active';
                                                     else if($base == 'vinodKeni.php') return 'active';
                                                     else if($base == 'tapishnuChaudhuri.php') return 'active';
                                                     else if($base == 'shravanDoshi.php') return 'active';
                                                     else if($base == 'narayanKrishnaswamy.php') return 'active';
                                        break;
										
										
										
										case 'Resource_center':
                                                     if($base == 'events-webinars.php') return 'active';
                                                     else if($base == 'press-release.php') return 'active';
                                                     else if($base == 'login.php') return 'active';
                                        break;
										
										
								

                                        case 'why-practus':
                                                     if($base == 'why-practus.php') return 'active';
                                        break;

                                        case 'our-team':
                                                     if($base == 'our-team.php') return 'active';
                                        break;
										
										 case 'who-we-serve':
                                                     if($base == 'who-we-serve.php') return 'active';
                                        break;

                                        case 'contact-us':
                                                     if($base == 'contact-us.php') return 'active';
                                        break;
										
										case 'impact':
                                                     if($base == 'impact.php') return 'active';
                                        break;
										
										case 'clients':
                                                     if($base == 'clients.php') return 'active';
                                        break;
                                            
                                        default:
                                               return '';
                                        break;
                                }
                            }
						?>
                            <nav>
                                <ul id="nav">
                                    <li class="<?= $base == 'index.php' || $base == '' ? 'active' : ''; ?> ">
										<a href="index.php" id="<?= $base == 'index.php' || $base == '' ? 'active' : ''; ?>" >
											<div class="home">
												<div style="margin-top:36px;">Home</div>
											</div>
											<!-- <span class="menu-icon">
												<img src="img/home-icon.png">
											</span> -->
										</a>
									</li>
									
									<li class="<?= getMenuActive('who-we-serve'); ?>">
										<a href="who-we-serve.php" id="<?= getMenuActive('who-we-serve'); ?>">
											<div class="who-we-serve">
												<div style="margin-top:36px;">Who We Serve</div>
											</div>
										</a>
									</li>
									
									<li class="<?= getMenuActive('why-practus'); ?>">
										<a href="why-practus.php" id="<?= getMenuActive('why-practus'); ?>">
											<div class="who-we-are">
												<div style="margin-top:36px;">Why Practus</div>
											</div>
										</a>
									</li>
									
									<li class="<?= getMenuActive('services'); ?>">
										<a href="services.php" id="<?= getMenuActive('services'); ?>">
											<div class="services">
												<div style="margin-top:36px;">Services</div>
											</div>
										</a>
									</li>
									
									<li class="<?= getMenuActive('team'); ?>">
										<a href="our-team.php" id="<?= getMenuActive('team'); ?>">
											<div class="team">
												<div style="margin-top:36px;">Team</div>
											</div>
										</a>
									</li>
									
									<li class="<?= getMenuActive('impact'); ?>">
										<a href="impact.php" id="<?= getMenuActive('impact'); ?>">
											<div class="case-study">
												<div style="margin-top:36px;">Impact</div>
											</div>
										</a>
									</li>
									
									<li class="<?= getMenuActive('clients'); ?>">
										<a href="clients.php" id="<?= getMenuActive('clients'); ?>">
											<div class="career">
												<div style="margin-top:36px;">Clients</div>
											</div>
										</a>
									</li>
									
                                    <li class="<?= getMenuActive('Resource_center'); ?> dropdown clearfix">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="<?= getMenuActive('Resource_center'); ?>">
                                            <div class="resource_center">
                                                <div style="margin-top:36px;">Resource Center</div>
                                                <span class="caret"></span>
                                            </div>
                                        </a>
                                        <ul class="dropdown-content">
                                          <li><a href="events-webinars.php" id="<?= getMenuActive('Resource Center'); ?>">Events & Webinar</a></li>
                                          <li><a href="blog.php">Blog</a></li>
                                          <li><a href="press-release.php">Press Release</a></li>
                                          <!--<li><a href="login.php">Dashboard Login </a></li>-->
										  <li><a href="dashboard-inventory.php">Dashboard Inventory</a></li>
										  <li><a href="dashboard-ranking.php">Dashboard Ranking</a></li>
										  <li><a href="dashboard-sales.php">Dashboard Sales </a></li>
                                        </ul>
                                    </li>
									
									<li class="<?= getMenuActive('contact-us'); ?>">
										<a href="contact-us.php" id="<?= getMenuActive('contact-us'); ?>">
											<div class="contact">
												<div style="margin-top:36px;">Contact Us</div>
											</div>
										</a>
									</li>
									
                                   <!--  <li><a href="#"><span class="menu-icon"><img src="img/weho-we-icon.png"></span>Who we are</a></li>
									<li><a href="#"><span class="menu-icon"><img src="img/sevices.png"></span>Services</a></li>
									<li><a href="#"><span class="menu-icon"><img src="img/team-icon.png"></span>Team</a></li>
									<li><a href="#"><span class="menu-icon"><img src="img/case-study.png"></span>Case Studies</a></li>
									<li><a href="#"><span class="menu-icon"><img src="img/careers-icon.png"></span>Careers</a></li>
									<li><a href="#"><span class="menu-icon"><img src="img/location.png"></span>Locations</a></li>
									<li><a href="#"><span class="menu-icon"><img src="img/contact.png"></span>Contact Us</a></li>  -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li class="active has-submenu" id="active"><a href="index.php">Home</a></li>
									<li><a href="who-we-serve.php">Who We Serve</a></li>
									<li><a href="why-practus.php">Why Practus</a></li>
									<li><a href="services.php">Services</a></li>
									<li><a href="our-team.php">Team</a></li>
									<li><a href="impact.php">Impact</a></li>
									<li><a href="clients.php">Clients</a></li> 
                                    <li class="dropdown clearfix"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Resource Center</a>
                                        <ul class="dropdown-content">
                                          <li><a href="events-webinars.php">Events & Webinar</a></li>
                                          <li><a href="#">Blog</a></li>
                                          <li><a href="press-release.php">Press Release</a></li>
                                        </ul>
                                    </li> 
									<li><a href="contact-us.php">Contact Us</a></li> 
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    