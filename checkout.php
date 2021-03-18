<?php
if (isset($_POST['submit']))
{
	$xml = new DomDocument("1.0","UTF-8");
	$xml->load('checkout.xml'); 

	$district = $_POST['district'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$postal_code = $_POST['postalcode'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$payment = $_POST['payment'];

		$rootTag = $xml->getElementsByTagName("root")->item(0);
		$checkoutTag = $xml->createElement("Checkout");
			$districtTag = $xml->createElement("district",$fname);
			$fnameTag = $xml->createElement("firstname",$fname);
			$lnameTag = $xml->createElement("lastname",$lname);
			$emailTag = $xml->createElement("email",$email);
			$phoneTag = $xml->createElement("phone",$phone);
			$postal_codeTag = $xml->createElement("postalcode",$postal_code);
			$address = $xml->createElement("address",$address);
			$payment = $xml->createElement("payment",$payment);

			$checkoutTag->appendChild($districtTag);
			$checkoutTag->appendChild($fnameTag);
			$checkoutTag->appendChild($lnameTag);
			$checkoutTag->appendChild($emailTag);
			$checkoutTag->appendChild($phoneTag);
			$checkoutTag->appendChild($postal_codeTag);
			$checkoutTag->appendChild($address);
			$checkoutTag->appendChild($payment);

			$rootTag->appendChild($checkoutTag);
			$xml->save('checkout.xml');





}

?>

<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index.html">Footwear</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
			               <div class="form-group">
			                  <input type="search" class="form-control search" placeholder="Search">
			                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			               </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li class="has-dropdown active">
									<a href="men.html">Men</a>
									<ul class="dropdown">
										<li><a href="product-detail.html">Product Detail</a></li>
										<li><a href="cart.html">Shopping Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="order-complete.html">Order Complete</a></li>
										<li><a href="add-to-wishlist.html">Wishlist</a></li>
									</ul>
								</li>
								<li><a href="women.html">Women</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Checkout</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-sm-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8">
						<form method="post"  action="checkout.php"class="colorlib-form">
							<h2>Billing Details</h2>
		              	<div class="row">
			               <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="district">Select District </label>
			                     <div class="form-field">
			                     	<i class="icon icon-arrow-down3"></i>
			                        <select  name="district"  class="form-control">
				                      	<option value="#">Select District</option>
				                        <option value="Flacq">Flacq</option>
				                        <option value="Grand Port">Grand Port</option>
				                        <option value="Moka">Moka</option>
				                        <option value="Plaines Wilhems">Plaines Wilhems</option>
										<option value="Port Louis">Port Louis</option>
										<option value="Rivière du Rempart">Rivière du Rempart</option>
										<option value="Savanne">Savanne</option>
			                        </select>
			                     </div>
			                  </div>
			               </div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="fname">First Name</label>
										<input type="text" name="fname" id="fname" class="form-control" placeholder="Your firstname">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="lname">Last Name</label>
										<input type="text" name="lname"id="lname" class="form-control" placeholder="Your lastname">
									</div>
								</div>

								
			               </div>

			               <div class="col-md-12">
									<div class="form-group">
										<label for="fname">Email</label>
			                    	<input type="text" name="email" id="address" class="form-control" placeholder="Enter Your Email">
			                  </div>
			                  
			               </div>
			            
			               
			               </div>
			            
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="lname">Zip/Postal Code</label>
										<input type="text" name="postalcode" id="zippostalcode" class="form-control" placeholder="Zip / Postal">
									</div>
								</div>
							
								<div class="col-md-12">
									<div class="form-group">
										<label for="email"> Address</label>
										<input type="text" name="address" id="email" class="form-control" placeholder="Address">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="Phone">Phone Number</label>
										<input type="text" name="phone" id="zippostalcode" class="form-control" placeholder="">
									</div>
								</div>
								<div class="row">
			               <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="district">Select Paymentt </label>
			                     <div class="form-field">
			                     	
			                        <select  name="payment"  class="form-control">
				                      	
				                        <option value="credit_card">Credit Card</option>
				                        <option value="Intenet Banking">Intenet Banking</option>
				                        
			                        </select>
			                     </div>
			                  </div>
			               </div>
								
								</div>
					   </div>
					   <div class="row">
							<div class="col-md-12 text-center">
							<input type="submit" name="submit" value="Place an Order " class="btn btn-primary">
							</div>
						</div>
		            </form>
					</div>


						   
									
								</div>
							</div>
						</div>
						<!-- <div class="row">
							<div class="col-md-12 text-center">
							<input type="submit" name="submit" value="Place an Order " class="btn btn-primary">
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col footer-col colorlib-widget">
						<h4>About Footwear</h4>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Contact</a></li>
								<li><a href="#">Returns/Exchange</a></li>
								<li><a href="#">Gift Voucher</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Special</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Site maps</a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Order Tracking</a></li>
							</ul>
						</p>
					</div>

					<div class="col footer-col">
						<h4>News</h4>
						<ul class="colorlib-footer-links">
							<li><a href="blog.html">Blog</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Exhibitions</a></li>
						</ul>
					</div>

					<div class="col footer-col">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="#">yoursite.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p>
							
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
   <!-- popper -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>