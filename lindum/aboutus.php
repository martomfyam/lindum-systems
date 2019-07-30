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
</div>
<!-- /HEADER -->

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
                    <a href="store.php?category=<?php echo "Hose reel"; ?>"  rel="noopener noreferrer">Hose reels & pumpset</a>
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
                    <a href="https://lindumsystems.co.ke/blog"  rel="noopener noreferrer">OUR BLOG</a>

                </div>
            </div>

            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()" rel="noopener noreferrer">&#9776;</a>
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

<!-- SECTION -->
<div  class="section2">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-3 col-xs-12"></div>
            <div class="col-md-6 col-xs-12">
                <h3>  <p align="center"> MAP </p> </h3>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2186.036221851838!2d34.7507356!3d-0.1026389!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x48edb71eb8d2d1a!2sLindum+Systems+Limited!5e1!3m2!1sen!2ske!4v1554542482686!5m2!1sen!2ske" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

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
            <div class="col-md-6 col-xs-12" >
                <h3>  <p align="center"><u> OUR BROCHURE </u></p> </h3>

              <p align="center" >

                <form method="get" action="./resources/LINDUM%20SYSTEMS%20LIMITED%20BROCHURE.pdf">
                    Download Lindum Systems Brochure:
                    <button type="submit" class="btn btn-primary" > <i class="fa fa-download"></i> Download</button>
                </form>

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
                            <li> <a href="https://goo.gl/maps/xb4H8GCCjCsqfsqr9" target="_blank"rel="noopener noreferrer"> Lindum Systems limited main outlet is located in Kisumu, Amalo HSE,1st floor (Next to Guardian Booking Office)</a></li>

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
        var link = "https://www.lindumsystems.martinmuthomi.co.ke"+linkf+"?productName="+clicked_id;
        var link = link.replace("index.php", "product.php");
        var link = link.replace("store.php", "product.php");
        var link = encodeURIComponent(link);
        var productname = clicked_id;

        var completetext =  encodeURI("hello lindum systems admin. i wanna place an order on '"+productname+"'. Thankyou. product link: (");
        var completetext = completetext+link+")."

        window.location.href="https://api.whatsapp.com/send?phone=254792020946&text="+completetext

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
