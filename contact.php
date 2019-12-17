<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Brut</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <?php session_start() ; ?>

</head>

<body>
   <!-- ##### Header Area Start ##### -->
  <header class="header-area">

<!-- Top Header Area -->
<div class="top-header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-header-content d-flex align-items-center justify-content-between">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.php"><img src="img/core-img/logo1.png" alt=""></a>
                    </div>

                    <!-- Login Search Area -->
                    <div class="login-search-area d-flex align-items-center">
                        <!-- Login -->
                        <div class="login d-flex">
                        <?php if(isset($_SESSION["username"])) 
                          echo ("<a href='logout.php?logout'>Logout</a> ") ;
                          else 
                          echo ("<a href='login.php'>Login</a>"); ?>
                            <a  href="register.php">Register</a>
                        </div>
                        <!-- Search Form -->
                        <div class="search-form">
                            <form action="#" method="post">
                                <input type="search" name="search" class="form-control" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navbar Area -->
<div class="newspaper-main-menu" id="stickyMenu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="newspaperNav">

                <!-- Logo -->
                <div class="logo">
                    <a href="index.php"><img src="img/core-img/logo1.png" alt=""></a>
                </div>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li ><a href="index.php">Home</a></li>
                            
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        
                           <ul> 
                            <li ><a href="all.php">all Articles</a></li>
                            <li><a href="single-post.php">Single Articles</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li class="active"><a href="contact.php">Contact us</a></li>
                            <?php  if(isset($_SESSION["username"])) {
                                if ($_SESSION["role"]== 'admin' )
                                echo(" <li ><a href='ajout-ar.php'>ajouter article</a></li>")  ;
                                }  ?>       
                           
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
<div class="container">
    <div class="row align-items-center">
        <div class="col-12 col-lg-8">
            <!-- Breaking News Widget -->
            <div class="breaking-news-area d-flex align-items-center">
                <div class="news-title">
                    <p>Breaking News</p>
                </div>
                <div id="breakingNewsTicker" class="ticker">
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                        <li><a href="#">Welcome to Brut Family.</a></li>
                        <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                    </ul>
                </div>
            </div>

            <!-- Breaking News Widget -->
            <div class="breaking-news-area d-flex align-items-center mt-15">
                <div class="news-title title2">
                    <p>International</p>
                </div>
                <div id="internationalTicker" class="ticker">
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                        <li><a href="#">Welcome to Brut Family.</a></li>
                        <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Hero Add -->
        <div class="col-12 col-lg-4">
            <div class="hero-add">
                <a href="#"><img src="img/bg-img/hero-add.gif" alt=""></a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ##### Hero Area End ##### -->







    <!-- ##### Contact Form Area Start ##### -->
    <div class="contact-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-title">
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="contact-form-area">
                        <form action="con-trait.php" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" name="message" cols="30" rows="10" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn newspaper-btn mt-30 w-100" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>Address:</h6>
                        <p>481 Creekside Lane Avila <br>Beach, CA 93424</p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>Phone:</h6>
                        <p>+53 345 7953 32453 <br>+53 345 7557 822112</p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>Email:</h6>
                        <p>yourmail@gmail.com</p>
                    </div>
                </div>
            </div>

            <!-- Google Maps -->
            <div class="map-area">
                <div id="googleMap"></div>
            </div>

        </div>
    </div>
    <!-- ##### Contact Form Area End ##### -->
    <?php
    include 'footer.html'
    ?>
    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Google Maps -->
  
    <script src="js/google-map/map-active.js"></script>
</body>

</html>