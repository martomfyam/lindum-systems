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
$productName=null;
try {
    $productName = $_GET['productName'];
}
//catch exception
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}

if(empty($productName)){
    $productName = $_SESSION['productName'];

}

if(!empty($productName)) {

    $_SESSION['productName'] = $productName;
}
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

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">

                        <?php include 'databaseconn.php'?>
                        <?php include 'databaseproducts.php'?>


						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li><a href="#">All Categories</a></li>
							<li><a href="#"><?php echo $category; ?></a></li>
                            <li><a href="#"><?php echo $subCategory; ?></a></li>
							<li class="active"><?php echo $name; ?></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
                                <img src="<?php echo $link;?>" height="240" width="200" alt="products image unavailable!"/>
<!--								<img src="./img/product01.png" alt="">-->
							</div>

							<!--<div class="product-preview">-->
								<!--<img src="./img/product03.png" alt="">-->
							<!--</div>-->

							<!--<div class="product-preview">-->
								<!--<img src="./img/product06.png" alt="">-->
							<!--</div>-->

							<!--<div class="product-preview">-->
								<!--<img src="./img/product08.png" alt="">-->
							<!--</div>-->
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<!--<div id="product-imgs">-->
							<!--<div class="product-preview">-->
								<!--<img src="./img/product01.png" alt="">-->
							<!--</div>-->

							<!--<div class="product-preview">-->
								<!--<img src="./img/product03.png" alt="">-->
							<!--</div>-->

							<!--<div class="product-preview">-->
								<!--<img src="./img/product06.png" alt="">-->
							<!--</div>-->

							<!--<div class="product-preview">-->
								<!--<img src="./img/product08.png" alt="">-->
							<!--</div>-->
						<!--</div>-->
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?php echo $name; ?></h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div>
							<div>
                                <h4 class="product-price"><?php if ($price>0) echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
<!--                                <span class="product-available">--><?php //echo $instock; ?><!--</span>-->
                                <span class="product-available">Instock</span>
							</div>
                            <p> <?php echo $features; ?> </p>

							<!--<div class="product-options">-->
								<!--<label>-->
									<!--Size-->
									<!--<select class="input-select">-->
										<!--<option value="0">X</option>-->
									<!--</select>-->
								<!--</label>-->
								<!--<label>-->
									<!--Color-->
									<!--<select class="input-select">-->
										<!--<option value="0">Red</option>-->
									<!--</select>-->
								<!--</label>-->
							<!--</div>-->

							<!--<div class="add-to-cart">-->
								<!--<div class="qty-label">-->
									<!--Qty-->
									<!--<div class="input-number">-->
										<!--<input type="number">-->
										<!--<span class="qty-up">+</span>-->
										<!--<span class="qty-down">-</span>-->
									<!--</div>-->
								<!--</div>-->
								<!--<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>-->
							<!--</div>-->

<!--							<ul class="product-btns">-->
<!--								<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>-->
<!--								<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>-->
<!--							</ul>-->

							<ul class="product-links">
								<li>Category:</li>
								<li><a href="#"><?php echo $category; ?></a></li>
                                <li><a href="#"><?php echo $subCategory; ?></a></li>

							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
								<!--<li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>-->
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p> <?php echo $description; ?> </p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p> <?php echo $features; ?> </p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!--&lt;!&ndash; tab3  &ndash;&gt;-->
								<!--<div id="tab3" class="tab-pane fade in">-->
									<!--<div class="row">-->
										<!--&lt;!&ndash; Rating &ndash;&gt;-->
										<!--<div class="col-md-3">-->
											<!--<div id="rating">-->
												<!--<div class="rating-avg">-->
													<!--<span>4.5</span>-->
													<!--<div class="rating-stars">-->
														<!--<i class="fa fa-star"></i>-->
														<!--<i class="fa fa-star"></i>-->
														<!--<i class="fa fa-star"></i>-->
														<!--<i class="fa fa-star"></i>-->
														<!--<i class="fa fa-star-o"></i>-->
													<!--</div>-->
												<!--</div>-->
												<!--<ul class="rating">-->
													<!--<li>-->
														<!--<div class="rating-stars">-->
															<!--<i class="fa fa-star"></i>-->
															<!--<i class="fa fa-star"></i>-->
															<!--<i class="fa fa-star"></i>-->
															<!--<i class="fa fa-star"></i>-->
															<!--<i class="fa fa-star"></i>-->
														<!--</div>-->
														<!--<div class="rating-progress">-->
															<!--<div style="width: 80%;"></div>-->
														<!--</div>-->
														<!--<span class="sum">3</span>-->
													<!--</li>-->
													<!--<li>-->
														<!--<div class="rating-stars">-->
															<!--<i class="fa fa-star"></i>-->
															<!--<i class="fa fa-star"></i>-->
															<!--<i class="fa fa-star"></i>-->
															<!--<i class="fa fa-star"></i>-->
															<!--<i class="fa fa-star-o"></i>-->
														<!--</div>-->
														<!--<div class="rating-progress">-->
															<!--<div style="width: 60%;"></div>-->
														<!--</div>-->
														<!--<span class="sum">2</span>-->
													<!--</li>-->
													<!--<li>-->
														<!--<div class="rating-stars">-->
															<!--<i class="fa fa-star"></i>-->
															<!--<i class="fa fa-star"></i>-->
															<!--<i class="fa fa-star"></i>-->
															<!--<i class="fa fa-star-o"></i>-->
															<!--<i class="fa fa-star-o"></i>-->
														<!--</div>-->
														<!--<div class="rating-progress">-->
															<!--<div></div>-->
														<!--</div>-->
														<!--<span class="sum">0</span>-->
													<!--</li>-->
													<!--<li>-->
														<!--<div class="rating-stars">-->
															<!--<i class="fa fa-star"></i>-->
															<!--<i class="fa fa-star"></i>-->
															<!--<i class="fa fa-star-o"></i>-->
															<!--<i class="fa fa-star-o"></i>-->
															<!--<i class="fa fa-star-o"></i>-->
														<!--</div>-->
														<!--<div class="rating-progress">-->
															<!--<div></div>-->
														<!--</div>-->
														<!--<span class="sum">0</span>-->
													<!--</li>-->
													<!--<li>-->
														<!--<div class="rating-stars">-->
															<!--<i class="fa fa-star"></i>-->
															<!--<i class="fa fa-star-o"></i>-->
															<!--<i class="fa fa-star-o"></i>-->
															<!--<i class="fa fa-star-o"></i>-->
															<!--<i class="fa fa-star-o"></i>-->
														<!--</div>-->
														<!--<div class="rating-progress">-->
															<!--<div></div>-->
														<!--</div>-->
														<!--<span class="sum">0</span>-->
													<!--</li>-->
												<!--</ul>-->
											<!--</div>-->
										<!--</div>-->
										<!--&lt;!&ndash; /Rating &ndash;&gt;-->

										<!--&lt;!&ndash; Reviews &ndash;&gt;-->
										<!--<div class="col-md-6">-->
											<!--<div id="reviews">-->
												<!--<ul class="reviews">-->
													<!--<li>-->
														<!--<div class="review-heading">-->
															<!--<h5 class="name">John</h5>-->
															<!--<p class="date">27 DEC 2018, 8:0 PM</p>-->
															<!--<div class="review-rating">-->
																<!--<i class="fa fa-star"></i>-->
																<!--<i class="fa fa-star"></i>-->
																<!--<i class="fa fa-star"></i>-->
																<!--<i class="fa fa-star"></i>-->
																<!--<i class="fa fa-star-o empty"></i>-->
															<!--</div>-->
														<!--</div>-->
														<!--<div class="review-body">-->
															<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>-->
														<!--</div>-->
													<!--</li>-->
													<!--<li>-->
														<!--<div class="review-heading">-->
															<!--<h5 class="name">John</h5>-->
															<!--<p class="date">27 DEC 2018, 8:0 PM</p>-->
															<!--<div class="review-rating">-->
																<!--<i class="fa fa-star"></i>-->
																<!--<i class="fa fa-star"></i>-->
																<!--<i class="fa fa-star"></i>-->
																<!--<i class="fa fa-star"></i>-->
																<!--<i class="fa fa-star-o empty"></i>-->
															<!--</div>-->
														<!--</div>-->
														<!--<div class="review-body">-->
															<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>-->
														<!--</div>-->
													<!--</li>-->
													<!--<li>-->
														<!--<div class="review-heading">-->
															<!--<h5 class="name">John</h5>-->
															<!--<p class="date">27 DEC 2018, 8:0 PM</p>-->
															<!--<div class="review-rating">-->
																<!--<i class="fa fa-star"></i>-->
																<!--<i class="fa fa-star"></i>-->
																<!--<i class="fa fa-star"></i>-->
																<!--<i class="fa fa-star"></i>-->
																<!--<i class="fa fa-star-o empty"></i>-->
															<!--</div>-->
														<!--</div>-->
														<!--<div class="review-body">-->
															<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>-->
														<!--</div>-->
													<!--</li>-->
												<!--</ul>-->
												<!--<ul class="reviews-pagination">-->
													<!--<li class="active">1</li>-->
													<!--<li><a href="#">2</a></li>-->
													<!--<li><a href="#">3</a></li>-->
													<!--<li><a href="#">4</a></li>-->
													<!--<li><a href="#"><i class="fa fa-angle-right"></i></a></li>-->
												<!--</ul>-->
											<!--</div>-->
										<!--</div>-->
										<!--&lt;!&ndash; /Reviews &ndash;&gt;-->

										<!--&lt;!&ndash; Review Form &ndash;&gt;-->
										<!--<div class="col-md-3">-->
											<!--<div id="review-form">-->
												<!--<form class="review-form">-->
													<!--<input class="input" type="text" placeholder="Your Name">-->
													<!--<input class="input" type="email" placeholder="Your Email">-->
													<!--<textarea class="input" placeholder="Your Review"></textarea>-->
													<!--<div class="input-rating">-->
														<!--<span>Your Rating: </span>-->
														<!--<div class="stars">-->
															<!--<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>-->
															<!--<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>-->
															<!--<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>-->
															<!--<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>-->
															<!--<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>-->
														<!--</div>-->
													<!--</div>-->
													<!--<button class="primary-btn">Submit</button>-->
												<!--</form>-->
											<!--</div>-->
										<!--</div>-->
										<!--&lt;!&ndash; /Review Form &ndash;&gt;-->
									<!--</div>-->
								<!--</div>-->
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
                            <?php include 'databaseconn.php'?>
                            <?php $x=1; ?>
                            <?php include 'relatedproducts.php' ?>
                            <?php  $name1 = $name;  ?>

                            <a href="product.php?productName=<?php echo $name1; ?>" >	<div class="product-img">
                                <img src="<?php echo $link;?>" height="240" width="200" alt=""/>
								<div class="product-label">
                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
								</div>
							</div>
							<div class="product-body">
                                <p class="product-category"><?php echo $category; ?></p>
                                <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                <h4 class="product-price"><?php if ($price>0) echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
                                <div class="product-rating">
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
					</div>
					<!-- /product -->

                    <!-- product -->
                    <div class="col-md-3 col-xs-6">
                        <div class="product">
                            <?php $x=2; ?>
                            <?php include 'relatedproducts.php' ?>
                            <?php  $name2 = $name;  ?>

                            <a href="product.php?productName=<?php echo $name2; ?>" >	<div class="product-img">
                                <img src="<?php echo $link;?>" height="240" width="200" alt=""/>
                                <div class="product-label">
                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category"><?php echo $category; ?></p>
                                <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
                                <div class="product-rating">
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
                    </div>
                    <!-- /product -->

					<div class="clearfix visible-sm visible-xs"></div>

                    <!-- product -->
                    <div class="col-md-3 col-xs-6">
                        <div class="product">
                                <?php $x=3; ?>
                                <?php include 'relatedproducts.php' ?>
                                <?php  $name3 = $name;  ?>

                                <a href="product.php?productName=<?php echo $name3; ?>" >	<div class="product-img">
                                <img src="<?php echo $link;?>" height="240" width="200" alt=""/>
                                <div class="product-label">
                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category"><?php echo $category; ?></p>
                                <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
                                <div class="product-rating">
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
                    </div>
                    <!-- /product -->

                    <!-- product -->
                    <div class="col-md-3 col-xs-6">
                        <div class="product">
                            <?php $x=4; ?>
                            <?php include 'relatedproducts.php' ?>
                            <?php  $name4 = $name;  ?>

                            <a href="product.php?productName=<?php echo $name4; ?>" >	<div class="product-img">
                                <img src="<?php echo $link;?>" height="240" width="200" alt=""/>
                                <div class="product-label">
                                    <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category"><?php echo $category; ?></p>
                                <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                <h4 class="product-price"><?php if ($price>0)  echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "KSh ".$oldprice; ?></del></h4>
                                <div class="product-rating">
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
                    </div>
                    <!-- /product -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

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
