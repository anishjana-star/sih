<!DOCTYPE html>
<html lang="en">

<?php
session_start();

?>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Learn India - Home</title> 
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/learn-india-logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/learn-india-logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>


    







      <!-- <link rel="stylesheet" type="text/css" href="//p23.zdassets.com/hc/theming_assets/10229323/360005412573/style.css?digest=17155768911127"> -->


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->
<!--	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">User Login</h4>
			</div>
			<div class="modal-body customer-box">
				--><!-- Nav tabs --><!--
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>-->

				<!-- Tab panes 
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input name="uname" required class="form-control" id="email1" placeholder="Enter Email" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input name="password" required class="form-control" id="exampleInputPassword1" placeholder="Enter Password" type="password">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button name="login" type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>-->
									<!--<a class="for-pwd" href="javascript:;">Forgot your password?</a>--><!--
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" method="post" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" required name="username" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" required name="email" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" required name="cno" id="mobile" placeholder="Mobile" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" required name="pass" id="password" placeholder="Password" type="text">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="submit" name="register" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button"  data-dismiss="modal" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
<?php /*include_once("login.php");*/?>-->
    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light" style="background-image: url(images/slider_04.jpg);">
			<div class="container-fluid" style="background-color: rgba(203, 234, 234, 0.605); border-radius: 10px;">
				<a class="navbar-brand" href="index.php">
					<img src="images/learn-india-logo.png" alt="" style="width: 50px;"/>
                    <span class="text-dark" style="font-weight: 600;">Learn India</span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto " style="font-weight: 400;">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="course.php" id="dropdown-a" data-toggle="dropdown"> Course </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <ul>
                                <a class="dropdown-item" href="course-grid-1.php"> English </a>
								<a class="dropdown-item" href="course-grid-2.php"> Basic knowledge </a>
								<a class="dropdown-item" href="course-grid-3.php"> General knowledge </a>
								<a class="dropdown-item" href="course-grid-4.php"> Advanced knowledge </a>
                                    <ul>
                                    <li><a class="dropdown-item" href="course-grid-1.php"> Technical </a>
                                    <ul>
                                    <li><a class="dropdown-item" href="course-grid-1.php"> B.Tech </a></li>
                                    <li><a class="dropdown-item" href="course-grid-1.php"> B.Arch </a></li>
                                    <li><a class="dropdown-item" href="course-grid-1.php"> BBA </a></li>
                                    <li><a class="dropdown-item" href="course-grid-1.php"> BCA </a></li>
                                    <li><a class="dropdown-item" href="course-grid-1.php"> B Voc </a></li>
                                    <li><a class="dropdown-item" href="course-grid-1.php"> Diploma </a></li>
                                    <li><a class="dropdown-item" href="course-grid-1.php"> ITI </a></li>
                                    </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="course-grid-1.php"> Non-Technical & Medical </a></li>
                                    <li><a class="dropdown-item" href="course-grid-1.php"> Arts & Crafts </a></li>
                                   </ul>
                                </li>
                                </ul>
							</div>
						</li>
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"> Schemes </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="loan.php"> Loan </a>
								<a class="dropdown-item" href="scholarship.php"> Scholarship </a>
							</div>
						</li>
                        <li class="nav-item"><a class="nav-link" href="Mentor.php">Mentor</a></li>
                        <li class="nav-item"><a class="nav-link" href="News.php">Admin</a></li>
						<!-- <li class="nav-item"><a class="nav-link" href="teachers.php">Teachers</a></li> -->
						<li class="nav-item"><a class="nav-link" href="Support.php"> Support </a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>
					
						<?php
						if(isset($_SESSION['id']) && isset($_SESSION['username'])){
							//echo '<script>alert("id='.$_SESSION['id'].' and '.$_SESSION['username'].'");</script>';
							?>
							<ul class="nav navbar-nav navbar-right">
						<li class="nav-item"><a class="nav-link" href="dashboard.php">DASHBOARD</a></li>
						<li><a class="mt-2 hover-btn-new log orange" href="logout.php"><span> Log out </span></a></li>
							<?php
						}

						else{
						?>
						
						<ul class="nav navbar-nav navbar-right">
							<li><a class=" hover-btn-new log orange" href="Login/"><span> Sign In </span></a></li>
						</ul>
					</ul>

				<?php }?>
                        
                    
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/slider_03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><strong>Learn India</strong> Make your bright Future</h2>
										<p class="lead"> Learning is never done without errors and defeat.</p>
											<a href="contact.php" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<!-- <a href="#" class="hover-btn-new"><span>Read More</span></a> -->
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/top_01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomIn">Hi-Tech<strong> Learning</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">The more that you read, the more things you will know. The more that you learn, the more places you'll go.</p>
											<a href="contact.php" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<!-- <a href="#" class="hover-btn-new"><span>Read More</span></a> -->
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider_05.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>COMPUTER</strong> Literacy</h2>
										<p class="lead" data-animation="animated fadeInLeft"> Everybody should learn to program a computer, because it teaches you how to think.
											</p>
											<a href="contact.php" class="hover-btn-new"><span>Contact Us</span></a>
											
											<!-- <a href="#" class="hover-btn-new"><span>Read More</span></a> -->
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" >
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
    <div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>About</h3>
                    <p class="lead">This website is a revolutionary online platform dedicated to providing free and accessible education to children in rural villages across India and various countries worldwide. With the aim of boosting literacy rates and empowering the next generation, this website is a beacon of hope for communities with limited access to quality education</p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>2023 BEST Online Learing Platform in India</h4>
                        <h2> Our Commitment</h2>
                        <p>At learn India, we are committed to transparency, accountability, and measurable impact. We regularly assess the progress and learning outcomes of the children using our platform, ensuring that our efforts are making a real difference in their lives and run towards a world where education is not weighted against money.</p>

                        <!-- <a href="#" class="hover-btn-new orange"><span>Learn More</span></a> -->
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/commit_01.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>

            <br>
            <hr>
            <br><br>
            
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/stdts.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2> Get your best learning here </h2>
                        <p>Welcome to learn India, where we believe that every child, regardless of their background, deserves access to quality education. Our mission is to bridge the gap between urban and rural learning environments, ensuring that every young mind in India has the opportunity to flourish and reach their full potential. We are here to give you the best studies and quality education to promote India to new hights.</p>

                        <!-- <a href="#" class="hover-btn-new orange"><span>Learn More</span></a> -->
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <!-- <section class="section lb page-section">
		<div class="container">
			 <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Our history</h3>
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                </div>
            </div>
			<div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2018</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2015</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2014</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2012</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>2010</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2007</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>2004</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>2002</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus. Lorem
									ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap"  style="background-color: black;">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count">100</p>
					<h3>Students</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count">5</p>
					<h3>Courses</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p class="stat_count">1</p>
					<h3>Month Completed</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

    <!-- <div id="plan" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Choose Your Plan</h3>
                <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="message-box">
                        <ul class="nav nav-pills nav-stacked" id="myTabs">
                            <li><a class="active" href="#tab1" data-toggle="pill">Monthly Subscription</a></li>
                            <li><a href="#tab2" data-toggle="pill">Yearly Subscription</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$45</h2>
                                            <h3>per month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$59</h2>
                                            <h3>per month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$85</h2>
                                            <h3>per month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab2">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$477</h2>
                                            <h3>Year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$485</h2>
                                            <h3>Year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$500</h2>
                                            <h3>Year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->





          
      <!-- <div class="container hero" style="text-align: center;">
        <h1>Help Center</h1>
        <p>Search our knowledge base or browse categories below.</p>
      </div>
      <div class="container" style="text-align: center;"> 
        <div class="search"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12" class="search-icon" aria-hidden="true">
            <circle cx="4.5" cy="4.5" r="4" fill="none" stroke="currentColor"/>
            <path stroke="currentColor" stroke-linecap="round" d="M11 11L7.5 7.5"/>
          </svg>
          <form role="search" class="search" data-search="" data-instant="true" autocomplete="off" action="/hc/en-us/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" autocomplete="off" /><input type="search" name="query" id="query" placeholder="Start your search" autocomplete="off" aria-label="Start your search" /></form>
        </div> 
      </div>
      
      <div class="container">
      <section class="knowledge-base">
       
       <div class="category-tree">
       
       <section class="category">
       
       <h2 class="border-bottom">Account Support</h2>
       
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360010568014-Profile-Management">Profile Management</a>
         </div>
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360011281953-Billing">Billing</a>
         </div>
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360010179374-Email-Support">Email Support</a>
         </div>
       
      
       
       </section>

       <br>
       
       <section class="category">
       
       <h2 class="border-bottom">Hiring on Dribbble</h2>
       
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360011281873-Designer-Search">Designer Search</a>
         </div>
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360011281913-Job-Board">Job Board</a>
         </div>
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360010179294-Freelance-Projects">Freelance Projects</a>
         </div>
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360010179254-Hiring-Basics">Hiring Basics</a>
         </div>
       
      
       
       </section>
       
       <section class="category">
       
       <h2 class="border-bottom">For Designers</h2>
       
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/4412798788119-Dribbble-Marketplace">Dribbble Marketplace</a>
         </div>
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360011281293-Sharing-your-Work">Sharing your Work</a>
         </div>
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360011281513-Pro">Pro</a>
         </div>
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360011281693-Pro-Business-Teams">Pro Business + Teams</a>
         </div>
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360011281813-Designer-Accounts-Invitations">Designer Accounts &amp; Invitations</a>
         </div>
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360010178854-Exposure">Exposure</a>
         </div>
       
      
       
       </section>
       
       <section class="category">
       
       <h2 class="border-bottom">About Learn India</h2>
       
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360010179394-Abuse">Abuse</a>
         </div>
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360010179434-Apps-Integrations-APIs">Apps, Integrations &amp; APIs</a>
         </div>
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/360011282133-Dribbble-Basics">Learn India Basics</a>
         </div>
       
      
       
       </section>
       
       <section class="category">
       
       <h2 class="border-bottom">Learn Education</h2>
       
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/9640072355607-Dribbble-Courses">Learn India Courses</a>
         </div>
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/9640044720023-Education-Refund-Requests">Education Refund Requests</a>
         </div>
       
         <div class="item-link"> 
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
            <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
          </svg>     
               <a href="/hc/en-us/sections/1500000494682-Workshops">Workshops</a>
         </div>
       
      
       
       </section>
       
      
       
       </div>
       
      </section>
      </div>
      
      <div class="container" style="text-align: center;">
        <div class="internal-container"> 
          <div class="footer-cta">
            <h3>Do you need additional assistance?</h3> 
            <p>Our friendly support team is here to help.</p>

          </div>
        </div>
      </div> -->


      
    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/parallax_04.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p>Learn india has revolutionized our child's learning experience with its exceptional, free online resources and interactive lessons, making education an enjoyable and enriching journey.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="testi_01.png" alt="" class="img-fluid">
                                <h4>Amit Roy Chowdhury</h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support! </h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>

                            
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="testi_02.png" alt="" class="img-fluid">
                                <h4> Pabitra Bera </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="dev_01.png" alt="" class="img-fluid">
                                <h4> Debajit Jana </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Good Work </h3>
                                <p class="lead">You cannot change your destination overnight, but you can change your direction overnight</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <img src="testi_04.png" alt="" class="img-fluid">
                                <h4> Partha Pratim Patra </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <!-- <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div>
        </div>
    </div> -->


	<div class="all-title-box" style="background-color: white;">
		<div class="container text-center">
			<h1>Contact<span class="m_1"> Are easy to find, so a visitor can quickly get in touch with you. </span></h1>
		</div>
	</div>

    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Need Help? Sure we are Online!</h3>
                <p class="lead">If you have any specific questions or need assistance with something, feel free to let me know. I'm here to help! Our 24*7 support is always here to help and took your questions to best teachers</p>
				
            </div><!-- end title -->

            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="" action="contact.php" name="contactform" method="post">
                            <div class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input required type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input required type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input required type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input required type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="text-center pd">
                                    <button name="submit" type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
				<div class="col-xl-6 col-md-12 col-sm-12">
                <a href="https://maps.app.goo.gl/rKCThjPkbcbBSrfz5" target="_blank">
					<div class="map-box">
                        <img src="images/rcc_01.jpg">
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->






    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p>Welcome to learn India, where we believe that every child, regardless of their background, deserves access to quality education.</p>   
						<div class="footer-right">
							<ul class="footer-links-soi">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul><!-- end links -->
						</div>						
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="Mentor.php">Mentor</a></li>
						<li class="nav-item"><a class="nav-link" href="Support.php"> Support </a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">anishjana4@gmail.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li> Canal S Rd, Beleghata, Kolkata, West Bengal 700015 </li>
                            <li>+91 12345 67890</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2023 <a href="#">Learn India</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>