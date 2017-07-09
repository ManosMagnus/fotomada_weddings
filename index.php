<!DOCTYPE html>
<html lang="en">

<head>

    <!-- required meta tags -->
    <meta charset="utf-8">

    <!-- Θα πρέπει να γίνουν κάποιες αλλαγές --->
    <meta name="description" content="Fotomada, weddings, photography">
    <meta name="keywords" content="Fotomada, weddings, photography, Thessaloniki, Ceremony, Γάμος, Φωτογράφοι, Φωτογραφίσειςσσ">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title>Fotomada Weddings</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate/animate.css">

    <!-- magnific-popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css">

    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- @3c -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Jura" />
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">


</head>

<body data-spy="scroll" data-target=".navbar-fixed-top" data-offset="65">

    <header>

        <nav class="navbar navbar-fixed-top">

            <div class="container-fluid">

                <div class="vesco-nav-wrapper">

                    <div class="navbar-header">



                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#vesco-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                       </button>

                        <div class="brand-test">
                            <ul>
                                <li>
                                    <a class="navbar-brand" href="#home">
                                        <img src="img/logo_photo_omada.png" alt="logo">

                                    </a>
                                </li>
                                <li>
                                    <a href="#home">
                                        <div id="brand-name">Φωτομάδα</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="vesco-menu">
                        <ul class="nav navbar-nav">
                            <li><a class="smooth-scroll" href="#home">Αρχική</a></li>
                            <li><a class="smooth-scroll" href="#about">Ποιοί είμαστε</a></li>
                            <!-- <li><a class="smooth-scroll" href="#team">Our Work</a></li> -->
                            <li><a class="smooth-scroll" href="#contact">Επικοινωνία</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </nav>

    </header>

    <!-- Home -->
    <section id="home">





        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <?php
		  $dir = './img/slideshow/';
		  $file_display = array('jpg' , 'jpeg', 'png', 'gif');
		  
		  if(file_exists($dir) == false ) {
		  	echo 'Directory \''. $dir. '\' not found!';
		  } 
		  else {
			$dir_contents = scandir( $dir );
			$counter = 1; 
			$num_col_elements = count($dir_contents);
			  foreach ( $dir_contents as $file) {				  
			  	  $file_type = strtolower( end( explode('.', $file ) ) );
				  if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
						echo ' <li data-target="#myCarousel" data-slide-to="'. $counter. '"></li>';
				  }
				  
				$counter++;
			  }
		  }
		 ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active img-responsive">
                    <img id="first-img" src="./img/slideshow/a/000.jpg" alt="First slide">
                    <div class="carousel-caption ">
                    </div>
                </div>
                <?php
		  $dir = './img/slideshow/';
		  $file_display = array('jpg' , 'jpeg', 'png', 'gif');
		  
		  if(file_exists($dir) == false ) {
		  	echo 'Directory \''. $dir. '\' not found!';
		  } 
		  else {
			$dir_contents = scandir( $dir );
			  foreach ( $dir_contents as $file) {				
			  	  $file_type = strtolower( end( explode('.', $file ) ) );
				  if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {	
					  echo '<div class="item img-responsive"><img src="'. $dir. '/'. $file. '" alt="First slide"></div>';      
				  }
			  }
		  }
		  ?>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>

    <!-- Services -->
    <section id="services">

        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3> ΥΠΗΡΕΣΙΕΣ </h3>
                <div class="content-title-underline"></div>
            </div>

            <div class="container">

                <div class="row">


                    <div class="col-md-6 col-sm-6">

                        <div class="service-item wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">

                            <div class="service-item-icon">
                                <i class="fa  fa-camera fa-3x"></i>
                            </div>

                            <div class="service-item-title">
                                <h3>Φωτογραφία</h3>
                            </div>

                            <div class="service-item-desc">
                                <p>ΣΟΚ!!! Οι καλύτεροι φωτογράγοι είναι έδω!!!</p>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">

                            <div class="service-item-icon">
                                <i class="fa fa-video-camera fa-3x"></i>
                            </div>

                            <div class="service-item-title">
                                <h3> Βίντεο </h3>
                            </div>

                            <div class="service-item-desc">
                                <p>Και οι καλύτεροι βιντεάδες είναι εδω</p>
                            </div>

                        </div>


                    </div>


                </div>

            </div>


        </div>

    </section>


    <!-- About -->
    <section id="about">

        <!-- About right side with diagonal BG parallax -->
        <div id="about-bg-diagonal" class="bg-parallax"></div>

        <!-- About left side with content -->
        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <div id="about-content-box">

                        <div id="about-content-box-outer">

                            <div id="about-content-box-inner">

                                <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                    <h3> ΦΩΤΟΜΑΔΑ ΣΥΝ.Π.Ε </h3>
                                    <div class="content-title-underline"></div>
                                </div>

                                <div id="about-desc" class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                    <p>Λογια Λογία Λόγια Λόγια Λόγια Λογια Λογία Λόγια Λόγια Λόγια Λογια Λογία Λόγια Λόγια Λόγια Λογια Λογία Λόγια Λόγια Λόγια Λογια Λογία Λόγια Λόγια Λόγια Λογια Λογία Λόγια Λόγια Λόγια </p>
                                </div>

                                <div id="about-btn" class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">

                                    <a class="btn btn-lg btn-general btn-blue smooth-scroll" href="#team" role="button" title="View Work"> Our Work </a>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>
<!-- 
    <section id="team">

        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3> Our Works </h3>
                <div class="content-title-underline"></div>
            </div>


            <div class="container">

                <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-md-12">
                        Ζευγάρι Νο.1 
                        <div id="team-members" class="owl-carousel owl-theme">
                            <div class="team-member">
                                <img src="img/porfolio/Couple-Name/cover.jpg" class="img-responsive" alt="team member">
                                <a href="couples/couple.php">
                                    <div class="overlay">
                                        <div class="overlay-text">Γιώργος - Μαρία</div>
                                    </div>
                                </a>
                            </div>

                             Ζευγάρι Νο.2 
                            <div class="team-member">
                                <img src="img/porfolio/Couple-Name/cover.jpg" class="img-responsive" alt="team member">
                                <a href="couples/couple.php">
                                    <div class="overlay">
                                        <div class="overlay-text">Γιώργος - Μαρία</div>
                                    </div>
                                </a>
                            </div>

                            Ζευγάρι Νο.3 
                            <div class="team-member">
                                <img src="img/porfolio/Couple-Name/cover.jpg" class="img-responsive" alt="team member">
                                <a href="couples/couple.php">
                                    <div class="overlay">
                                        <div class="overlay-text">Γιώργος - Μαρία</div>
                                    </div>
                                </a>
                            </div>

                             Ζευγάρι Νο.4  
                            <div class="team-member">
                                <img src="img/porfolio/Couple-Name/cover.jpg" class="img-responsive" alt="team member">
                                <a href="couples/couple.php">
                                    <div class="overlay">
                                        <div class="overlay-text">Γιώργος - Μαρία</div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- End Content Box 
    </section> -->

    <footer>

        <div id="contact">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">
                        <div id="contact-left">

                            <h3>ΦΩΤΟΜΑΔΑ</h3>
                            <!--                            <p>We believe in <strong>Simple</strong>, <strong>Clean</strong> & <strong>Modern</strong> Design Standards with Responsive Approach. Browse the amazing work of our company.</p> -->

                            <div id="contact-info">

                                <address>
                                    <strong>Φωτογραφικός Συνεταιρισμός</strong><br>
                                    <p>Ολύμπου 128<br>
                                    (Πάνω απο την ροτόντα)</p>
                                </address>
                                <div id="phone-fax-email">
                                    <p>
                                        <strong>Phone:</strong><span> 2310 21 22 28 </span> <br>
                                        <strong>Email:</strong><span>  info@fotomada.gr  </span> <br>
                                        <strong>Facebook:</strong><span> ΦΩΤΟ ΟΜΑΔΑ </span> <br>
                                    </p>
                                </div>

                            </div>
                            <ul class="social-list">
                                <li><a href="#" class="social-icon icon-white"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="social-icon icon-white"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                            <!--
                            <div id="test-div">
                                <img class="img-responsive" src="img/test.png">
                            </div> -->

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="contact-right">


                            <h3>Contact Us</h3>
                            <?php include('form_process.php'); ?>

                            <form action="<?= $_SERVER['PHP_SELF'];?>#contact" method="POST">

                                <div class="error-div">
                                    <span class="error"><?= $name_error?></span>
                                </div>
                                <div class="input-group ">
                                    <span class="input-group-addon "><i class="fa fa-envelope-o fa-user"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Full Name" value="<?= $name ?>">
                                </div>

                                <div class="error-div">
                                    <span class="error"><?= $email_error?></span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                    <input type="text" name="email" class="form-control" placeholder="Email address" value="<?= $email ?>">

                                </div>
                                <div class="error-div">
                                    <span class="error"><?= $phone_error?></span>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-phone"></i></span>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?= $phone ?>">
                                </div>



                                <textarea rows="5" name="message" type="text" placeholder="Message..." class="form-control" value="<?= $message ?>"></textarea>
                                <div id="send-btn">
                                    <button type="submit" class="btn btn-lg btn-general btn-white" name="submit" id="contact_sumbit" data-sumbit="Sending..">SEND</button>
                                    <span class="success"> <p><?= $success ?></p> </span>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div id="footer-copyrights">
                            <p>Copyrights &copy; 2017 All Rights Reserved by Φωτομάδα Συν.Πε</p>
                        </div>

                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <div id="footer-menu">
                            <ul>
                                <li><a class="smooth-scroll" href="#home">Home</a>/</li>
                                <li><a class="smooth-scroll" href="#work">Work</a>/</li>
                                <li><a class="smooth-scroll" href="#team">Team</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#home" id="back-to-top" class="btn btn-sm btn-blue btn-back-to-top smooth-scroll hidden-sm hidden-xs" title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>

    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- WOW JS -->
    <script src="js/wow/wow.min.js"></script>

    <!-- magnific-popup JS -->
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- owl carousel JS -->
    <script src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- counter -->
    <script src="js/counter/jquery.waypoints.min.js"></script>
    <script src="js/counter/jquery.counterup.min.js"></script>

    <!-- easing -->
    <script src="js/easing/jquery.easing.1.3.js"></script>


    <!-- custom JS -->
    <script src="js/custom.js"></script>
</body>



</html>
