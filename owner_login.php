<?php

$db = new PDO('mysql:host=localhost;dbname=foodhub;charset=utf8mb4', 'root', '');


if(isset($_POST['submit']))
{

    $email = $_POST["email"];
    $password = $_POST["password"];



    $query = "select * from restaurant_registration where email = :email and password = :password";

    $stmt = $db->prepare($query);
    $stmt->bindValue(':email',$email);
    $stmt->bindValue(':password',$password);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if($stmt->rowCount()>0)
    {
        header('location: view/restaurant/create.php');
    }
    else
    {
        echo 'The username or password are incorrect!';
    }
}





?>


<html lang="en">
	
<!-- Mirrored from ecommerceforest.com/wrap/FoodBingo/demos/FoodBingo/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 18:08:16 GMT -->
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>$_Food Hub</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Google Web Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
		
		<!-- Template CSS Files  -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="js/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
		<link href="js/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="js/plugins/datepicker/datepicker.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/update design.css" rel="stylesheet">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fav-144.html">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fav-114.html">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fav-72.html">
		<link rel="apple-touch-icon-precomposed" href="images/fav-57.html">
		<link rel="shortcut icon" href="images/fav.html">
		
	</head>
	<body>
	<!-- Header Starts -->
    <header class="main-header">
        <!-- Nested Container Starts -->
        <div class="container text-center-xs">
            <!-- Nested Row Starts -->
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <!-- Logo Starts -->
                    <img src="images/logo.png" alt="FoodBingo" class="logo img-responsive img-center-xs">
                    <!-- Logo Ends -->
                </div>
                <div class="col-sm-8 col-xs-12">
                    <!-- Top Links Starts -->

                    <!-- Top Links Ends -->
                </div>
            </div>
            <!-- Nested Row Ends -->
        </div>
        <!-- Nested Container Ends -->
    </header>	<!-- Header Ends -->
	<!-- Main Menu Starts -->
    <nav id="nav" class="main-menu navbar flat">
        <!-- Nested Container Starts -->
        <div class="container">
            <!-- Nav Header Starts -->
            <div class="navbar-header">
                <button type="button" class="btn btn-navbar navbar-toggle flat animation" data-toggle="collapse" data-target=".navbar-cat-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- Nav Header Ends -->

            <!-- Navbar Cat collapse Starts -->
            <div class="collapse navbar-collapse navbar-cat-collapse">
                <ul class="nav navbar-nav text-uppercase text-bold">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="food-grid.php">Food Grid</a></li>

                </ul>
            </div>
            <!-- Navbar Cat collapse Ends -->
        </div>
        <!-- Nested Container Ends -->
    </nav>
	<!-- Main Menu Ends -->



    <!-- Main Container Starts -->
        <div class="main-container container">
            <!-- Content Login Wrap Starts -->
                <div class="content-login-wrap">
                <!-- Nested Row Starts -->
                    <div class="row">
                    <!-- Register Col Starts -->
                        <div class="col-md-5 col-xs-12 col-md-offset-2">
                            <h4 class="text-spl-color">Restaurant Owner Can Log In Here</h4>
                            <button type="submit" class="btn btn-block btn-tertiary animation" data-toggle="modal" data-target="#registerModal">
                                Continue To Login <i class="fa fa-caret-right"></i>
                            </button>
                        </div>
                    <!-- Register Col Ends -->
                    </div>
                <!-- Nested Row Ends -->
                </div>
            <!-- Content Login Wrap Ends -->
		</div>
	<!-- Main Container Ends -->
	
	<!-- Register Modal Window Starts -->
		<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content no-boxshadow text-center">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title text-spl-color" id="registerModalLabel">Restaurant Owner Login</h4>
					</div>
					<div class="modal-body">
					<!-- Register Form Starts -->
						<form action="" method="post">
					
							<div class="form-group">
								<label class="sr-only" for="register-email">Email address</label>
								<input name="email" type="email" class="form-control" id="register-email" placeholder="Email">
							</div>
	
							<div class="form-group">
								<label class="sr-only" for="register-password">Password</label>
								<input name="password" type="password" class="form-control" id="register-password" placeholder="Password">
							</div>
	
								
							<input name="submit" value="Login" type="submit" class="btn btn-lg btn-block btn-tertiary animation">
						</form>
					<!-- Register Form Ends -->						
					</div>
				</div>
			</div>
		</div>
	<!-- Register Modal Window Ends -->

	<!-- Template JS Files -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
	<script src="js/plugins/datepicker/bootstrap-datepicker.js"></script>
	<script src="js/plugins/owl-carousel/owl.carousel.js"></script>
	<script src="js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>	
	<script src="js/custom.js"></script>	
	</body>

<!-- Mirrored from ecommerceforest.com/wrap/FoodBingo/demos/FoodBingo/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 18:09:00 GMT -->
</html>