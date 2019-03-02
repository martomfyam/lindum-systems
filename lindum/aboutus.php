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
            <div class="col-md-3 col-xs-12"></div>
            <div class="col-md-6 col-xs-12">
                <h3>  <p align="center"> INTRODUCTION</p> </h3> <br>
                <p>  <b>Lindum Systems Limited </b> is a company dedicated to
                the provision of excellent security system services. We
                are specialized in sale, installation and maintenance
                of cctv systems, access control, alarm systems and
                electric fencing.
                We aim to provide full security solutions to
                individuals, businesses and communities by creating
                an environment where you can feel safe and secure.
                With our easy to use systems and equipments, we
                offer training to individuals and companies end be
                with you every step of the way to ensure your safety
                  and comfort. </p>
            </div>
            <div class="col-md-3 col-xs-12"></div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div  class="section2">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-3 col-xs-12"></div>
            <div class="col-md-6 col-xs-12">
                <h3>  <p align="center"> OUR MISSION </p> </h3>
                <P>
                    Providing security systems that
                    deters crime, keeps clients and
                    their properties safe while
                    supporting their social and
                    economic growth.
                </P>
            </div>
            <div class="col-md-3 col-xs-12"></div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


<!-- SECTION -->
<div  class="section2">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-3 col-xs-12"></div>
            <div class="col-md-6 col-xs-12">
                <h3>  <p align="center"> OUR VISION </p></h3>
                <p>
                    To be the most admired and
                    market leader in provision of
                    security systems in Kenya,
                    Eastern Africa and beyond its
                    borders.
                </p>
            </div>
            <div class="col-md-3 col-xs-12"></div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div  class="section2">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-3 col-xs-12"></div>
            <div class="col-md-6 col-xs-12">
                <h3>  <p align="center"> OUR VALUES </p> </h3>
                <p>
                    <ul style="list-style-type:disc">
                <li>Integrity</li>
                <li>Reliability</li>
                <li>Trust</li>
                <li>Diversity</li>
                <li>Respect</li>
            </ul>
                </p>
            </div>
            <div class="col-md-3 col-xs-12"></div>
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