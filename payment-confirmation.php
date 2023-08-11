<?php

	// Prevent direct access to file
	if(!isset($_SERVER['HTTP_REFERER'])){
		die('<h1>Direct File Access Restricted!</h1>');
	}
	// Include utility functions
	require_once('paypal/functions.php')
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
	    			<h2>Payment</h2>
	    		</div>
	    	</div>
			<!--Inner Banner Section End-->
			
			<!--Breadcrumb Section Start-->
	    	<div class="tj-breadcrumb">
				<div class="container">
					<ul class="breadcrumb-list">
						<li><a href="home-1.html">Home</a></li>
						<li><a href="booking-form.html">Booking Form</a></li>
						<li><a href="confirm-booking.html">Confirm Booking</a></li>
						<li class="active">Payment</li>
					</ul>
				</div>
	    	</div>
			<!--Breadcrumb Section End-->	
			
			<!--Booking Form Section Start-->	
			<section class="tj-payment">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="invoice-content">
								<div class="row">
									<div class="col-md-12 col-sm-12">
									<?php
									
									// Declare variables
									$booking_info = array();
									$rider_name = '';
									$trip_info = '';
									$booking_id = '';
									$transaction_id = '';
									$payment_status = '';
									$ride_amount = '';
									$ride_amount_curr = '';
									$payment_date = '';
									$payer_email = '';
									$trip_note = '';
									$browser_info = '';
									$trip_duration = '';
									$ride_car = '';

									
									// Change to www.paypal.com to switch to live mode
									$pp_hostname = "www.sandbox.paypal.com"; 
									// Read the post from PayPal system and add 'cmd'
									$req = 'cmd=_notify-synch';
									// Get transaction detail returned by Paypal
									$tx_token = $_GET['tx'];
									
									$auth_token = AUTH_TOKEN;
									$req .= "&tx=$tx_token&at=$auth_token";
									// Setup CURL request for transaction verification
									$ch = curl_init();
									curl_setopt($ch, CURLOPT_URL, "https://$pp_hostname/cgi-bin/webscr");
									curl_setopt($ch, CURLOPT_POST, 1);
									curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
									curl_setopt($ch, CURLOPT_TIMEOUT, 180);
									curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
									curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
									curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
									curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: $pp_hostname"));
									$transaction_result = curl_exec($ch);
									$error = curl_error($ch); // Store errors
									curl_close($ch);
									if(!$transaction_result){
										echo ("<h4 class='invoice-error'>Server Response".$error.". Please try again or contact website administrator!</h4>");
									}else{
										// Parse the data
										$lines = explode("\n",trim($transaction_result));
										if (strcmp ($lines[0], "SUCCESS") == 0) {
											for ($i = 1; $i < count($lines); $i++) {
												$temp = explode("=", $lines[$i],2);
												$booking_info[urldecode($temp[0])] = urldecode($temp[1]);
											}
											// Fetch booking transaction info
											$firstname = $booking_info['first_name'];
											$lastname = $booking_info['last_name'];
											$trip_info = $booking_info['item_name'];
											$trip_note = $booking_info['custom'];
											$booking_id = $booking_info['item_number'];
											$transaction_id = $booking_info['txn_id'];
											$ride_amount = $booking_info['payment_gross'];
											$payment_status = $booking_info['payment_status'];
											$payment_date = $booking_info['payment_date'];
											$payer_email = $booking_info['payer_email'];
											$ride_amount_curr = $booking_info['mc_currency'];
											$rider_name = $booking_info['option_selection1'];
											$rider_email = $booking_info['option_selection2'];
											$rider_phone = $booking_info['option_selection3'];
											$trip_duration = $booking_info['option_selection4'];
											$ride_car = $booking_info['option_selection5'];
											
										}
                         
								?>
									<!--Start Invoice Content-->
									<div class="invoice-outer">
										<?php if( !empty($booking_id) ){ ?>
											<div class="invoice-title">
												<h2>Invoice</h2>
												<h3>Booking # <?php echo $booking_id; ?></h3>
											</div>
										<?php } ?>
											<hr>
											<!--Start Payment Info-->
											<div class="payment-info">
												<div class="row">
													<div class="col-sm-6 col-md-6">
														<div class="invoice-info">
														<?php if( !empty($payer_email) ){?>
															<span>Payer Email</span>
															<strong><?php echo $payer_email; ?></strong>
														<?php } if( !empty($transaction_id) ){ ?>
															<span>Transaction ID</span>
															<strong><?php echo $transaction_id; ?></strong>
														<?php } if( !empty($ride_amount) ){ ?>
															<span>Amount Paid</span>
															<strong><?php echo $ride_amount.' '.$ride_amount_curr; ?></strong>
														<?php } if( !empty($payment_status) ){ ?>
															<span>Payment Status</span>
															<strong><?php echo $payment_status; ?></strong>
														<?php } ?>
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="user-invoice-info">
														<?php if( !empty($payment_date) ){?>
															<span>Payment Date</span>
															<strong><?php echo $payment_date; ?></strong>
														<?php }  if( !empty($rider_name) ){ ?>
															<span>Person Name</span>
															<strong><?php echo $rider_name; ?></strong>
														<?php }  if( !empty($rider_email) ){ ?>
															<span>Email Address</span>
															<strong><?php echo $rider_email; ?></strong>
														<?php }  if( !empty($rider_phone) ){ ?>
															<span>Phone Number</span>
															<strong><?php echo $rider_phone; ?></strong>
														<?php }  if( !empty($rider_phone) ){  ?>
															<span>Selected Ride Car</span>
															<strong><?php echo $ride_car; ?></strong>
														<?php } ?>
														</div>	
													</div>
												</div>
											</div>
											<!--End Payment Info-->
											<!--Start Invoice Line Items-->
											<div class="line-items">
												<div class="invoice-header">
													<div class="row">
														<div class="col-md-5 col-sm-5">
															<h5>Trip Info</h5>
														</div>
														<div class="col-md-4 col-sm-4">
															<h5>Trip Estimation</h5>
														</div>
														<div class="col-md-3 col-sm-3">
															<h5>Total Amount</h5>
														</div>
													</div>
												</div>
												<div class="items">
													<div class="invoice-item">
														<div class="col-md-5 col-sm-5">
															<div class="ride-info">
																<span><?php echo $trip_info; ?></span>
															</div>
														</div>
														<div class="col-md-4 col-sm-4">
															<div class="ride-info">
																<span><?php echo $trip_duration; ?></span>
															</div>
														</div>
														<div class="col-md-3 col-sm-3">
															<div class="ride-info">
																<span><?php echo $ride_amount.' '.$ride_amount_curr; ?> </span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--End Invoice Line Items-->
										</div>
										<!--End Invoice Content-->
										<?php 

											// Set Email Headers
											if (FROM_EMAIL !== '') {
												$headers .= 'From: '.FROM_EMAIL."\r\n";
											}
											$headers .= 'Reply-To: '.$rider_email."\r\n";
											$headers .= "CC: ".$rider_email.""."\r\n";
											$headers .= 'Content-Type: text/plain; charset=UTF-8'."\r\n";
											// Get user browser info
											$browser_info = getBrowser();

											/* Formatting Email Message */
											$title = 'New Ride Payment Booking Confirmation from '.$rider_name;
											$message = 
											'You have received a new ride booking from your website. Check details below:'."\n\n"
											.'Rider IP Address: '.getIpInfo()."\n"
											.'Rider Browser: '.$browser_info['name']."\n"
											.'Rider Browser User Agent: '.$browser_info['userAgent']."\n"
											.'Rider Name: '.$rider_name."\n"
											.'Rider Email: '.$rider_email."\n"
											.'Rider Phone Number: '.$rider_phone."\n"
											.'Rider Selected Car: '.$ride_car."\n"
											.'******Booking Detail******'."\n"
											."Booking Reference ID: ".$booking_id."\n"
											."Booking Info: ".$trip_note."\n"
											."Trip Estimation: ".$trip_duration."\n"
											.'******Payment Detail******'."\n"
											.'Transaction ID: '.$transaction_id."\n"
											.'Amount Paid: '.$ride_amount.' '.$ride_amount_curr."\n"
											.'Payer Email: '.$payer_email."\n"
											.'Payment Date: '.$payment_date."\n"
											.'Payment Status: '.$payment_status."\n";

											// Send Mail
											$sendEmail = mail(TO_EMAIL, $title, $message, $headers);

											// Unset Cookie Values
											unset($_COOKIE['book_ref']);
											unset($_COOKIE['start_loc']);
											unset($_COOKIE['end_loc']);
											unset($_COOKIE['pickup_date']);
											unset($_COOKIE['pickup_time']);
											unset($_COOKIE['dropoff_date']);
											unset($_COOKIE['dropoff_time']);
											unset($_COOKIE['service_type']);
											unset($_COOKIE['trip_time']);
											unset($_COOKIE['trip_cost']);
											unset($_COOKIE['selected_car']);

										} /* end of success condition */
										?>
										<!--Start Invoice Footer-->
										<div class="invoice-footer">
										<?php if(!empty($trip_note)){ ?>
											<strong class="ride-note">Note: <?php echo rawurldecode($trip_note);?></strong>
										<?php } if($sendEmail){ ?>
										<div class="booking-msg">
											<strong class="email-msg">Booking confirmed email sent successfully :)</strong>
										</div>
										<?php
											}
										?>
											<a href="home-1.html"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back to Home</a>
										</div>
										<!--End Invoice Footer-->
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
		<script src="js/tweetie.js"></script> 
		<script src="js/color-switcher.js"></script>
		<script src="js/custom.js"></script> 
		<!-- Js Files End --> 
	</body>
</html>