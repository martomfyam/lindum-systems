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

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb-tree">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"> <a href="store.php"> All Categories </a> </li>

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
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">
                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Categories</h3>
                    <div class="checkbox-filter">
                    <?php
                    $query = mysqli_query($conn,"SELECT * FROM products WHERE category = 'cctv' ") or die("could not search!");
                    $count = mysqli_num_rows($query);
                    ?>
                        <div class="input-checkbox">
                            <input type="checkbox" id="category-1">
                            <label for="category-1">
                                <span></span>
                                CCTV systems
                                <small>(<?php echo $count; ?>)</small>
                            </label>
                        </div>

                        <?php
                        $query = mysqli_query($conn,"SELECT * FROM products WHERE category = 'fire' ") or die("could not search!");
                        $count = mysqli_num_rows($query);
                        ?>

                        <div class="input-checkbox">
                            <input type="checkbox" id="category-2">
                            <label for="category-2">
                                <span></span>
                                Fire safety equipments
                                <small>(<?php echo $count; ?>)</small>
                            </label>
                        </div>


                        <?php
                        $query = mysqli_query($conn,"SELECT * FROM products WHERE category = 'alarm' ") or die("could not search!");
                        $count = mysqli_num_rows($query);
                        ?>
                        <div class="input-checkbox">
                            <input type="checkbox" id="category-3">
                            <label for="category-3">
                                <span></span>
                                Alarm systems
                                <small>(<?php echo $count; ?>)</small>
                            </label>
                        </div>

                        <?php
                        $query = mysqli_query($conn,"SELECT * FROM products WHERE category = 'access control' ") or die("could not search!");
                        $count = mysqli_num_rows($query);
                        ?>

                        <div class="input-checkbox">
                            <input type="checkbox" id="category-4">
                            <label for="category-4">
                                <span></span>
                                Access control systems
                                <small>(<?php echo $count; ?>)</small>
                            </label>
                        </div>

                        <?php
                        $query = mysqli_query($conn,"SELECT * FROM products WHERE category = 'intercoms' ") or die("could not search!");
                        $count = mysqli_num_rows($query);
                        ?>

                        <div class="input-checkbox">
                            <input type="checkbox" id="category-5">
                            <label for="category-5">
                                <span></span>
                                Intercoms
                                <small>(<?php echo $count; ?>)</small>
                            </label>
                        </div>

                        <?php
                        $query = mysqli_query($conn,"SELECT * FROM products WHERE category = 'electric fence' ") or die("could not search!");
                        $count = mysqli_num_rows($query);
                        ?>

                        <div class="input-checkbox">
                            <input type="checkbox" id="category-6">
                            <label for="category-6">
                                <span></span>
                                Electric fence
                                <small>(<?php echo $count; ?>)</small>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /aside Widget -->

                <!-- aside Widget -->
<!--                <div class="aside">-->
<!--                    <h3 class="aside-title">Price</h3>-->
<!--                    <div class="price-filter">-->
<!--                        <div id="price-slider"></div>-->
<!--                        <div class="input-number price-min">-->
<!--                            <input id="price-min" type="number">-->
<!--                            <span class="qty-up">+</span>-->
<!--                            <span class="qty-down">-</span>-->
<!--                        </div>-->
<!--                        <span>-</span>-->
<!--                        <div class="input-number price-max">-->
<!--                            <input id="price-max" type="number">-->
<!--                            <span class="qty-up">+</span>-->
<!--                            <span class="qty-down">-</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- /aside Widget -->

                <!-- aside Widget -->
<!--                <div class="aside">-->
<!--                    <h3 class="aside-title">Brand</h3>-->
<!--                    <div class="checkbox-filter">-->
<!--                        <div class="input-checkbox">-->
<!--                            <input type="checkbox" id="brand-1">-->
<!--                            <label for="brand-1">-->
<!--                                <span></span>-->
<!--                                SAMSUNG-->
<!--                                <small>(578)</small>-->
<!--                            </label>-->
<!--                        </div>-->
<!--                        <div class="input-checkbox">-->
<!--                            <input type="checkbox" id="brand-2">-->
<!--                            <label for="brand-2">-->
<!--                                <span></span>-->
<!--                                LG-->
<!--                                <small>(125)</small>-->
<!--                            </label>-->
<!--                        </div>-->
<!--                        <div class="input-checkbox">-->
<!--                            <input type="checkbox" id="brand-3">-->
<!--                            <label for="brand-3">-->
<!--                                <span></span>-->
<!--                                SONY-->
<!--                                <small>(755)</small>-->
<!--                            </label>-->
<!--                        </div>-->
<!--                        <div class="input-checkbox">-->
<!--                            <input type="checkbox" id="brand-4">-->
<!--                            <label for="brand-4">-->
<!--                                <span></span>-->
<!--                                SAMSUNG-->
<!--                                <small>(578)</small>-->
<!--                            </label>-->
<!--                        </div>-->
<!--                        <div class="input-checkbox">-->
<!--                            <input type="checkbox" id="brand-5">-->
<!--                            <label for="brand-5">-->
<!--                                <span></span>-->
<!--                                LG-->
<!--                                <small>(125)</small>-->
<!--                            </label>-->
<!--                        </div>-->
<!--                        <div class="input-checkbox">-->
<!--                            <input type="checkbox" id="brand-6">-->
<!--                            <label for="brand-6">-->
<!--                                <span></span>-->
<!--                                SONY-->
<!--                                <small>(755)</small>-->
<!--                            </label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- /aside Widget -->

                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Top selling</h3>
                    <?php include 'databaseconn.php' ?>
                    <?php $x=1 ?>
                    <?php include 'topsellingdetails.php' ?>
                    <div class="product-widget" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                        <div class="product-img">


                            <img src="<?php echo $link;?>"  alt=""/>
                            <!--										<img src="./img/product07.png" alt="">-->
                        </div>
                        <div class="product-body">
                            <p class="product-category"><?php echo $category; ?></p>
                            <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                            <h4 class="product-price"><?php if ($price>0) echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "Ksh ".$oldprice; ?></del></h4>

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
                            <h4 class="product-price"><?php if ($price>0) echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "Ksh ".$oldprice; ?></del></h4>

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
                            <h4 class="product-price"><?php if ($price>0) echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "Ksh ".$oldprice; ?></del></h4>

                        </div>
                    </div>
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
                            <h4 class="product-price"><?php if ($price>0) echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "Ksh ".$oldprice; ?></del></h4>

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
                            <h4 class="product-price"><?php if ($price>0) echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "Ksh ".$oldprice; ?></del></h4>

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
                            <h4 class="product-price"><?php if ($price>0) echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "Ksh ".$oldprice; ?></del></h4>

                        </div>
                    </div>



                </div>
                <!-- /aside Widget -->
            </div>
            <!-- /ASIDE -->

            <!-- STORE -->
            <div id="store" class="col-md-9">
                <!-- store top filter -->
                <div class="store-filter clearfix">
                    <div class="store-sort">
                        <label>
                            Sort By:
                            <select class="input-select">
                                <option value="0">Popular</option>
                                <option value="1">Position</option>
                            </select>
                        </label>

                        <label>
                            Show:
                            <select class="input-select">
                                <option value="0">20</option>
                                <option value="1">50</option>
                            </select>
                        </label>
                    </div>
                    <ul class="store-grid">
                        <li class="active"><i class="fa fa-th"></i></li>
                        <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                    </ul>
                </div>
                <!-- /store top filter -->

                <!-- store products -->
                <div class="row">
                    <?php
                    $output="";
                    $searchq="";
                    if(isset($_POST['search'])){
                        $searchq = $_POST['search'];
                        $category = $_POST['category'];
                        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

                        $query = mysqli_query($conn,"SELECT * FROM products WHERE category = '$category' and itemName like '%$searchq%' or category like '%$searchq%' ") or die("could not search!");
                        $count = mysqli_num_rows($query);

                        if ($count == 0){
                            echo "Their was no search results for '".$searchq."'";

                        } else{

                            while($row = mysqli_fetch_array($query)){
                                $name = $row['itemName'];
                                $category = $row['category'];
                                $price = $row['price'];
                                $discount = $row['discount'];
                                $rating = $row['rating'];
                                $new = $row['new'];
                                $description = $row['description'];
                                $link = $row['link'];

                                $oldprice = $price + $discount;
                                if($oldprice <= 0){
                                    $discpercentage = 0;
                                } else {
                                    $discpercentage = ceil(($discount * 100) / $oldprice);
                                }

                                $output .= '<div> '.$name.' '.$category.'</div> ';
                                ?>

                                <!-- product -->
                                <div class="col-md-4 col-xs-6">
                                    <div class="product" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                        <div class="product-img"  >
                                            <img src="<?php echo $link;?>" height="240"/>
                                            <!--										<img src="./img/product01.png" alt="">-->
                                            <div class="product-label">
                                                <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $category; ?></p>
                                            <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                            <h4 class="product-price"><?php if ($price>0) echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "Ksh".$oldprice; ?></del></h4>
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
                                </div>
                                <!-- /product -->
                                <?php

                            }


                        }

                    } else if(isset($_GET['category'])){

                        $category = $_GET['category'];

                        $query = mysqli_query($conn,"SELECT * FROM products WHERE category = '$category' ") or die("could not search!");
                        $count = mysqli_num_rows($query);

                        if ($count == 0){
                            echo "Their was no search results for '".$searchq."'";

                        } else{

                            while($row = mysqli_fetch_array($query)){
                                $name = $row['itemName'];
                                $category = $row['category'];
                                $price = $row['price'];
                                $discount = $row['discount'];
                                $rating = $row['rating'];
                                $new = $row['new'];
                                $description = $row['description'];
                                $link = $row['link'];

                                $oldprice = $price + $discount;
                                if($oldprice <= 0){
                                    $discpercentage = 0;
                                } else {
                                    $discpercentage = ceil(($discount * 100) / $oldprice);
                                }

                                $output .= '<div> '.$name.' '.$category.'</div> ';
                                ?>

                                <!-- product -->
                                <div class="col-md-4 col-xs-6">
                                    <div class="product" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                        <div class="product-img" >
                                            <img src="<?php echo $link;?>" height="240"/>
                                            <!--										<img src="./img/product01.png" alt="">-->
                                            <div class="product-label">
                                                <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $category; ?></p>
                                            <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                            <h4 class="product-price"><?php if ($price>0) echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "Ksh".$oldprice; ?></del></h4>
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
                                </div>
                                <!-- /product -->
                                <?php

                            }


                        }



                    } else {

                        $query = mysqli_query($conn,"SELECT * FROM products ") or die("could not search!");
                        $count = mysqli_num_rows($query);

                        if ($count == 0){
                            $output="There was no search results";

                        } else{

                            while($row = mysqli_fetch_array($query)){
                                $name = $row['itemName'];
                                $category = $row['category'];
                                $price = $row['price'];
                                $discount = $row['discount'];
                                $rating = $row['rating'];
                                $new = $row['new'];
                                $description = $row['description'];
                                $link = $row['link'];

                                $oldprice = $price + $discount;
                                if($oldprice <= 0){
                                    $discpercentage = 0;
                                } else {
                                    $discpercentage = ceil(($discount * 100) / $oldprice);
                                }

                                $output .= '<div> '.$name.' '.$category.'</div> ';
                                ?>

                                <!-- product -->
                                <div class="col-md-4 col-xs-6">
                                    <div class="product" id="<?php echo $name; ?>" onClick="reply_click(this.id)">
                                        <div class="product-img" >
                                            <img src="<?php echo $link;?>" height="240"/>
                                            <!--										<img src="./img/product01.png" alt="">-->
                                            <div class="product-label">
                                                <span class="sale"><?php if($discpercentage>0){ echo "-".$discpercentage;} ?> </span>
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $category; ?></p>
                                            <h3 class="product-name"><a href="#"><?php echo $name; ?></a></h3>
                                            <h4 class="product-price"><?php if ($price>0) echo "KSh ".$price; ?> <del class="product-old-price"><?php if($oldprice>$price) echo "Ksh".$oldprice; ?></del></h4>
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
                                </div>
                                <!-- /product -->
                                <?php

                            }


                        }







                    }
                    ?>

                    <?php
                    //  echo $output;
                    //  echo $link;
                    // print ("$output");
                    ?>
                </div>
                <!-- /store products -->

                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <span class="store-qty">Showing products</span>
                    <ul class="store-pagination">
                        <li class="active">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!-- /store bottom filter -->
            </div>
            <!-- /STORE -->
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
