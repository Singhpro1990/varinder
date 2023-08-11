<?php
	//Prevent direct access to file
	if(!isset($_SERVER['HTTP_REFERER'])){
		die('<h1>Direct File Access Restricted!</h1>');
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Prime Cab HTML5 Responsive Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prime Cab HTML5 Responsive Template</title>

        <!-- Css Files Start -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/fontawesome-all.min.css" rel="stylesheet">
		<link href="css/icomoon.css" rel="stylesheet">
		<link id="switcher" href="css/color.css" rel="stylesheet">
		<link href="css/color-switcher.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<!-- Css Files End -->
		
		<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

    </head>
	<body>
		<!--Wrapper Content Start-->
		<div class="tj-wrapper">
			<div class="loader-outer">
				<div class="tj-loader">
					<img src="images/pre-loader.gif" alt="">
					<h2>Loading...</h2>
				</div>
			</div>
			<!--Style Switcher Section Start-->
			<div class="theme_switcher">
				<div class="theme_style_switcher">
					<div class="style-switch-button">
						<i class="fa fa-cog fa-spin"></i>
					</div>
					<h4>Skin Color</h4>  
					  <a id="red" href="#" title="Red"></a>
					  <a id="liteBlue" href="#" title="Lite Blue"></a>
					  <a id="pink" href="#" title="Pink"></a>
					  <a id="yellow" href="#" title="Yellow"></a>
					  <a id="darkBlue" href="#" title="Dark Blue"></a>
					  <a id="orange" href="#" title="Orange"></a>
					  <a id="green" href="#" title="Green"></a>
					  <a id="purple" href="#" title="Purple"></a>
				</div>
			</div>
			<!--Style Switcher Section End-->
			<header class="tj-header">
				<!--Header Content Start-->
				<div class="container">
					<div class="row">
						<!--Toprow Content Start-->
						<div class="col-md-3 col-xs-12 col-sm-4">
							<!--Logo Start-->
							<div class="tj-logo">
								<h1><a href="home-1.html">Prime Cab</a></h1>
							</div>
							<!--Logo End-->
						</div>
						<div class="col-md-3 col-xs-12 col-sm-4">
							<div class="info_box">
								<i class="fa fa-home"></i>
								<div class="info_text">
									<span class="info_title">Address</span>
									<span>Primecab, United States</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-12 col-sm-4">
							<div class="info_box">
								<i class="fa fa-envelope"></i>
								<div class="info_text">
									<span class="info_title">Email Us</span>
									<span><a href="mailto:primecab@booking.com">primecab@booking.com</a></span>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<div class="phone_info">
								<div class="phone_icon">
									<i class="fas fa-phone-volume"></i>
								</div>
								<div class="phone_text">
									<span><a href="tel:1-234-000-2345">+1-234-000-2345</a></span>
								</div>
							</div>
						</div>
						<!--Toprow Content End-->
					</div>
				</div>
				<div class="tj-nav-row">
					<div class="container">
						<div class="row">
							<!--Nav Holder Start-->
							<div class="tj-nav-holder">
								<!--Menu Holder Start-->
								<nav class="navbar navbar-default"> 
									<div class="navbar-header">
									  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tj-navbar-collapse" aria-expanded="false"> 
										  <span class="sr-only">Menu</span>
										  <span class="icon-bar"></span> 
										  <span class="icon-bar"></span> 
										  <span class="icon-bar"></span>
									  </button>
									</div>
									<!-- Navigation Content Start -->
									<div class="collapse navbar-collapse" id="tj-navbar-collapse">
									  <ul class="nav navbar-nav">
										<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="home-1.html">Homepage 01</a></li>
												<li><a href="home-2.html">Homepage 02</a></li>
												<li><a href="home-3.html">Homepage 03</a></li>
											</ul>
										</li>
										<li>
											<a href="aboutus.html">Aboutus</a>
										</li>
										<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="services.html">Our Services</a></li>
											</ul>
										</li>
										<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Fleets<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="fleet-grid.html">Fleet Grid</a></li>
												<li><a href="fleet-list.html">Fleet Listing</a></li>
												<li><a href="fleet-detail.html">Fleet Detail</a></li>
											</ul>
										</li>
										<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="blog.html">Our Blog</a></li>
												<li><a href="blog-list.html">Blog List</a></li>
												<li><a href="blog-detail.html">Blog Detail</a></li>
											</ul>
										</li>
										<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<ul class="dropdown-menu">
												<li><a href="404.html">404</a></li>
												<li><a href="register.html">Register</a></li>
												<li><a href="login.html">Login</a></li>
												<li><a href="faq.html">FAQ</a></li>
												<li><a href="booking-form.html">Booking Form</a></li>
												<li><a href="confirm-booking.html">Confirm Booking</a></li>
												<li><a href="payment.html">Payment</a></li>
												<li><a href="payment-confirmation.html">Confirm Payment</a></li>
												<li><a href="booking-cancel.html">Booking Cancel</a></li>
												<li><a href="user-account.html">User Account</a></li>
											</ul>
										</li>
										<li>
											<a href="contact.html">Contactus</a>
										</li>
									   
									  </ul>
									</div>
									<!-- Navigation Content Start -->
								</nav>
								<!--Menu Holder End-->
								<div class="book_btn">
									<a href="contact.html">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
								</div>
							</div><!--Nav Holder End-->
						</div>
					</div>
				</div>
			</header>
			<!--Header Content End-->
			
			<!--Inner Banner Section Start-->
	    	<div class="tj-inner-banner">
	    		<div class="container">
	    			<h2>Confirm Booking</h2>
	    		</div>
	    	</div>
			<!--Inner Banner Section End-->
			
			<!--Breadcrumb Section Start-->
	    	<div class="tj-breadcrumb">
				<div class="container">
					<ul class="breadcrumb-list">
						<li><a href="home-1.html">Home</a></li>
						<li><a href="booking-form.html">Booking Form</a></li>
						<li class="active">Confirm Booking</li>
						<li><a href="payment.html">Payment</a></li>
					</ul>
				</div>
	    	</div>
			<!--Breadcrumb Section End-->	
			
			<!--Booking Form Section Start-->	
			<section class="tj-user-bfrm">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-12">
							<div class="tj-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#confirm_booking" data-toggle="tab">Confirm Booking</a></li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane active" id="confirm_booking">
									<form class="cb-frm" method="POST" id="rider-info">
										<div class="col-md-6 col-sm-6">
											<div class="info-field">
												<label>First Name</label>
												<span class="far fa-user"></span>
												<input type="text" name="fname" placeholder="Enter First Name">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="info-field">
												<label>Last Name</label>
												<span class="far fa-user"></span>
												<input type="text" name="lname" placeholder="Enter Last Name">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="info-field">
												<label>Phone</label>
												<span class="icon-phone icomoon"></span>
												<input type="tel" name="phone_num" placeholder="Enter Phone Number">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="info-field">
												<label>Email</label>
												<span class="far fa-envelope"></span>
												<input type="email" name="email_id" placeholder="Enter Email id">
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<a href="booking-form.html" class="back-btn"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Go Back</a>
											<button type="submit" class="book-btn" id="ride-bbtn">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
										</div>
									</form>
									<!-- Start PayPal Form Section -->
									<form action="" method="POST" id="paypal_frm">
										<input type="hidden" name="cmd" value="_ext-enter">
										<input type="hidden" name="redirect_cmd" value="_xclick">
										<input type="hidden" name="business" value="">
										<input type="hidden" name="item_name" value="">
										<input type="hidden" name="item_number" value="">
										<input type="hidden" name="amount" value="">
										<input type="hidden" name="currency_code" value="USD">
										<input type="hidden" name="cancel_return" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
										<input type="hidden" name="custom" value="">
										<input type="hidden" name="on0" value="Rider Name:">
										<input type="hidden" name="os0" value="">
										<input type="hidden" name="on1" value="Rider Email:">
										<input type="hidden" name="os1" value="">
										<input type="hidden" name="on2" value="Rider Phone:">
										<input type="hidden" name="os2" value="">
										<input type="hidden" name="on3" value="Trip Estimation:">
										<input type="hidden" name="os3" value="">
										<input type="hidden" name="on4" value="Selected Ride Car:">
										<input type="hidden" name="os4" value="">
									</form>
									<!-- End PayPal Form Section -->
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="booking-summary">
								<h3>Booking Summary</h3>
								<ul class="booking-info">
									<li><span>Booking Reference: </span><div class="book-ref"></div></li>
									<li><span>Journey Type:</span>
									<div class="service_type">Select Service Type</div></li>
									<li><span>Selected Ride Car:</span><div class="ride_car">Select Ride Car</div></li>
								</ul>
								<div class="journey-info">
									<h4	class="service_type">Select Service Type</h4>
								</div>
								<ul class="service-info">
									<li><span>From: </span><div class="startup_loc info-outer">Enter Startup Location</div></li>
									<li><span>To: </span><div class="end_loc info-outer">Enter Destination</div></li>
									<li><span>Pickup Date: </span><div class="pick_date info-outer">Enter Pickup Date</div></li>
									<li><span>Pickup Time: </span><div class="pick_time info-outer">Enter Pickup Time</div></li>
									<li><span>Dropoff Date: </span><div class="drop_date info-outer">Enter Dropoff Date</div></li>
									<li><span>Dropoff Time: </span><div class="drop_time info-outer">Enter Dropoff Time</div></li>
								</ul>
								<div class="fare-box">
									<strong>Trip Estimation</strong>
									<span class="trip_est">Not Available</span>
									<div class="est-cost">
										<strong>Cost Estimation</strong>
										<div class="total-outer">
											<span id="trip_cost"></span>
											<span class="curr"></span>
										</div>
									</div>
									<div class="ride_price_breakdown">
										<button type="button" class="price_btn" data-toggle="modal" data-target="#ride_pricing_popup" id="ride_popup">Pricing Breakdown <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
										<!-- Modal Popup Start -->
										<div id="ride_pricing_popup" class="modal fade" role="dialog">
										 	<div class="modal-dialog">
											   	<!-- Modal Popup Content Start-->
											    <div class="modal-content">
											      	<div class="modal-header">
											       		<button type="button" class="close" data-dismiss="modal">&times;</button>
											       		<h4 class="modal-title">Ride Pricing Breakdown</h4>
											     	</div>
											      	<div class="modal-body">
											      		<div class="order-summary"></div>
											     	</div>
											     	<div class="modal-footer">
											     		<h4>Thank you for using Prime Cab</h4>
											     	</div>
											    </div>
											    <!-- Modal Popup Content End-->
										  	</div>
										</div>
										<!-- Modal Popup End -->
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!--Booking Form Section End-->	
			
			<!--Call To Action Content Start-->
			<section class="tj-cal-to-action">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<div class="cta-box">
								<img src="images/cta-icon1.png" alt=""/>
								<div class="cta-text">
									<strong>Best Price Guaranteed</strong>
									<p>A more recently with desktop softy  like aldus page maker.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="cta-box">
								<img src="images/cta-icon2.png" alt=""/>
								<div class="cta-text">
									<strong>24/7 Customer Care</strong>
									<p>A more recently with desktop softy  like aldus page maker.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="cta-box">
								<img src="images/cta-icon3.png" alt=""/>
								<div class="cta-text">
									<strong>Easy Bookings</strong>
									<p>A more recently with desktop softy  like aldus page maker.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Call To Action Content End-->
			<!--Footer Content Start-->
			<section class="tj-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="about-widget widget">
								<h3>About PrimeCab</h3>
								<p>Search for will uncover many web sites variables onto of passages of lorem ipsum available but the majority the words all predefined humour to met chunks recently with desktop.</p>
								<ul class="fsocial-links">
									<li><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
									<li><a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="http://www.pinterest.com"><i class="fab fa-pinterest-p"></i></a></li>
									<li><a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="links-widget widget">
								<h3>Explore Links</h3>
								<ul class="flinks-list">
									<li><i class="far fa-folder"></i><a href="">Coupons</a></li>
									<li><i class="far fa-folder"></i><a href="">Sitemap</a></li>
									<li><i class="far fa-folder"></i><a href="">Cancellation</a></li>
									<li><i class="far fa-folder"></i><a href="">Terms</a></li>
									<li><i class="far fa-folder"></i><a href="">Privacy Policy</a></li>
									<li><i class="far fa-folder"></i><a href="">Contact Us</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="recent-tweets widget">
								<h3>Recent Tweets</h3>
								<div class="tj-tweets"></div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="contact-info widget">
								<h3>Contact Info</h3>
								<ul class="contact-box">
									<li>
										<i class="fas fa-home" aria-hidden="true"></i>   10A, PrimeCab, San Andreno, United States.
									</li>
									<li>
										<i class="far fa-envelope-open"></i>
										<a href="mailto:primecab@booking.com">
										primecab@booking.com</a>
									</li>
									<li>
										<i class="fas fa-phone-square"></i>
										+1-333-444-555
									</li>
									<li>
										<i class="fas fa-globe-asia"></i>
										<a href="www.primecab.com">www.primecab.com</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Footer Content End-->
			<!--Footer Copyright Start-->
			<section class="tj-copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<p>&copy; Copyrights 2018 <a href="home-1.html">Prime Cab</a>. All Rights Reserved.</p>
						</div>
						<div class="col-md-6 col-sm-6">
							<ul class="payment-icons">
								<li><i class="fab fa-cc-visa"></i></li>
								<li><i class="fab fa-cc-mastercard"></i></li>
								<li><i class="fab fa-cc-paypal"></i></li>
								<li><i class="fab fa-cc-discover"></i></li>
								<li><i class="fab fa-cc-jcb"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!--Footer Copyright End-->
		</div>
		<!--Wrapper Content End-->
		
		<!-- Js Files Start --> 
		<script src="js/jquery-1.12.5.min.js"></script>
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/migrate.js"></script>  
		<script src="js/jquery.validate.min.js"></script> 
		<script src="js/tweetie.js"></script> 
		<script src="js/color-switcher.js"></script>
		<script src="js/jquery.cookie.min.js"></script>		
		<script src="js/custom.js"></script> 
		<!-- Js Files End --> 
	</body>
</html>