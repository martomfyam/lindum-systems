<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Lindum Systems Limited</title>
		<link rel="icon" type="image/ico" href="img/logo.png" />
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
    <?php

    session_start();

    //$_SESSION['regName'] = $regValue;

    ?>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +254726051500</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> info@lindumsystems.co.ke</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Kisumu, Oginga Odinga Street, Tivoli plaza, ground floor</a></li>
					</ul>

				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
                                    <a href="index.php"><img src="./img/logo.png" alt="" height="120" width="290" ></a>
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
                                    <?php include 'databaseconn.php'; ?>

                                    <form method="post" action="store.php">
                                        <select name="category" class="input-select">
										<option value="0">All Categories</option>
										<option value="1">CCTV Services</option>
										<option value="2">Fire Safety </option>
										<option value="3">Electric Fencing</option>
                                        <option value="4">Alarms </option>
										<option value="4">Access Control </option>
                                        <option value="4">Intercoms </option>
									</select>
									<input class="input" name="search" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->


					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
                <div class="topnav" id="myTopnav">
                    <a href="index.php" class="active">HOME</a>
                    <div class="dropdown1">
                        <button class="dropbtn1">CCTV SYSTEMS
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown1-content">
                            <a href="store.php?category=<?php echo "cctv"; ?>">IR/Antique systems</a>
                            <a href="store.php?category=<?php echo "cctv"; ?>">IP Camera systems</a>
                            <a href="store.php?category=<?php echo "cctv"; ?>">Spy Cameras</a>
                        </div>
                    </div>
                    <div class="dropdown1">
                        <button class="dropbtn1">FIRE SAFETY EQUIPMENTS
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown1-content">
                            <a href="store.php?category=<?php echo "fire"; ?>">Portable extinguishers</a>
                            <a href="store.php?category=<?php echo "fire"; ?>">Non-protable extinguishers</a>
                            <a href="store.php?category=<?php echo "fire"; ?>">House reels & pumpset</a>
                            <a href="store.php?category=<?php echo "fire"; ?>">Fire alarm systems</a>
                            <a href="store.php?category=<?php echo "fire"; ?>">Fire suppression systems</a>
                            <a href="store.php?category=<?php echo "fire"; ?>">Fire sprinkler systems</a>
                            <a href="store.php?category=<?php echo "fire"; ?>">Hydrants</a>
                        </div>
                    </div>
                    <div class="dropdown1">
                        <button class="dropbtn1">ALARM SYSTEMS
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown1-content">
                            <a href="store.php?category=<?php echo "alarm"; ?>">Control panel</a>
                            <a href="store.php?category=<?php echo "alarm"; ?>">Intruder Alarm systems</a>
                            <a href="store.php?category=<?php echo "alarm"; ?>">Transmitters</a>
                            <a href="store.php?category=<?php echo "alarm"; ?>">Motion Detectors</a>


                        </div>
                    </div>
                    <div class="dropdown1">
                        <button class="dropbtn1">ACCESS CONTROL
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown1-content">
                            <a href="store.php?category=<?php echo "access control"; ?>">Access Control</a>
                            <a href="store.php?category=<?php echo "access control"; ?>">Electric fencing</a>
                            <a href="store.php?category=<?php echo "access control"; ?>">Intercoms</a>
                            <a href="store.php?category=<?php echo "access control"; ?>">Extensium phones(P.A.B.X)</a>

                        </div>
                    </div>
                    <div class="dropdown1">
                        <button class="dropbtn1">OUR CONTACT
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown1-content">
                            <a href="aboutus.php">ABOUT US</a>
                            <a href="contactus.php">CONTACT US</a>

                        </div>
                    </div>

                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                </div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
                        <a href="store.php?category=<?php echo "cctv"; ?>" ><div class="shop">
                            <?php include 'databaseimg.php';?>
                           	<div class="shop-img">

                                <img src="<?php echo $link1;?>" height="240" />
<!--								<img src="./img/shop01.png" alt="">-->
                                </div>
							<div class="shop-body">
								<h3>CCTV Camera<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
                            </div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
                        <a href="store.php?category=<?php echo "fire"; ?>" ><div class="shop">
                           	<div class="shop-img">
                                <img src="<?php echo $link2;?>" height="240" />
<!--								<img src="./img/shop03.png" alt="">-->
                                </div> </a>
							<div class="shop-body">
								<h3>Fire safety equipments<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                            </div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
                        <a href="store.php?category=<?php echo "electric fence"; ?>" ><div class="shop">
                            <div class="shop-img">

                                <img src="<?php echo $link3;?>" height="240"/>
<!--								<img src="./img/shop02.png" alt="">-->
                                </div> </a>
							<div class="shop-body">
								<h3>Alarm Systems<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
                            </div></a>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
						<!--	<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
								</ul>
							</div>
							-->
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<divda class="product">
                                            <?php include 'databaseconn.php'; ?>
                                            <?php $x=1; ?>
                                            <?php include 'newproductdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>


										<a href="product.php?productName=<?php echo $name1; ?>" >	<div class="product-img">

                                                <img src="<?php echo $link;?>" height="240" width="200" alt=""/>
<!--												<img src="./img/product01.png" alt="">-->
												<div class="product-label">

													<span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
													<span class="new">NEW</span>
												</div>
                                            </div>
											<div class="product-body">
												<p class="product-category"><?php echo $category; ?></p>
												<h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
												<h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>  </a>
										</divda>
										<!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=2; ?>
                                            <?php include 'newproductdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>
                                            <a href="product.php?productName=<?php echo $name2; ?>" > <div class="product-img">

                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $category; ?></p>
                                                <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                                <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div> </a>
                                        </div>
                                        <!-- /product -->



                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=3; ?>
                                            <?php include 'newproductdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>
                                            <a href="product.php?productName=<?php echo $name3; ?>" > <div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $category; ?></p>
                                                <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                                <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div> </a>
                                        </div>
                                        <!-- /product -->


                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=4; ?>
                                            <?php include 'newproductdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>
                                            <a href="product.php?productName=<?php echo $name4; ?>" > <div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $category; ?></p>
                                                <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                                <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div> </a>
                                        </div>
                                        <!-- /product -->


                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=5; ?>
                                            <?php include 'newproductdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>
                                            <a href="product.php?productName=<?php echo $name5; ?>" > <div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $category; ?></p>
                                                <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                                <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>  </a>
                                        </div>
                                        <!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">

            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("dec 5, 2019 15:37:25").getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                    // Get todays date and time
                    var now = new Date().getTime();

                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Output the result in an element with id="demo"
                    // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                    //     + minutes + "m " + seconds + "s ";
                    document.getElementById("days").innerHTML =  days ;
                    document.getElementById("hours").innerHTML = hours ;
                    document.getElementById("minutes").innerHTML = minutes ;
                    document.getElementById("seconds").innerHTML = seconds ;


                    // If the count down is over, write some text
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                    }
                }, 1000);
            </script>

			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3 id="days"> </h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3 id="hours"></h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3 id="minutes"></h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3 id="seconds"></h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section"  >
			<!-- container -->
			<div class="container" >
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
<!--								<ul class="section-tab-nav tab-nav">-->
<!--									<li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>-->
<!--									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>-->
<!--									<li><a data-toggle="tab" href="#tab2">Cameras</a></li>-->
<!--									<li><a data-toggle="tab" href="#tab2">Accessories</a></li>-->
<!--								</ul>-->
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12" >
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
                                        <!-- product -->
                                        <div class="product">

                                                <?php include 'databaseconn.php'; ?>
                                                <?php $x=1; ?>
                                                <?php include 'topsellingdetails.php'; ?>
                                                <?php  ${'name'.$x} = $name;  ?>

                                                <a href="product.php?productName=<?php echo $name1; ?>" >	<div class="product-img">

                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $category; ?></p>
                                                <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                                <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=2; ?>
                                            <?php include 'topsellingdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>

                                            <a href="product.php?productName=<?php echo $name2; ?>" >	<div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $category; ?></p>
                                                <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                                <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=3; ?>
                                            <?php include 'topsellingdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>

                                            <a href="product.php?productName=<?php echo $name3; ?>" >	<div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $category; ?></p>
                                                <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                                <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=4; ?>
                                            <?php include 'topsellingdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>

                                            <a href="product.php?productName=<?php echo $name4; ?>" >	<div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $category; ?></p>
                                                <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                                <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=5; ?>
                                            <?php include 'topsellingdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>

                                            <a href="product.php?productName=<?php echo $name5; ?>" >	<div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $category; ?></p>
                                                <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                                <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=6; ?>
                                            <?php include 'topsellingdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>

                                            <a href="product.php?productName=<?php echo $name6; ?>" >	<div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $category; ?></p>
                                                <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                                <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->



									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
                                <?php include 'databaseconn.php' ?>
                                <?php include 'topsellingdetails.php' ?>
								<!-- product widget -->
								<div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
									<div class="product-img">

                                        <?php $x=1 ?>

                                        <img src="<?php echo $link;?>"  alt=""/>
<!--										<img src="./img/product07.png" alt="">-->
									</div>
									<div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
								</div>
								<!-- /product widget -->

                                <!-- product widget -->
                                <?php $x=2 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">


                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <?php $x=3 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">


                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->
							</div>

							<div>
                                <!-- product widget -->
                                <?php $x=4 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">


                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <?php $x=5 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">


                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <?php $x=6 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">


                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
                                <!-- product widget -->
                                <?php $x=7 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">



                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <?php $x=8 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">


                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <?php $x=9 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">


                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->
                            </div>

                            <div>
                                <!-- product widget -->
                                <?php $x=10 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">


                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <?php $x=11 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">


                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <?php $x=12 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">


                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
                                <!-- product widget -->
                                <?php $x=13 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">



                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <?php $x=14 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">


                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <?php $x=15 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">


                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->
                            </div>

                            <div>
                                <!-- product widget -->
                                <?php $x=16 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">


                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <?php $x=17 ?>
                                <?php include 'topsellingdetails.php' ?>
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">


                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->

                                <!-- product widget -->
                                <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                    <div class="product-img">

                                        <?php $x=18 ?>
                                        <?php include 'topsellingdetails.php' ?>
                                        <img src="<?php echo $link;?>"  alt=""/>
                                        <!--										<img src="./img/product07.png" alt="">-->
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $category; ?></p>
                                        <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                        <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>

                                    </div>
                                </div>
                                <!-- /product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
                            <?php include 'newsletter.php' ?>
							<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                                <span class="alert-danger"> <?php echo $emailErr;?></span>
                                <span class="alert-success"> <?php echo $emailSuccess;?></span>
								<input class="input" type="email" name="email" placeholder="Enter Your Email">

								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>

							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-4 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lindum Systems limited main outlet is located in Kisumu Oginga Odinga street, Tivoli plaza, Ground Floor.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>P.O Box 3335-40100, Kisumu</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+254726051500</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>info@lindumsystems.co.ke</a></li>

								</ul>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="index.php">Home</a></li>
									<li><a href="#">CCTV Systems</a></li>
									<li><a href="#">Fire Safety Equipments</a></li>
									<li><a href="#">Alarm Systems</a></li>
									<li><a href="#">Access control systems</a></li>

								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-4 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="aboutus.php">About Us</a></li>
									<li><a href="contactus.php">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>


					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<a href="index.php">	<img src="img/logo.png" width="169" height="70"/> </a>
							<p><i>securing through systems</i></p>


							<span class="copyright">

								Copyright &copy; 2018-<script>document.write(new Date().getFullYear());</script> <br> Marto Mfyam

							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

    <script type="text/javascript">
        function reply_click(clicked_id)
        {
            window.location.href="product.php?productName="+clicked_id+" ";
        }
    </script>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>



	</body>
</html>
