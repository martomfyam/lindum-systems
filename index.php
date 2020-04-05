<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Meta Description -->
        <meta name="description" content="Lindum Systems Ltd is a home-grown company, dealing with sale, Installations and maintenance of Fire and Security products">
        <!-- Meta Keyword -->
        <meta name="keywords" content="lindum systems, lindums systems,lindum,cctv,cctv cameras,fire extinguisher,access control,security systems,security,electrical fencing">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <!-- Author Meta -->
        <meta name="author" content="Martin">
		 <!-- The above meta tags *must* come first in the head; any other head content must come *after* these tags -->

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
    <div class="allheader" >
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
                        <li><a href="tel:+254726051500" target="_blank" rel="noopener"><i class="fa fa-phone" ></i> +254726051500</a></li>
                        <li><a href="mailto:info@lindumsystems.co.ke" target="_blank" rel="noopener"><i class="fa fa-envelope-o"></i> info@lindumsystems.co.ke</a></li>
						<li><a href="https://goo.gl/maps/trQH43peu2K2" target="-_blank" rel="noopener"><i class="fa fa-map-marker"></i> Kisumu, Amalo HSE,1st floor (Next to Guardian Booking Office)</a></li>
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
                                    <a href="index.php" rel="noopener noreferrer"><img src="./img/logo.png" alt="lindum systems limited" height="130" width="160" ></a>
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
										<option value=0>All Categories</option>
										<option value="cctv camera">CCTV Services</option>
										<option value=2>Fire Safety </option>
										<option value=3>Electric Fencing</option>
                                        <option value=4>Alarms </option>
										<option value=5>Access Control </option>
                                        <option value=6>Intercoms </option>
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
    </div>

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
                <div class="topnav" id="myTopnav">
                    <a href="index.php" class="active" rel="noopener">HOME</a>
                    <div class="dropdown1">
                        <button class="dropbtn1">CCTV SYSTEMS
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown1-content">
                            <a href="store.php?category=<?php echo "IR camera"; ?>"  rel="noopener noreferrer">IR/Antique systems</a>
                            <a href="store.php?category=<?php echo "ip camera"; ?>"  rel="noopener noreferrer">IP Camera systems</a>
                            <a href="store.php?category=<?php echo "spy camera"; ?>" rel="noopener noreferrer">Spy Cameras</a>
                        </div>
                    </div>
                    <div class="dropdown1">
                        <button class="dropbtn1">FIRE SAFETY EQUIPMENTS
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown1-content">
                            <a href="store.php?category=<?php echo "portable"; ?>" rel="noopener noreferrer">Portable extinguishers</a>
                            <a href="store.php?category=<?php echo "Non-portable"; ?>"  rel="noopener noreferrer">Non-portable extinguishers</a>
                            <a href="store.php?category=<?php echo "Hose reel"; ?>"  rel="noopener noreferrer">Hose reels</a>
                            <a href="store.php?category=<?php echo "pumpset"; ?>"  rel="noopener noreferrer">pump set</a>
                            <a href="store.php?category=<?php echo "Fire alarm systems"; ?>"  rel="noopener noreferrer">Fire alarm systems</a>
                            <a href="store.php?category=<?php echo "Fire suppression systems"; ?>"  rel="noopener noreferrer">Fire suppression systems</a>
                            <a href="store.php?category=<?php echo "Fire sprinkler systems"; ?>" rel="noopener noreferrer">Fire sprinkler systems</a>
                            <a href="store.php?category=<?php echo "Hydrants"; ?>"  rel="noopener noreferrer">Hydrants</a>
                        </div>
                    </div>
                    <div class="dropdown1">
                        <button class="dropbtn1">ALARM SYSTEMS
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown1-content">
                            <a href="store.php?category=<?php echo "Control panel"; ?>"  rel="noopener noreferrer">Control panel</a>
                            <a href="store.php?category=<?php echo "Intruder Alarm systems"; ?>" rel="noopener noreferrer">Intruder Alarm systems</a>
                            <a href="store.php?category=<?php echo "Transmitters"; ?>"  rel="noopener noreferrer">Transmitters</a>
                            <a href="store.php?category=<?php echo "Motion Detectors"; ?>"  rel="noopener noreferrer">Motion Detectors</a>


                        </div>
                    </div>
                    <div class="dropdown1">
                        <button class="dropbtn1">ACCESS CONTROL
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown1-content">
                            <a href="store.php?category=<?php echo "access control"; ?>"  rel="noopener noreferrer">Access Control</a>
                            <a href="store.php?category=<?php echo "Electric fencing"; ?>"  rel="noopener noreferrer">Electric fencing</a>
                            <a href="store.php?category=<?php echo "Intercoms"; ?>"  rel="noopener noreferrer">Intercoms</a>
                            <a href="store.php?category=<?php echo "pabx"; ?>"  rel="noopener noreferrer">Extensium phones(P.A.B.X)</a>

                        </div>
                    </div>
                    <div class="dropdown1">
                        <button class="dropbtn1">OUR CONTACT
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown1-content">
                            <a href="aboutus.php"  rel="noopener noreferrer">ABOUT US</a>
                            <a href="contactus.php"  rel="noopener noreferrer">CONTACT US</a>
                            <a href="https://lindumsystems.co.ke/blog"  rel="noopener noreferrer" target="_blank">OUR BLOG</a>

                        </div>
                    </div>

                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()" rel="noopener noreferrer">&#9776;</a>
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
                        <a href="store.php?category=<?php echo "cctv"; ?>" rel="noopener noreferrer" ><div class="shop">
                            <?php include 'databasecoverimg.php';?>
                           	<div class="shop-img">

                                <img src="<?php echo $link1;?>" height="240" />
<!--								<img src="./img/shop01.png" alt="">-->
                                </div>
							<div class="shop-body">
								<h3>CCTV Camera<br>Collection</h3>
								<a href="#" class="cta-btn" rel="noopener noreferrer" >Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
                            </div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
                        <a href="store.php?category=<?php echo "fire"; ?>" rel="noopener noreferrer" ><div class="shop">
                           	<div class="shop-img">
                                <img src="<?php echo $link2;?>" height="240" />
<!--								<img src="./img/shop03.png" alt="">-->
                                </div> </a>
							<div class="shop-body">
								<h3>Fire safety equipments<br>Collection</h3>
								<a href="#" class="cta-btn" rel="noopener noreferrer">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                            </div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
                        <a href="store.php?category=<?php echo "electric fence"; ?>" rel="noopener noreferrer" ><div class="shop">
                            <div class="shop-img">

                                <img src="<?php echo $link3;?>" height="240"/>
<!--								<img src="./img/shop02.png" alt="">-->
                                </div> </a>
							<div class="shop-body">
								<h3>Alarm Systems<br>Collection</h3>
								<a href="#" class="cta-btn" rel="noopener noreferrer" >Shop now <i class="fa fa-arrow-circle-right"></i></a>
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
										<div class="product" >
                                            <?php include 'databaseconn.php'; ?>
                                            <?php $x=1; ?>
                                            <?php include 'newproductdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>


										<a href="product.php?productName=<?php echo $name1; ?>" rel="noopener noreferrer" >	<div class="product-img">

                                                <img src="<?php echo $link;?>" height="240" width="200" alt=""/>
<!--												<img src="./img/product01.png" alt="">-->
												<div class="product-label">

													<span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
													<span class="new">NEW</span>
												</div>
                                            </div>
											<div class="product-body">
												<p class="product-category"><?php echo $subCategory; ?></p>
												<h3 class="product-name"><a href="product.php?productName=<?php echo $name1; ?>" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
													<button class="quick-view" ><i class="fa fa-eye"></i><span class="tooltipp" >quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart" >

                                           	<button class="add-to-cart-btn" formtarget="_blank" id="<?php echo $name1; ?>" onclick="clickeditem(this.id)"  > <i class="fa fa-shopping-cart"></i> purchase</button>

                                            </div>  </a>
										</div>
										<!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=2; ?>
                                            <?php include 'newproductdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>
                                            <a href="product.php?productName=<?php echo $name2; ?>" rel="noopener noreferrer" > <div class="product-img">

                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $subCategory; ?></p>
                                                <h3 class="product-name"><a href="product.php?productName=<?php echo $name2; ?>" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                                <button class="add-to-cart-btn" formtarget="_blank" id="<?php echo $name2; ?>" onclick="clickeditem(this.id)"  > <i class="fa fa-shopping-cart"></i> purchase</button>
                                            </div> </a>
                                        </div>
                                        <!-- /product -->



                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=3; ?>
                                            <?php include 'newproductdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>
                                            <a href="product.php?productName=<?php echo $name3; ?>" rel="noopener noreferrer" > <div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $subCategory; ?></p>
                                                <h3 class="product-name"><a href="product.php?productName=<?php echo $name3; ?>" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                                <button class="add-to-cart-btn" formtarget="_blank" id="<?php echo $name3; ?>" onclick="clickeditem(this.id)"  > <i class="fa fa-shopping-cart"></i> purchase</button>
                                            </div> </a>
                                        </div>
                                        <!-- /product -->


                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=4; ?>
                                            <?php include 'newproductdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>
                                            <a href="product.php?productName=<?php echo $name4; ?>" rel="noopener noreferrer" > <div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $subCategory; ?></p>
                                                <h3 class="product-name"><a href="product.php?productName=<?php echo $name4; ?>" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                                <button class="add-to-cart-btn" formtarget="_blank" id="<?php echo $name4; ?>" onclick="clickeditem(this.id)"  > <i class="fa fa-shopping-cart"></i> purchase</button>
                                            </div> </a>
                                        </div>
                                        <!-- /product -->


                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=5; ?>
                                            <?php include 'newproductdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>
                                            <a href="product.php?productName=<?php echo $name5; ?>" rel="noopener noreferrer" > <div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $subCategory; ?></p>
                                                <h3 class="product-name"><a href="product.php?productName=<?php echo $name5; ?>" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                                <button class="add-to-cart-btn" formtarget="_blank" id="<?php echo $name5; ?>" onclick="clickeditem(this.id)"  > <i class="fa fa-shopping-cart"></i> purchase</button>
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

                                                <a href="product.php?productName=<?php echo $name1; ?>" rel="noopener noreferrer" >	<div class="product-img">

                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $subCategory; ?></p>
                                                <h3 class="product-name"><a href="product.php?productName=<?php echo $name1; ?>" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                                <button class="add-to-cart-btn" formtarget="_blank" id="<?php echo $name1; ?>" onclick="clickeditem(this.id)"  > <i class="fa fa-shopping-cart"></i> purchase</button>
                                            </div>
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=2; ?>
                                            <?php include 'topsellingdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>

                                            <a href="product.php?productName=<?php echo $name2; ?>" rel="noopener noreferrer" >	<div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $subCategory; ?></p>
                                                <h3 class="product-name"><a href="product.php?productName=<?php echo $name2; ?>" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                                <button class="add-to-cart-btn" formtarget="_blank" id="<?php echo $name2; ?>" onclick="clickeditem(this.id)"  > <i class="fa fa-shopping-cart"></i> purchase</button>
                                            </div>
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=3; ?>
                                            <?php include 'topsellingdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>

                                            <a href="product.php?productName=<?php echo $name3; ?>" rel="noopener noreferrer" >	<div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $subCategory; ?></p>
                                                <h3 class="product-name"><a href="product.php?productName=<?php echo $name3; ?>" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                                <button class="add-to-cart-btn" formtarget="_blank" id="<?php echo $name3; ?>" onclick="clickeditem(this.id)"  > <i class="fa fa-shopping-cart"></i> purchase</button>
                                            </div>
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=4; ?>
                                            <?php include 'topsellingdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>

                                            <a href="product.php?productName=<?php echo $name4; ?>" rel="noopener noreferrer" >	<div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $subCategory; ?></p>
                                                <h3 class="product-name"><a href="product.php?productName=<?php echo $name4; ?>" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                                <button class="add-to-cart-btn" formtarget="_blank" id="<?php echo $name4; ?>" onclick="clickeditem(this.id)"  > <i class="fa fa-shopping-cart"></i> purchase</button>
                                            </div>
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=5; ?>
                                            <?php include 'topsellingdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>

                                            <a href="product.php?productName=<?php echo $name5; ?>" rel="noopener noreferrer" >	<div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $subCategory; ?></p>
                                                <h3 class="product-name"><a href="product.php?productName=<?php echo $name5; ?>" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                                <button class="add-to-cart-btn" formtarget="_blank" id="<?php echo $name5; ?>" onclick="clickeditem(this.id)"  > <i class="fa fa-shopping-cart"></i> purchase</button>
                                            </div>
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <?php $x=6; ?>
                                            <?php include 'topsellingdetails.php'; ?>
                                            <?php  ${'name'.$x} = $name;  ?>

                                            <a href="product.php?productName=<?php echo $name6; ?>" rel="noopener noreferrer" >	<div class="product-img">
                                                <img src="<?php echo $link;?>" height="240"/>
                                                <!--												<img src="./img/product01.png" alt="">-->
                                                <div class="product-label">

                                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?php echo $subCategory; ?></p>
                                                <h3 class="product-name"><a href="product.php?productName=<?php echo $name6; ?>" rel="noopener noreferrer"><?php echo $name; ?></a></h3>
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
                                                <button class="add-to-cart-btn" formtarget="_blank" id="<?php echo $name6; ?>" onclick="clickeditem(this.id)"  > <i class="fa fa-shopping-cart"></i> purchase</button>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer"><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer"><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
                                        <p class="product-category"><?php echo $subCategory; ?></p>
                                        <h3 class="product-name"><a href="#" rel="noopener noreferrer" ><?php echo $name; ?></a></h3>
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
									<a href="https://www.facebook.com/lindumsystems" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a>
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
                                <ul class="footer-links">
                                <li> <a href="https://goo.gl/maps/xb4H8GCCjCsqfsqr9" target="_blank" rel="noopener noreferrer"> Lindum Systems limited main outlet is located in Kisumu, Amalo HSE,1st floor (Next to Guardian Booking Office)</a></li>

									<li><a href="#" rel="noopener noreferrer" ><i class="fa fa-map-marker"></i>P.O Box 3335-40100, Kisumu</a></li>
									<li><a href="tel:+254726051500" target="_blank"rel="noopener noreferrer" ><i class="fa fa-phone"></i>+254726051500</a></li>
									<li><a href="mailto:info@lindumsystems.co.ke" target="_blank" rel="noopener noreferrer" ><i class="fa fa-envelope-o"></i>info@lindumsystems.co.ke</a></li>

								</ul>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="index.php" rel="noopener noreferrer" >Home</a></li>
									<li><a href="store.php?category=cctv" rel="noopener noreferrer" >CCTV Systems</a></li>
									<li><a href="store.php?category=fire" rel="noopener noreferrer" >Fire Safety Equipments</a></li>
									<li><a href="store.php?category=alarm" rel="noopener noreferrer" >Alarm Systems</a></li>
									<li><a href="store.php?category=access control" rel="noopener noreferrer" >Access control systems</a></li>

								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-4 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="aboutus.php" rel="noopener noreferrer" >About Us</a></li>
									<li><a href="contactus.php" rel="noopener noreferrer" >Contact Us</a></li>
									<li><a href="#" rel="noopener noreferrer" >Privacy Policy</a></li>
									<li><a href="#" rel="noopener noreferrer" >Terms & Conditions</a></li>
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
							<a href="index.php" rel="noopener noreferrer" >	<img src="img/logo2.png" height="110" width="160"/> </a>
							<p><i>securing through systems</i></p>


							<span class="copyright">

                                Copyright &copy; 2018-<script>document.write(new Date().getFullYear());</script> <br> <ul class="footer-links"><li><a href="https://www.martinmuthomi.co.ke" target="_blank" rel="noopener noreferrer nofollow" > Martin Muthomi </a> </li></ul>

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
        function clickeditem(clicked_id){
            var linkf = "<?php echo $_SERVER['PHP_SELF']; ?>";
            var link = "https://www.lindumsystems.co.ke"+linkf+"?productName="+clicked_id;
            var link = link.replace("index.php", "product.php");
            var link = link.replace("store.php", "product.php");
            var link = encodeURIComponent(link);
            var productname = clicked_id;

            var completetext =  encodeURI("hello lindum. i wish to place an order on '"+productname+"'. Thankyou. product link: (");
            var completetext = completetext+link+")."

            window.location.href="https://api.whatsapp.com/send?phone=254726051500&text="+completetext

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

    <script async data-id="3596" src="https://cdn.widgetwhats.com/script.min.js"></script>

	</body>
</html>
