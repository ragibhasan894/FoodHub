<?php
//session_start();
include_once('vendor/autoload.php');

$resto = new \App\restaurant_admin\Restaurant();
$restaurants = $resto->index2();
//var_dump($restaurants);

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
				<form action="search.php" method="post" class="top-search">
					<div class="input-group-md">

						<div class="form-group">
							<div class="icon-addon addon-lg">
								<label class="fa fa-search"></label>
								<input type="text" class="form-control input-lg flat" name="address" placeholder="Area">
							</div>
						</div>
						<span class="input-group-btn">
							<button class="btn btn-lg btn-secondary animation text-uppercase" type="submit">Search</button>
						</span>
					</div>
				</form>
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Search Section Ends -->


	<!-- Welcome Section Starts -->
		<section class="welcome section">
		<!-- Nested Container Starts -->
			<div class="container">
			<!-- Food Menu Grid Starts -->
				<div class="food-menu-grid row text-center">
				<!-- Food Menu #1 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="images/menu/thumb/chinese-menu.jpg" alt="chinese" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">Chinese</h4>
							</div>
						</div>
					</div>
				<!-- Food Menu #1 Ends -->
				<!-- Food Menu #2 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="images/menu/thumb/indian-menu.jpg" alt="Indian" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">Indian</h4>
							</div>
						</div>
					</div>
				<!-- Food Menu #2 Ends -->
				<!-- Food Menu #3 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="images/menu/thumb/italian-menu.jpg" alt="italian" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">Italian</h4>
							</div>
						</div>
					</div>
				<!-- Food Menu #3 Ends -->
				<!-- Food Menu #4 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="images/menu/thumb/pizza-menu.jpg" alt="Pizza &amp; Burgers" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">Pizza &amp; Burgers</h4>
							</div>
						</div>
					</div>
				<!-- Food Menu #4 Ends -->
				<!-- Food Menu #5 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="images/menu/thumb/veggies-menu.jpg" alt="Pure Veggies" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">Pure Veggies</h4>
							</div>
						</div>
					</div>
				<!-- Food Menu #5 Ends -->
				<!-- Food Menu #6 Starts -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="hover-content">
							<img src="images/menu/thumb/tiffins-menu.jpg" alt="tiffins &amp; breakfast" class="img-responsive animation">
							<div class="overlay animation">
								<h4 class="text-uppercase">Tiffins &amp; Breakfast</h4>
							</div>
						</div>
					</div>
				<!-- Food Menu #6 Ends -->
				</div>
			<!-- Food Menu Grid Ends -->
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Welcome Section Ends -->
	<!-- Special Offers Section Starts -->
		<section class="special-offers section parallax">
		<!-- Nested Container Starts -->
			<div class="container">
				<h1 class="text-light no-margin-top text-center-sm text-center-xs">Special Offers</h1>
			<!-- Special Offers Carousel Starts -->
				<div id="special-offers-carousel" class="owl-carousel">
				<!-- Offer Col #1 Starts -->
                    <?php
                    foreach ($restaurants as $res) { ?>
					<div class="offer-col text-center">
                        <img src="view/uploads/<?php echo $res['image']?>" alt="Eagle Boys Village Plaza" class="img-responsive img-center">
						<div class="content">
							<h5><?php echo $res['restaurant_name'] ?></h5>
							<p class="text-light">Take upto <?php echo $res['discount'] ?> Off on entire food order</p>
							<h6><?php echo $res['food_name'] ?></h6>
							<h3 class="coupon-code text-uppercase text-bold"><?php echo $res['discount'] ?> OFF</h3>
						</div>
					</div>

                    <?php } ?>
				<!-- Offer Col #1 Ends -->

				<!-- Offer Col #2 Starts -->

				<!-- Offer Col #6 Ends -->
				</div>
			<!-- Special Offers Carousel Ends -->
			</div>
		<!-- Nested Container Ends -->
		</section>
	<!-- Special Offers Section Ends -->

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