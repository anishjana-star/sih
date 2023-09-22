<?php
session_start();
include_once("../db.php");
if(isset($_COOKIE['user_login']) && isset($_COOKIE['userpassword']) && $_COOKIE['user_login']!="" && $_COOKIE['userpassword']!="")
{

$name=$_COOKIE['user_login'];
$pass=$_COOKIE['userpassword'];
//include_once('includes/dbconnection.php');
$sql=$conn->query("select * from register where  username='$name' && password='$pass'");
$rows=mysqli_fetch_array($sql);
if($rows>0)
{
    
    $_SESSION['id']=$rows['id'];
    $_SESSION['username']=$rows['username'];
    echo "<script type='text/javascript'> document.location ='../index.php'; </script>";
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Site favicon -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700" rel="stylesheet">
    <!-- Icon Font -->
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.css">
	<!-- Text Font -->
    <link rel="stylesheet" href="fonts/font.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Normal style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Normal media CSS -->
    <link rel="stylesheet" href="css/media.css">
</head>


<body>

	<!-- Header start -->
	<!--<div class="header-wrap">
		<div class="clearfix">
			<div class="logo">
				<a href="index.php"><img src="images/logo.svg" alt=""></a>
			</div>
			<div class="menu">
				<div class="dropdown">
					<a class="dropdown-toggle hamburgler" href="#" role="button" data-toggle="dropdown">
						<span class="menu-icon">
							<div class="bun top"></div>
							<div class="meat"></div>
							<div class="bun bottom"></div>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<ul>
							<li><a class="dropdown-item" href="index.php">Login Style 1</a></li>
							<li><a class="dropdown-item" href="index2.php">Login Style 2</a></li>
							<li><a class="dropdown-item" href="index3.php">Login Style 3</a></li>
							<li><a class="dropdown-item selected" href="index4.php">Login Style 4</a></li>
							<li><a class="dropdown-item" href="index5.php">Login Style 5</a></li>
							<li><a class="dropdown-item" href="index6.php">Login Style 6</a></li>
							<li><a class="dropdown-item" href="index7.php">Login Style 7</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<?php
include_once("../db.php");
if(isset($_POST['register'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$cno=$_POST['cno'];
	$pass=$_POST['pass'];

	$sql1=$conn->query("SELECT * FROM register where email='$email';");
	$rows=mysqli_num_rows($sql1);
	if($rows==0)
	{
		$sql2=$conn->query("INSERT INTO register(username,email,cno,password) values('$username','$email','$cno','$pass') ;");
		if($sql2)
		{
			echo '<script>alert("Successfully registered ! Now You can Log into your account !");</script>';
			//echo 'Successfully registered ! Now You can Log into your account !';

		}
		else
		{
			echo '<script>alert("Sorry! Registration Failed !");</script>';
			//echo 'Sorry! Registration Failed !';
		}
	}
	else
	{
		echo '<script>alert("This mail is already registered with us !");</script>';
		//echo 'This mail is already registered with us !';
	}



}


if(isset($_POST['login']))
{
	$uname=$_POST['uname'];
	$password=$_POST['password'];

	$sql3=$conn->query("SELECT * FROM register where email='$uname' and password='$password' ;");
	$rows=mysqli_num_rows($sql3);
	if($rows==1)
	{
		//session_start();
		$ret=mysqli_fetch_assoc($sql3);
		$_SESSION['id']=$ret['id'];
		$_SESSION['username']=$ret['username'];
		if(!empty($_POST["remember"])) {

                setcookie ("user_login",$_POST["uname"],time()+ (10 * 365 * 24 * 60 * 60));

                setcookie ("userpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));

            } else {

                if(isset($_COOKIE["user_login"])) {

                    setcookie ("user_login","");

                }

                if(isset($_COOKIE["userpassword"])) {

                    setcookie ("userpassword","");

                }

            }

		header("location:../index.php");
		//echo '<script>alert("Logged In Successfully !");</script>';

	}
	else{
		echo '<script>alert("Couldnt Log in !");</script>';
	}
}
?>

	<!-- Header end -->

	<main class="cd-main">
		<section class="cd-section index4 visible">
			<div class="cd-content style4">
				<div class="login-box">
					<div class="login-form-slider">
						<!-- login slide start -->
						<div class="login-slide slide">
							<div class="row no-gutters height-100-percentage">
								<div class="col-md-8 col-sm-12 style4-left">

									<div class="d-flex height-100-percentage padding-40px">

										<div class="align-self-center width-100-percentage">
											<h2>Login</h2>
											<form method="post">
												<div class="form-group">
													<label class="label">Email Address</label>
													<input type="text" name="uname" class="form-control" placeholder="Enter your email" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>">
												</div>
												<div class="form-group">
													<label class="label">Password</label>
													<input type="password" name="password" class="form-control"  placeholder="Enter your password" value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>">
												</div>
												<div class="form-group">
												<input type="checkbox" checked style="accent-color: saddlebrown;"  name="remember" id="remember"> <label for="remember" class="text-muted"  >Remember me</label>
												</div>

												<!--<div class="forgot-txt">
													<a href="javascript:;" class="forgot-password-click">Forgot Password</a>
												</div>-->
												<div class="form-group">
													<input type="submit" name="login"  class="submit" value="Login">
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 style4-right">
									<div class="padding-40px">
										<div class="mb-3 sign-up-txt">
											<a href="../" class="sign-up-click"><i class=" mr-3 ion-arrow-left-c"></i>Go To Home </a>
										</div>
										<h4>Don't have an account?</h4>
										<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>-->
										<div class="sign-up-txt">
											<a href="javascript:;" class="sign-up-click">Register Now <i class="ion-arrow-right-c"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- login slide end -->
						<!-- signup slide start -->
						<div class="signup-slide slide">
							<div class="row no-gutters height-100-percentage">
								<div class="col-md-12 col-sm-12 style4-left">
									<div class="d-flex height-100-percentage padding-40px">
										<div class="align-self-center width-100-percentage">
											<h2>Create An Account</h2>
											<form method="post">
												<div class="row">
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label class="label">Name</label>
															<input type="text" name="username" class="form-control">
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label class="label">Email</label>
															<input type="text" name="email" class="form-control">
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label class="label">Mobile No.</label>
															<input type="text" name="cno" class="form-control">
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label class="label">Password</label>
															<input type="password" name="pass" class="form-control">
														</div>
													</div>
													
												</div>
												<div class="form-group">
													<input type="submit" name="register" class="submit" value="Register">
												</div>
												<div class="sign-up-txt">
													if you have an account? <a href="javascript:;" class="login-click">login</a>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- signup slide end -->
						<!-- forgot password slide start -->
						<!--
						<div class="forgot-password-slide slide">
							<div class="d-flex height-100-percentage style4-left">
								<div class="align-self-center width-100-percentage padding-40px">
									<form>
										<div class="row">
											<div class="col-md-7 col-s-12">
												<label class="label">Enter your email address to reset your password</label>
												<div class="form-group user-name-field">
													<label class="label">Email</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<input type="submit" class="submit" value="Submit">
												</div>
											</div>
										</div>
									</form>
									<div class="sign-up-txt">
										if you remember your password? <a href="javascript:;" class="login-click">login</a>
									</div>
								</div>
							</div>
						</div>-->
						<!-- forgot password slide end -->
					</div>
				</div>
			</div>
		</section>
	</main>
	

	<div id="cd-loading-bar" data-scale="1" class="index"></div>
	<!-- JS File -->
	<script src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="js/velocity.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>