<!DOCTYPE html>
<html>
<title>Photo Omada</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>

    <!-- required meta tags -->
    <meta charset="utf-8">

    <meta name="description" content="Building modern responsive website with html5, css3, jQuery & bootstrap framework">
    <meta name="keywords" content="HTML5, CSS3, jQuery, Bootstrap, Web Design, Web Development, Responsive website, Modern website">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title>Modern Responsive Website</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="../img/favicon.ico">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">

    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">

    <!-- animate CSS -->
    <link rel="stylesheet" href="../css/animate/animate.css">

    <!-- magnific-popup CSS -->
    <link rel="stylesheet" href="../css/magnific-popup/magnific-popup.css">

    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl-carousel/owl.theme.default.min.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">

    <!-- @3c -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>


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

                        <a class="navbar-brand" href="../index.php#home">
                            <img src="img/logo_photo_omada.png" alt="logo">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="vesco-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="../index.php#home">Home</a></li>
                            <li><a href="../index.php#about">About</a></li>
                            <li><a href="../index.php#work">Work</a></li>
                            <li><a href="../index.php#team">Team</a></li>
                            <li><a href="../index.php#contact">Contact</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </nav>

    </header>


    <!-- Header -->
    <header class="w3-container w3-center" style="padding:128px 16px" id="home">
        <h1 class="w3-jumbo"><b>Jane Doe</b></h1>
        <p>Photographer and Web Designer.</p>
       <!-- <img src="/img/couple1/01.jpg" class="w3-image w3-hide-large w3-hide-small w3-round" style="display:block;width:60%;margin:auto;"> -->
       <!-- <img src="/img/couple1/02.jpg" class="w3-image w3-hide-large w3-hide-medium w3-round" width="1000" height="1333"> -->
    </header>

 <!-- Work -->
 <section id="work">
  
  <div class="content-box">
	  <div class="container">	
		  <div class="row" id="row">
			  
		<?php
		  $dir1 = '../img/porfolio/Couple-Name/original';
	 	  $dir2 = '../img/porfolio/Couple-Name/thumbs';
		  $file_display = array('jpg' , 'jpeg', 'png', 'gif');
		  
		  if(file_exists($dir1) == false ) {
		  	echo 'Directory \''. $dir1. '\' not found!';
		  } 
		  else {
			$dir_contents = scandir( $dir1 );
			$counter = 1; 
			$num_col_elements = count($dir_contents);
			$index = 0;
			  foreach ( $dir_contents as $file) {
				  /*if($counter % $num_col_elements == 0){
					  echo '<div class="col-lg-4">';
					  $index = $counter;
				  }*/
			  	  $file_type = strtolower( end( explode('.', $file ) ) );
				  if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
						echo '<div class="item" id="item"><div class="well" id="item"><div class="img-wrapper"><a href="'. $dir1. '/'. $file. '" ><img src="'. $dir2. '/'. $file. '" class="img-responsive img-center" alt="Work"></a></div></div></div>';
				  }
				  /*if($counter == $index + $num_col_elements){
					  echo '</div>';
				  }*/
				  
				$counter++;
			  }
		  }
		  ?>
		  
		  <!--- --->
		  
  	  </div>
	</div>
  </div>
 </section>
		


    
    <footer>

        <div id="contact">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">
                        <div id="contact-left">

                            <h3>VESCO</h3>
                            <p>We believe in <strong>Simple</strong>, <strong>Clean</strong> & <strong>Modern</strong> Design Standards with Responsive Approach. Browse the amazing work of our company.</p>

                            <div id="contact-info">

                                <address>
                                    <strong>Headquarters:</strong><br>
                                    <p>221 Jockey Hollow, Suite 600<br>
                                    Smithtown, NY 11787</p>
                                </address>
                                <div id="phone-fax-email">
                                    <p>
                                        <strong>Phone:</strong><span> (91) 8974 56984 </span> <br>
                                        <strong>Fax:</strong><span>  (91) 66 8754 8978  </span> <br>
                                        <strong>Email:</strong><span>  info@vesco.com  </span> <br>
                                    </p>
                                </div>

                            </div>
                            <ul class="social-list">
                                <li><a href="#" class="social-icon icon-white"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="social-icon icon-white"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="social-icon icon-white"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#" class="social-icon icon-white"><i class="fa fa-google-plus"></i></a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="contact-right">
                            
                            
                            <h3>Contact Us</h3>
                            <?php include('form_process.php'); ?>

                            <form action="<?= $_SERVER['PHP_SELF'];?>#contact"  method="POST" >
                                
                                <div class="input-group ">
                                    <span class="input-group-addon "><i class="fa fa-envelope-o fa-user"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Full Name" value="<?= $name ?>">
                                    <span class="error"><?= $name_error?></span>
                                    
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                    <input type="text" name="email" class="form-control" placeholder="Email address" value="<?= $email ?>">
                                    <span class="error"><?= $email_error?></span>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-phone"></i></span>
                                    <input type="text" class="form-control" name="phone"  placeholder="Phone" value="<?= $phone ?>">
                                    <span class="error"><?= $phone_error?></span>
                                </div>
                                
                                
                                    <textarea rows="5" name="message" type="text" placeholder="Message..." class="form-control" value="<?= $message ?>"></textarea>
                                <div id="send-btn">
                                    <button type="submit" class="btn btn-lg btn-general btn-white" name="submit" id="contact_sumbit" data-sumbit="Sending.." >SEND</button>
                                    <span class="success"><?= $success ?></span>
                                    
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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
    
	<!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- bootstrap JS -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>

    <!-- WOW JS -->
    <script src="../js/wow/wow.min.js"></script>

    <!-- magnific-popup JS -->
    <script src="../js/magnific-popup/jquery.magnific-popup.min.js"></script>
	
	<!-- owl carousel JS -->
    <script src="../js/owl-carousel/owl.carousel.min.js"></script>

    <!-- counter -->
    <script src="../js/counter/jquery.waypoints.min.js"></script>
    <script src="../js/counter/jquery.counterup.min.js"></script>

    <!-- easing -->
    <script src="../js/easing/jquery.easing.1.3.js"></script>
	
	<!-- custom JS -->
    <script src="../js/custom.js"></script>

</body>

</html>
