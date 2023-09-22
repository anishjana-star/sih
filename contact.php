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
    <title>Learn India - Contact</title>  
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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	

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
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"> Course </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="course-grid-1.php"> English </a>
								<a class="dropdown-item" href="course-grid-2.php"> Basic knowledge </a>
								<a class="dropdown-item" href="course-grid-3.php"> General knowledge </a>
								<a class="dropdown-item" href="course-grid-4.php"> Advanced knowledge </a>
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
	
	<div class="all-title-box">
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
                        <form id="contactform" class=""  name="contactform" method="post">
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
                                    <textarea required class="form-control" name="comments" id="comments" rows="6" placeholder="Ask Your Question.."></textarea>
                                </div>
                                <div class="text-center pd">
                                    <button type="submit" name="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->


                <?php
                include_once("db.php");
                if(isset($_POST['submit']))
                {
                    $fname=$_POST['first_name'];
                    $lname=$_POST['last_name'];
                    $email=$_POST['email'];
                    $phone=$_POST['phone'];
                    $comments=$_POST['comments'];

                    $sql=$conn->query("SELECT * FROM feedbacks where  fname='$fname' and lname='$lname' and email='$email' and cno='$phone' and description='$comments' ;");
                    if(mysqli_num_rows($sql)==0)
                    {
                        $sql5=$conn->query("INSERT INTO feedbacks(fname,lname,email,cno,description) values('$fname','$lname','$email','$phone','$comments') ;");
                        if($sql5)
                        {
                            echo '<script>alert("Comments sent successfully !");</script>';
                        }
                        else{
                            echo '<script>alert("Sorry! Couldnt Send Comments !");</script>';
                        }
                    }
                }


                ?>
				<div class="col-xl-6 col-md-12 col-sm-12">
                    <a href="https://maps.app.goo.gl/rKCThjPkbcbBSrfz5" target="_blank">
                    <img src="images/rcc_01.jpg">
				</div>
            </div>
        </div>
    </div>
	
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

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> 
							This website is a revolutionary online platform dedicated to providing free and accessible education to children in rural villages across India and various countries worldwide. With the aim of boosting literacy rates and empowering the next generation, this website is a beacon of hope for communities with limited access to quality education </p>
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
	<!-- <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script> -->
	<!-- Mapsed JavaScript -->
	<script src="js/mapsed.js"></script>
	<script src="js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>