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
    <title>Learn India - Support</title>  
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








    <link rel="canonical" href="https://support.dribbble.com/hc/en-us">
    <link rel="alternate" hreflang="en" href="https://support.dribbble.com/hc/en-us">
    
      <link rel="stylesheet" href="//static.zdassets.com/hc/assets/application-5dedcabe00a896eb2c214ed2973f0975.css" media="all" id="stylesheet" />
      <link rel="stylesheet" type="text/css" href="//p23.zdassets.com/hc/theming_assets/10229323/360005412573/style.css?digest=17155768911127">
    
      <link rel="icon" type="image/x-icon" href="//theme.zdassets.com/theme_assets/10229323/e9863621c513e777a4004294fafee029ca0bb59a.svg" />
    
        
        
    
      <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Help Center for Dribbble — where designers gain inspiration, feedback, community, and jobs. Dribbble is your best resource to discover and connect with designers worldwide.">

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
	
	<!-- <div class="all-title-box">
		<div class="container text-center">
			<h1>Blog<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
		</div>
	</div> -->

    <!-- <a class="skip-navigation" tabindex="1" href="#main-content">Skip to main content</a> -->

<!-- <header class="header container">
  <div class="logo">
    <a title="Home" href="/hc/en-us">
      <img src="images/learn-india-logo.png" alt="" style="width: 40px; height: 60px;">
      <span class="text-dark" style="font-weight: 500; font-size: 30px;">Learn India</span>
    </a>
  </div>
</header> -->
<br>


<main role="main">
    
<div class="container hero">
  <h1>Help Center</h1>
  <p>Search our knowledge base or browse categories below.</p>
</div>
<div class="container"> 
  <!-- <div class="search"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12" class="search-icon" aria-hidden="true">
      <circle cx="4.5" cy="4.5" r="4" fill="none" stroke="currentColor"/>
      <path stroke="currentColor" stroke-linecap="round" d="M11 11L7.5 7.5"/>
    </svg>
    <form role="search" class="search" data-search="" data-instant="true" autocomplete="off" action="/hc/en-us/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" autocomplete="off" /><input type="search" name="query" id="query" placeholder="Start your search" autocomplete="off" aria-label="Start your search" /></form>
  </div>  -->
</div>

<div class="container">
<section class="knowledge-base">
 
 <div class="category-tree">

 <section class="category">
 
 <h2 class="border-bottom">Technical Skills</h2>
 
 
   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="/hc/en-us/sections/360011281873-Designer-Search">Typing Skills</a>
   </div>
 
   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="/hc/en-us/sections/360011281913-Job-Board">Using Web Browsers</a>
   </div>
 
   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="/hc/en-us/sections/360010179294-Freelance-Projects">File Maintenance</a>
   </div>
 
   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="/hc/en-us/sections/360010179254-Hiring-Basics">Using the Internet</a>
   </div>

   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="/hc/en-us/sections/360010179254-Hiring-Basics">MS Office</a>
   </div>

   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="/hc/en-us/sections/360010179254-Hiring-Basics">E-mailing</a>
   </div>
 

 
 </section>
 
 <section class="category">
 
 <h2 class="border-bottom">Non Technical Skills</h2>
 
 
   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="/hc/en-us/sections/360010568014-Profile-Management">Communication</a>
   </div>
 
   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="/hc/en-us/sections/360011281953-Billing">Problem Solving</a>
   </div>
 
   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="/hc/en-us/sections/360010179374-Email-Support">Creativity</a>
   </div>

   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="/hc/en-us/sections/360010179374-Email-Support">Profile Management</a>
   </div>
 

 
 </section>

 
 <section class="category">
 
 <h2 class="border-bottom">English Skills</h2>
 
 
   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="reading.html">Reading</a>
   </div>
 
   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="listening.html">Listening</a>
   </div>
 
   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="Writing.html">Writing</a>
   </div>
 
   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="Speaking.html">Speaking</a>
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
	 	<a href="/hc/en-us/sections/360010179394-Abuse">Courses</a>
   </div>
 
   <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="/hc/en-us/sections/360010179434-Apps-Integrations-APIs">Schemes</a>
   </div>
 
   <!-- <div class="item-link"> 
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="3.25" stroke="#9E9EA7" stroke-width="1.5"/>
      <line x1="5.33333" y1="5.66667" x2="15.75" y2="5.66667" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="10.25" x2="13.9167" y2="10.25" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
      <line x1="5.33333" y1="14.8333" x2="10.25" y2="14.8333" stroke="#9E9EA7" stroke-width="1.5" stroke-linecap="round"/>
    </svg>     
	 	<a href="/hc/en-us/sections/360011282133-Dribbble-Basics">Learn India Basics</a>
   </div> -->
 

 
 </section>
 
 <!-- <section class="category">
 
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
 

 
 </section> -->
 

 
 </div>
 
</section>
</div>

<div class="container">
  <div class="internal-container"> 
    <div class="footer-cta">
      <h3>Do you need additional assistance?</h3> 
      <p>Our friendly support team is here to help.</p>
      <a class="submit-a-request button button-primary" href="contact.php">Contact Learn India</a>
    </div>
  </div>
</div>

  </main>

  
<!-- <footer class="container">
  <div class="footer border-top">
    <div>
      <a href="https://dribbble.com">Learn India</a>
      <span class="px-8">|</span>
      <a title="Home" href="/hc/en-us">Help Center</a>
    </div>
    <div>
      Art by <a href="https://dribbble.com/gillianlevine">Anish Jana</a>
    </div>
  </div>
</footer> -->

    












	
    <!-- <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                </div>
            </div>
            <hr class="invis"> 

            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="images/blog_1.jpg" alt="" class="img-fluid">
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
						</div>
						<div class="blog-title">
							<h2><a href="#" title="">perferendis doloribus asperiores.</a></h2>
						</div>
						<div class="blog-desc">
							<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="#"><span>Read More<span></a>
						</div>
					</div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="images/blog_2.jpg" alt="" class="img-fluid">
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
						</div>
						<div class="blog-title">
							<h2><a href="#" title="">perferendis doloribus asperiores.</a></h2>
						</div>
						<div class="blog-desc">
							<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="#"><span>Read More</span></a>
						</div>
					</div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="images/blog_3.jpg" alt="" class="img-fluid">
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
						</div>
						<div class="blog-title">
							<h2><a href="#" title="">perferendis doloribus asperiores.</a></h2>
						</div>
						<div class="blog-desc">
							<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="#"><span>Read More</span></a>
						</div>
					</div>
                </div>
            </div>

            <hr class="hr3"> 

            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                   <div class="blog-item">
						<div class="image-blog">
							<img src="images/blog_4.jpg" alt="" class="img-fluid">
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
						</div>
						<div class="blog-title">
							<h2><a href="#" title="">perferendis doloribus asperiores.</a></h2>
						</div>
						<div class="blog-desc">
							<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="#"><span>Read More</span></a>
						</div>
					</div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="images/blog_5.jpg" alt="" class="img-fluid">
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
						</div>
						<div class="blog-title">
							<h2><a href="#" title="">perferendis doloribus asperiores.</a></h2>
						</div>
						<div class="blog-desc">
							<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="#"><span>Read More</span></a>
						</div>
					</div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="images/blog_6.jpg" alt="" class="img-fluid">
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
						</div>
						<div class="blog-title">
							<h2><a href="#" title="">perferendis doloribus asperiores.</a></h2>
						</div>
						<div class="blog-desc">
							<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="#"><span>Read More</span></a>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div> -->

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