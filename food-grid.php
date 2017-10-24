<?php
//session_start();
include_once('vendor/autoload.php');

$resto = new \App\restaurant_admin\Restaurant();
$restaurants = $resto->index();
//var_dump($restaurants);

?>



<html lang="en">
	
<!-- Mirrored from ecommerceforest.com/wrap/FoodBingo/demos/FoodBingo/food-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 18:11:44 GMT -->
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
                        <ul class="list-unstyled list-inline top-links text-right-lg text-right-md text-right-sm text-bold">
                            <li><a href="owner_registration.php">Register</a></li>
                            <li><a href="owner_login.php">Login</a></li>
                        </ul>
                        <!-- Top Links Ends -->
                    </div>
                </div>
                <!-- Nested Row Ends -->
            </div>
            <!-- Nested Container Ends -->
        </header>
			<!-- Header Ends -->
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
		
		
		
		
		
			
			<!-- Search Section Starts -->
				<section class="search-area parallax">
				<!-- Nested Container Starts -->
					<div class="container text-center">
						<h3 class="text-normal">Find the best Restaurants, Cafes &amp; Cuisine in Your Area</h3>
						<form class="top-search">
							<div class="input-group-md">

								<div class="form-group">
									<div class="icon-addon addon-lg">
										<label class="fa fa-search"></label>
										<input type="text" class="form-control input-lg flat" name="search-location" placeholder="Area">
									</div>
								</div>
								<span class="input-group-btn">
									<button class="btn btn-lg btn-secondary animation text-uppercase" type="button">Search</button>
								</span>
							</div>
						</form>
					</div>
				<!-- Nested Container Ends -->
				</section>
			<!-- Search Section Ends -->



	<!-- Main Container Starts -->
		<div class="main-container container">
		<!-- Starts -->
			<div class="row">
			
			<!-- Mainarea Starts -->
				<div class="col-md-12 col-sm-8 col-xs-12">
				<!-- Hotels Grid List Starts -->
					<div class="hotels-list-grid">
					<!-- Nested Row Starts -->
						<div class="row">
						<!-- List Box #1 Starts -->
                            <?php
                            foreach ($restaurants as $res) { ?>
							<div class="col-md-4 col-sm-6 col-xs-12">
							<!-- Grid Box Starts -->
								<div class="grid-box">
								<!-- Images Starts -->
									<div class="image">
										<img src="view/uploads/<?php echo $res['image']?>" alt="Eagle Boys Village Plaza" class="img-responsive img-center">
										<span class="delivery-time text-center"><?php echo $res['price']?><br><?php echo "TK"?></span>
									</div>
								<!-- Images Ends -->
								<!-- Content Starts -->
                                    <div class="content text-center-md text-center-sm text-center-xs">
                                        <!-- Title Starts -->
                                        <h6 class="grid-box-title"><strong>Food Name:</strong> <?php echo $res['food_name']?></h6>
                                        <h6 class="grid-box-title"><strong>Type:</strong> <?php echo $res['food_type']?></h6>
                                        <h6 class="grid-box-title"><strong>Restaurant:</strong> <?php echo $res['restaurant_name']?></h6>
                                        <h6 class="grid-box-title"><strong>Address:</strong> <?php echo $res['address']?></h6>
                                        <!-- Title Ends -->

                                        <!-- Offer Details Starts -->


                                        <!-- Offer Details Ends -->
                                    </div>
								<!-- Content Ends -->
								</div>
							<!-- Grid Box Ends -->
							</div>
						<!-- List Box #1 Ends -->
                            <?php } ?>
						<!-- List Box #9 Ends -->
						</div>
					<!-- Nested Row Ends -->
					</div>
				<!-- Hotels Grid List Ends -->
				<!-- Pagination Starts -->
					<div class="pagination-block text-right text-center-xs">
						<ul class="pagination animation">
						  <li><a href="#">&laquo;</a></li>
						  <li class="active"><a href="#">1</a></li>
						  <li><a href="#">2</a></li>
						  <li><a href="#">3</a></li>
						  <li><a href="#">4</a></li>
						  <li><a href="#">5</a></li>
						  <li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				<!-- Pagination Ends -->
				</div>
			<!-- Mainarea Ends -->
			</div>
		<!-- Ends -->
		</div>
	<!-- Main Container Ends -->


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

<!-- Mirrored from ecommerceforest.com/wrap/FoodBingo/demos/FoodBingo/food-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 18:11:49 GMT -->
</html>