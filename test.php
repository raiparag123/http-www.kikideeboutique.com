<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>KIKI DEE | Contact Us</title>
	<meta charset="UTF-8">
	<meta name="description" content="Kikidee Boutique">
	<meta name="keywords" content="kikidee, fashion, boutique">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.png" rel="shortcut icon"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/mystyle.css"/>
	<!--Logo-->
	<link rel="stylesheet" href="css/logo/style.css"/>



	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark site-navbar" style="padding-top: unset;padding-bottom: unset;">
				<a class="navbar-brand site-logo" href="#">
						<div class="wrapper run-animation" id="animate" style="height:100%;">
								<div class="logo">
									<span class="marvel" style="font-weight: 100 !important;">Kiki</span>
									<span class="studios" style="color: #53881b !important;">Dee</span>
									<div class="restart" style="margin-top: -28px !important; font-size: 1.0rem !important;">Boutique</div>
								</div>
							</div>
				</a>
			<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
				aria-expanded="false" aria-label="Toggle navigation" style="border-color: rgb(83, 136, 26)!important;">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavId">
				<!-- Main menu -->
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">About Us</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" >Collection<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="nav-item">
									<a class="nav-link" href="portfolio_20.html">SS2020</a>
									<a class="nav-link" href="portfolio_19.html">SS2019</a>
									<a class="nav-link" href="portfolio_18.html">SS2018</a>
									<a class="nav-link" href="portfolio_17.html">SS2017</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
							<a class="nav-link" href="gallery.html">Gallery</a>
						</li>
					<li class="nav-item">
						<a class="nav-link" href="events.html">Events</a>
					</li>
					<li class="nav-item">
							<a class="nav-link" href="testimonials.html">Client Diaries</a>
						</li>
					
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact Us</a>
					</li>                                                                
				</ul>
				<div class="social-links my-2 my-lg-0">
					
					<a class="head-social" href="https://www.facebook.com/Kiki-Dee-Boutique-883109705127736" target="_blank" ><i class="fa fa-facebook"></i></a>
					<a class="head-social" href="https://www.instagram.com/kikideeboutique" target="_blank"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
		</nav>
	</header>
	<!-- Header section end-->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/header-bg/contactus.jpg">
		<div class="grad1" align="right">
			<h2  class="highlight-header">Contact Us</h2>
		</div>
		
			
		</div>
	</section>
	<!-- Page top section end-->


	<!-- Contact page -->
	<section class="page-warp contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="section-title">
						<span class="home-founder">Kiki Dee</span>
						<h2>Book an Appointment</h2>
					</div>
					<?php
						if(isset($_POST['cust_submit'])) {
							$email_to = "kikideeboutique@yahoo.com";
							$email_subject = "Mail from Kiki Dee Website";
							
							$fname1 = $_POST['cust_name'];
							$email1 = $_POST['cust_email'];
							$contact1 = $_POST['order_type']; 
							$message1 = $_POST['cust_message'];
							$email_message = "Form details from www.kikideeboutique.com below.\n\n";
							
							function clean_string($string) {
							  $bad = array("content-type","bcc:","to:","cc:","href");
							  return str_replace($bad,"",$string);
							}
							
							$email_message .= "Full Name: ".clean_string($fname1)."\n";
							$email_message .= "EmailID:".clean_string($email1)."\n";
							$email_message .= "Order Type:".clean_string($contact1)."\n";
							$email_message .= "Message:".clean_string($message1)."\n";
							
							// create email headers
							$headers = 'From: '.'KikiDeeWebsite'."\r\n".
							'Reply-To: '.$email1."\r\n" .
							'X-Mailer: PHP/' . phpversion();
							if(mail($email_to, $email_subject, $email_message, $headers))
							{
								$message = "Thank you for booking an appointment. We will contact you soon!";
								echo "<script type='text/javascript'>alert('$message');</script>";
							}
							else
							{
								$message1 = "Sorry. The mail was not sent !! Please try after sometime!!";
								echo "<script type='text/javascript'>alert('$message1');</script>";
							}
						}
					?>
					
					<form class="comment-form" method="POST">
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="Your Name" name="cust_name">
							</div>
							<div class="col-md-6">
								<input type="email" placeholder="Your Email" name="cust_email">
							</div>

							
								<div class="col-md-12">
									<select class="comment-form input" name="order_type">
										<option value="View Ready Made Collection">View Ready Made Collection</option>
										<option value="Make to Order Enquiry">Make to Order Enquiry</option>
									</select>
								</div>	
							<div class="col-md-12">
									<!-- <input type="text" placeholder="Subject"> -->
								<textarea placeholder="Message" class="txt-message" name="cust_message"></textarea>
								<button  type="submit" name="cust_submit"class="site-btn sb-dark">SUBMIT ENQUIRY<i class="fa fa-angle-double-right"></i></button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-4">
					<div class="map">
						<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48359.89302507648!2d-73.95762813994347!3d40.75117343692072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2592bc7bab159%3A0x56156cc4c5ee8e31!2sLong+Island+City%2C+Queens%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1561474745218!5m2!1sen!2sbd" style="border:0" allowfullscreen></iframe> -->
					</div>
				<div class="contact-text">
					<!-- <p>Kiki Dee Boutique was founded in January 2016 when aunt and niece team, Deepa and Nisha saw a gap in the market (after many unsuccessful shopping trips to Indian high street retailers) for Indian clothing with a western edge.</p>
					<p>Kiki Dee Boutique brings you the latest in Ladies fashion and we pride ourselves on ???guilt free spending??? bringing you Lehenga's, Anarkali's and Gown's that are fashionable yet affordable, so that you can look fabulous without spending a fortune.</p> -->
					<br><br><p style="font-size: 18px !important;">
							<b class="home-founder" style="color:#53881C;font-size:22px !important;">Ready to wear boutique</b><br><b>Stanmore, London<br>Contact Deepa <br>+447931 768 182<br><br>
							<b class="home-founder" style="color:#53881C;font-size:22px !important;">Bespoke order</b><br>Mill Hill , London<br>Contact Nisha <br>+447956 816 746 <br><br>
							<b class="home-founder" style="color:#53881C;font-size:22px !important;">All enquiries</b><br>kikideeboutique@yahoo.com<br></b>
							<br><b class="home-founder" style="color:#53881C;font-size:22px !important;">Other Business</b><br>Although we are not affiliated to any of the brands listed on this page, we highly recommend these brands to complete your look - great range of jewellery, bags and accessories.
							<br><a target="_blank" href="https://nandaaccessories.co.uk">https://nandaaccessories.co.uk</a><br><a target="_blank" href="https://sefialondon.co.uk">https://sefialondon.co.uk</a>
							<br></b>
	</p>
				</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact page end-->
	
	<!-- Back to top -->
	<div class="container">
		<div class="backtotop">
			<div class="up-btn" id="backTotop">UP</div>
		</div>
	</div>

<!-- Footer section -->
<br>
<footer class="footer-section custom-footer">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-4 col-sm-8">
				<div class="footer-widget resent-post black-text">
					<h2 class="fw-title footer-title">Recent Events</h2>
					<div class="rp-item">
						<a href="events.html"><h4 class="white-text">Hey Gorgeous</h4></a>
						<span class="black-text">28 March 2020</span>
					</div>
					
					<div class="rp-item">
							<a href="events.html"><h4 class="white-text">The Shop Till You Drop</h4></a>
							<span class="black-text" >15 March 2020</span>
						</div>
						<div class="rp-item">
						<a href="events.html"><h4 class="white-text">The Shop Till You Drop</h4></a></a>
						<span class="black-text" >1 March 2020</span>
					</div>
					
				</div>
			</div>
			<div class="col-lg-4 col-sm-8">
				<div class="footer-widget">
					<h2 class="fw-title footer-title">Useful Links</h2>
					<ul>
						<li><a href="about.html"  class="white-text" >About Us</a></li>
						<li><a href="portfolio_20.html" class="white-text" >Collection</a></li>
						<li><a href="gallery.html" class="white-text" >Gallery</a></li>
						<li><a href="events.html" class="white-text" >Events</a></li>
						<li><a href="contact.php" class="white-text" >Book an Appointment</a></li>
						<li><a href="#" class="white-text" >Other Business Link</a></li>
						
						
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-sm-8">
				<div class="footer-widget contact-widget">
				
					<h2 class="fw-title footer-title">Contact</h2>
					<ul >
						<li><span class="black-text">Address:</span>
							<b style="font-weight:800;color: white;">Ready to wear boutique</b>
							<span></span><span></span>
							<b class="white-text">Stanmore, London</b>
						
							<span></span><span></span><span class="extra-span"></span>
							<b style="font-weight:800;color: white;">Bespoke order</b>
							<span></span><span></span><span class="extra-span"></span>
							<b class="white-text">Mill Hill , London</b>
						</li> 
						
						<!-- <li class="black-text"><span></span><b style="font-weight:800;color: white;">Bespoke order</b><span></span><span></span><span></span><b class="white-text">Mill Hill , London</b></li>  -->
						<li class="black-text"><span>Phone:</span><b class="white-text">+447931 768 182</b><span></span><span></span><span class="extra-span"></span><b class="white-text"> +447956 816 746</b></li>
						<li class="black-text"><span>Mail:</span><b class="white-text">kikideeboutique@yahoo.com</b></li>
					</ul>
				</div>
			</div>
		</div>



	</div>
</footer>
<!-- Footer section end -->
	

		
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/logo/script.js"></script>

	</body>
</html>