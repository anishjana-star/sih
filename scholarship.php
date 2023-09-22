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
    <title>Learn India - Scholarship</title>  
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









	<section class="blog_area single-post-area" style="padding-top: 0px">
	<br>
	<br>
	<h2 style="text-align: center; font-weight: 600; ">Scholarship</h2>
	<hr>
			<div class="container">

				
				<!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				<div class="row pl-auto pr-auto " align="center">
				<div class="col-md-2 col-4 ml-auto mr-auto"  >
				<img  class="img-fluid" src="img/home/w2.png">
				</div>
				<div class="col-md-8"><h4 style="color:#C96A2F">APPLY ONLINE </h4>
				Online portal for applying to some of the state government schemes implemented by WCD. The applicant has to do an ONE-TIME REGISTRATIOn to apply for schemes <br>
				<a href="http://schemes.wcd.kerala.gov.in"   class="btn btn-warning btn-sm">CLICK HERE</a>
				</div>
				</div>
				</div> -->
			<div class="row">
            
<!--         <div class="col-md-4">
          <div class="card-content">
            <div class="card-img">
 <img src="../Media/images/shfolder/Kathorth.png">

                
                  <span><h4>1</h4></span>
            </div>
            <div class="card-desc">
              <h3>Kathorth</h3>
              <p>
                <p>The District Level Center for Women has been set up at the district level under the Mahila Shakthi Kendra scheme implemented by the Department of Women and Child Development.&nbsp;Under the supervision of these, women in need of services can register on the portal specially designed for the scheme and hand over the counseling, legal aid and police assistance to the concerned consultants on a case-by-case basis and inform th...</p>
              <a href="scheme-info.php?id=MTA=" class="btn-card">Read</a>   
            </div>
          </div>
        </div>
                     </div>	 -->

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 pt-5" >
          <div class="card-blog">
          <a href="https://scholarships.gov.in/" target="_blank">
                     <img src="nsp.jpeg" class="card-img rounded-0">
            
            <div class="card-blog-body">
              <a href="https://scholarships.gov.in/" target="_blank">
                <h3 style="font-weight: 600;">National Scholarship(NSP)</h3>
              </a>
              <p>
                <p>NSP, National Scholarship Portal 2023-24 - The National Scholarship Portal (NSP) is the central portal to apply for state level, central level, and UGC scholarship schemes. NSP registration forms will be made available online on NSP scholarship portal, scholarships.gov.in. The National scholarship portal last date varies as per scheme. The last date for central schemes is expected to fall in November 2023, students can apply for centeral schemes through NSP portal. The last date for UGC/AICTE and state schemes is expected to fall in December 2023. However, the last date for scholarship by the Ministry of Social Justice and Empowerment may fall in January 2024.</p></p>
              <!-- <a class="button" href="scheme-info.php?id=NA==">View</a> -->
            </div>
          </div>
          
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 pt-5" >
          <div class="card-blog">
          <a href="https://necouncil.gov.in/nec-scholarship-guidelines" target="_blank">
                     <img src="nec.jpg" class="card-img rounded-0">
            
            <div class="card-blog-body">
              <a href="https://necouncil.gov.in/nec-scholarship-guidelines" target="_blank">
                <h3 style="font-weight: 600;">NEC Merit Scholarship</h3>
              </a>
              <p>
                <p>NEC Merit Scholarship for Students of NER 2022-23 is an initiative for students pursuing diploma/degree/postgraduate course or registered M.Phil./Ph.D. programme. The scholarship is being offered by the North Eastern Council, Ministry of Development of North Eastern Region, Government of India to the eligible candidates of the North Eastern States. The scholarship aims at providing financial aid to students of the North-Eastern Region studying in a recognized Indian institution. The students will receive financial help of up to INR 30,000 per annum.</p>
              <!-- <a class="button" href="scheme-info.php?id=MTA=">View</a> -->
            </div>
          </div>
          
        </div>
          
<!--         <div class="col-md-4">
          <div class="card-content">
            <div class="card-img">
 <img src="../Media/images/shfolder/Pradhan Manthri Mathru Vandana Yojna (PMMVY).png">

                
                  <span><h4>2</h4></span>
            </div>
            <div class="card-desc">
              <h3>Pradhan Manthri Mathru Vandana Yojna (PMMVY)</h3>
              <p>
                <p>PMMVY, a maternity benefit programme is being run by the department since 01/01/2017.&nbsp; The scheme is implemented in Kerala using the platform of Anganawadi Services of Umbrella ICDS. The scheme is implemented through a centrally deployed MIS with the aim of compensating partial wage loss, improve health seeking behaviour, improve nutritional status and to promote exclusive breast feeding.</p></p>
              <a href="scheme-info.php?id=OQ==" class="btn-card">Read</a>   
            </div>
          </div>
        </div>
                     </div>	 -->
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 pt-5" >
          <div class="card-blog">
          <a href="https://www.desw.gov.in/en/prime-ministers-scholarship-scheme-pmss#:~:text=Prime%20Minister's%20Scholarship%20Scheme%20(PMSS)&text=Scholarships%20are%20available%20for%20education,Scheme%20was%20introduced%20in%202006." target="_blank">
                     <img src="pmms.jpg" class="card-img rounded-0">
            
            <div class="card-blog-body">
              <a href="https://www.desw.gov.in/en/prime-ministers-scholarship-scheme-pmss#:~:text=Prime%20Minister's%20Scholarship%20Scheme%20(PMSS)&text=Scholarships%20are%20available%20for%20education,Scheme%20was%20introduced%20in%202006." target="_blank">
                <h3 style="font-weight: 600;">Prime Minister's Scholarship</h3>
              </a>
              <p>
                <p>Scholarships are available for education at various technical institutions (medical, dental, veterinary, engineering, MBA, MCA and other equivalent technical institutions having AICTE/UGC approval). The Scheme was introduced in 2006.</p>
              <!-- <a class="button" href="scheme-info.php?id=OQ==">View</a> -->
            </div>
          </div>
          
        </div>
          
<!--         <div class="col-md-4">
          <div class="card-content">
            <div class="card-img">
 <img src="../Media/images/shfolder/SAHAYA HASTHAM.jpg">

                
                  <span><h4>3</h4></span>
            </div>
            <div class="card-desc">
              <h3>SAHAYA HASTHAM</h3>
              <p>
                <p>The &nbsp;number of widows &nbsp;in Kerala is very High. &nbsp;Majority of this families are living in deplorable &nbsp; conditions. &nbsp; The scheme propose to &nbsp;extend a helping hand &nbsp;to these families by way of providing &nbsp;financial &nbsp;assistance to self employment. &nbsp;This is a one time Financial Assistance. &nbsp;</p></p>
              <a href="scheme-info.php?id=Nw==" class="btn-card">Read</a>   
            </div>
          </div>
        </div>
                     </div>	 -->
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 pt-5" >
          <div class="card-blog">
              <a href="https://dsel.education.gov.in/scheme/nmmss" target="_blank">
                     <img src="nmms.jpg" class="card-img rounded-0">
            
            <div class="card-blog-body">
              <a href="https://dsel.education.gov.in/scheme/nmmss" target="_blank">
                <h3 style="font-weight: 600;">National Means Cum Merit Scholarship</h3>
              </a>
              <p>
                <p>Students who are studying in class 8 as regular students in a Government, Government-aided and local body school in India are eligible for NMMS scholarship 2023. The student must have secured a minimum of 55 per cent of marks in Class 8 for qualifying the eligibility for NMMS. (50 per cent for SC/ST students).</p>
              <!-- <a class="button" href="scheme-info.php?id=Nw==">View</a> -->
            </div>
          </div>
          
        </div>
          
<!--         <div class="col-md-4">
          <div class="card-content">
            <div class="card-img">
 <img src="../Media/images/shfolder/Abhayakiranam.jpg">

                
                  <span><h4>4</h4></span>
            </div>
            <div class="card-desc">
              <h3>Abhayakiranam</h3>
              <p>
                <p>With an objective of providing&nbsp; a safe and better living environment to destitute and Homeless widows.&nbsp; The scheme&nbsp; provides monthly financial assistance of Rs. 1000 to the close relatives of destitute widows who provide protection and shelter to them.&nbsp;</p></p>
              <a href="scheme-info.php?id=Ng==" class="btn-card">Read</a>   
            </div>
          </div>
        </div>
                     </div>	 -->
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 pt-5" >
          <div class="card-blog">
          <a href="https://www.education.gov.in/scholarships-education-loan-0" target="_blank">
                     <img src="css.jpg" class="card-img rounded-0">
            
            <div class="card-blog-body">
              <a href="https://www.education.gov.in/scholarships-education-loan-0" target="_blank">
                <h3 style="font-weight: 600;">Central Sector Scheme Of Scholarships</h3>
              </a>
              <p>
                <p>This scheme was introduced by the department of higher education during the 11th five-year plan. Through this scheme, 82000 scholarships are offered every year for which 50% of seats are reserved for girls and 50% of seats are reserved for boys.</p></p>
              <!-- <a class="button" href="scheme-info.php?id=Ng==">View</a> -->
            </div>
          </div>
          
        </div>
          
<!--         <div class="col-md-4">
          <div class="card-content">
            <div class="card-img">
 <img src="../Media/images/shfolder/Mangalya scheme for widow remarriage.jpg">

                
                  <span><h4>5</h4></span>
            </div>
            <div class="card-desc">
              <h3>Mangalya scheme for widow remarriage</h3>
              <p>
                <p>In Kerala Women &nbsp;not only out number men, but also outlive them,&nbsp; So the martial status of women&nbsp; in Kerala is very important .&nbsp; It could influence&nbsp; the overall level of care and&nbsp; support they receive from their family and society.&nbsp; Statics shows only 3.5 percent of the total male population&nbsp; in Kerala are widowers and the&nbsp; proportion of the widowed &nbsp;female population&nbsp; ...</p>
              <a href="scheme-info.php?id=NQ==" class="btn-card">Read</a>   
            </div>
          </div>
        </div>
                     </div>	 -->
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 pt-5" >
          <div class="card-blog">
          <a href="https://rgnf.ugc.ac.in/" target="_blank">
                     <img src="rgnf.jpeg" class="card-img rounded-0">
            
            <div class="card-blog-body">
              <a href="https://rgnf.ugc.ac.in/" target="_blank">
                <h3 style="font-weight: 600;">Rajiv Gandhi National Fellowship (RGNF)</h3>
              </a>
              <p>
                <p>The Rajiv Gandhi National Fellowship (RGNF) Scheme for Scheduled Caste is formulated and funded by the Ministry of Social Justice &Empowerment. The scheme is open to candidates who belong to Scheduled Caste and are pursuing higher studies such as regular and full-time M. Phil. and Ph.</p>
              <!-- <a class="button" href="scheme-info.php?id=NQ==">View</a> -->
            </div>
          </div>
          
        </div>
          
<!--         <div class="col-md-4">
          <div class="card-content">
            <div class="card-img">
 <img src="../Media/images/shfolder/Educational Assistance to Women  Headed Family.jpg">

                
                  <span><h4>6</h4></span>
            </div>
            <div class="card-desc">
              <h3>Educational Assistance to Women  Headed Family</h3>
              <p>
                <p>The number of women Headed family in Kerala is very High.&nbsp; Majority of these families are living in deplorable conditions. The scheme propose to&nbsp; extend a helping hand&nbsp; to these families by way of providing&nbsp; financial&nbsp; assistance to the education&nbsp; of children.</p></p>
              <a href="scheme-info.php?id=NA==" class="btn-card">Read</a>   
            </div>
          </div>
        </div>
                     </div>	 -->
        
          
					
			</div>
	</section>






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

</body>
</html>