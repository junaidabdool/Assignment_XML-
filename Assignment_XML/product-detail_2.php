<!DOCTYPE HTML>
<html>
	<head>
	<title> JASKIM Footwear </title>
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
	<script type="text/javascript" src="js_function_XML/functiontosizes.js"></script>
	</head>
	<body onload="loadXMLSize()">
		
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
									<a href="men.php">Men</a>
									<ul class="dropdown">
										<li><a href="product-detail.html">Product Detail</a></li>
										<li><a href="cart.html">Shopping Cart</a></li>
										<li><a href="checkout.php">Checkout</a></li>
										<li><a href="order-complete.html">Order Complete</a></li>
										<li><a href="add-to-wishlist.html">Wishlist</a></li>
									</ul>
								</li>
								<li><a href="women.html">Women</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.php">Contact</a></li>
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
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Product Details</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg product-detail-wrap">
					<div class="col-sm-8">
						<div class="owl-carousel">
							<div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-1.jpg" class="img-fluid" >
										
									</a>
								</div>
							</div>
								 <div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<!-- <img src="images/item-2.jpg" class="img-fluid" > -->
									</a>
								</div> 
							</div>
							<div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<!-- <img src="images/item-3.jpg" class="img-fluid" > -->
									</a>
								</div>
							</div>
							<div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<!-- <img src="images/item-4.jpg" class="img-fluid" > -->
									</a>
								</div>
							</div> -->
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-desc">
							<h3>Women's Boots Shoes Maca</h3>
							<p class="price">
								<?php
								$xml = simplexml_load_file('shoes.xml');
								echo '<span> Rs ';
								echo $xml->Shoe[0]->price;  
								echo '</span>';
								?>
								<span class="rate">
									<i class="icon-star-full"></i>
									<i class="icon-star-full"></i>
									<i class="icon-star-full"></i>
									<i class="icon-star-full"></i>
									<i class="icon-star-half"></i>
									(74 Rating)
								</span>
							</p>
							
							<div class="size-wrap">
								<h4>Size</h4>
								<div class="block-26 mb-2" id="div_size">
								
							</div>
							
				            <div class="block-26 mb-4">
									<h4>Width</h4>
				               <ul>
				                  <li><a href="#">M</a></li>
				                  <li><a href="#">W</a></li>
				               </ul>
				            </div>
							</div>
                     <div class="input-group mb-4">
                     	<span class="input-group-btn">
                        	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                           <i class="icon-minus2"></i>
                        	</button>
                    		</span>
                     	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                     	<span class="input-group-btn ml-1">
                        	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                             <i class="icon-plus2"></i>
                         </button>
                     	</span>
                  	</div>
                  	<div class="row">
	                  	<div class="col-sm-12 text-center">
									<p class="addtocart"><a href="cart.html" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"></i> Add to Cart</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-md-12 pills">
								<div class="bd-example bd-example-tabs">
								  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

								    <li class="nav-item">
								      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Description</a>
								    </li>
								    
								    <li class="nav-item">
								      <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
								    </li>
								  </ul>
								  <!-- Description of product -->
								  <script type="text/javascript">
									onload= loadXMLDescription();
								 </script>

								  <div class="tab-content" id="pills-tabContent">
									
								    <div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab" >
								      
									</div>
									

								    

								    <div class="tab-pane border fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
								      <div class="row">
								   		<div class="col-md-8">
								   			<h3 class="head">23 Reviews</h3>
								   			<div class="review">
										   		<div class="user-img" style="background-image: url(images/person1.jpg)"></div>
										   		<div class="desc">
										   			<h4>
														    <?php
														   $xml = simplexml_load_file('reviews.xml');
														   
														   foreach($xml->Review as $review){
															   if($review->shoe_id=="SH1111"){
																   echo "<span class='text-left'>";
																   echo $review->author;
																   echo "</span>";
															   }elseif ($review->shoe_id != "SH1111") {
																  echo " ";
															   } 
															   
														   } 

														   ?> 
										   				<!-- <span class="text-left">Jacob Webb</span> -->
										   			    <?php 

															$xml = simplexml_load_file('reviews.xml');
															foreach($xml->Review as $review){
																if($review->shoe_id=="SH1111"){
															echo "<span class='text-right'>";

															echo $review->date;

															echo "</span>";
																}
															}

															?>
										   			</h4>
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-half"></i>
										   					<i class="icon-star-empty"></i>
									   					</span>
									   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
										   			</p>
													   <?php
													   $xml = simplexml_load_file('reviews.xml'); 
													   foreach($xml->Review as $review){
														if($review->shoe_id=="SH1111"){
													   echo "<p>";
													   echo $review->review_note;
													   echo "</p>";
														}
													   }

													
													   ?>
										   		</div>
										   	</div>
										   	
								   		<div class="col-md-4">
								   			<div class="rating-wrap">
												   <h3 class="head">Give a Review</h3>
												   
									   			<div class="wrap">
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					(98%)
									   					</span>
									   					<span>20 Reviews</span>
										   			</p>
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-empty"></i>
										   					(85%)
									   					</span>
									   					<span>10 Reviews</span>
										   			</p>
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					(70%)
									   					</span>
									   					<span>5 Reviews</span>
										   			</p>
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					(10%)
									   					</span>
									   					<span>0 Reviews</span>
										   			</p>
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					(0%)
									   					</span>
									   					<span>0 Reviews</span>
										   			</p>
										   		</div>
									   		</div>
								   		</div>
								   	</div>
								    </div>
								  </div>
								</div>
				         </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col footer-col colorlib-widget">
						<h4>About JASKIM Footwear</h4>
						<p>We will provide products and services of superior quality which improves and protects the health of the feet of our customers. </p>
						
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="contact.html">Contact</a></li>
							
								<li><a href="#">Site maps</a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="about.html">About us</a></li
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
							<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
							<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
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
	
	
	<script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
</script>
<!-- <script>
	function loadXMLSize()
{
if (window.XMLHttpRequest)
  {
 xhttp=new XMLHttpRequest();
 }
else // code for IE5 and IE6
 {
 xhttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
 

xhttp.open("GET","shoes.xml",true);
xhttp.send(null);

 xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
       xmlDoc = xhttp.responseXML;
		x=xmlDoc.documentElement;
	

 
		
		table_str= "<li>";
	
     books_div = document.getElementById("div_size");
     //missing code to loop through all books and add values to the table
	 books_node=xmlDoc.childNodes[0];
	 y=xmlDoc.getElementsByTagName("Shoe");
	len = y.length;

         
	 for (i=0; i<len ;i++)
     {
       table_str = "<ul>" + table_str;
       table_str = table_str +"<a href='#'>"+ y[i].getElementsByTagName("Euro_Sizes")[0].firstChild.nodeValue +"</a></li>";
       table_str = table_str +"</ul>";
     }
     table_str = table_str ;
     books_div.innerHTML = table_str;
document.getElementById("div_size").innerHTML=table_str;
    }
};
} 
</script> -->
	
	

 	


	</script>

	</body>
</html>

