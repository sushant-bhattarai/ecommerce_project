<!DOCTYPE html>
<html>
<head>
	<title>Blenders and Shakers </title>
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<!-- FONT AWESOME FOR ICONS-->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body {
			font-family:cursive;
		}
	</style>
</head>
<body>
	<header class="container">
		<!-- Logo -->
		<p class="logo"><a href="index.php"> Blenders<span class="ee">&</span>Shakers</p></a>
		<!-- NavBar -->
		<ul class="main-nav">
			<li><a href="menu.php">Menu</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
		<div class="search-div">
			<input type="text" placeholder="Type to search" class="search-input">
			<i class="fa fa-search"></i>
		</div>
		<ul>
		<a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
<!-- <i class="fa fa-heart"></i> -->
</ul>

	</header>
	

	<?php if (isset($_SESSION['checkout_success'])) : ?>
        <h4 style="color: green; font-weight: bold; text-align: center">
            <?php 
            echo $_SESSION['checkout_success']; 
            unset($_SESSION['checkout_success']);
            ?></h4> <br>
    <?php endif ?>

	<section id="banner">
		
		

	</section>

	<section id="speciality" class="container">
		<div class="speciality1">
			<img src="images/s1.png">
			<p class="purple s-text">Free Delivery</p>
			<hr>
			<small>No delivery costs for Kathmadu, Pokhara and Butwal</small>
		</div>
		<div class="speciality2">
			<img src="images/s2.png">
			<p class="purple s-text">Return Policy</p>
			<hr>
			<small>We happily accept returns within a week of delivery</small>
		</div>
		<div class="speciality3">
			<img src="images/s3.png">
			<p class="purple s-text">24/7 Support</p>
			<hr>
			<small>We happily accept returns within a week of delivery</small>
		</div>
	</section>

	<!-- <section id="summer">
		<h2 class="purple text-center">SUMMER COLLECTION</h2>
		<hr style="width:20%">
		<div class="summer-content text-center">
			<div class="p1">
				<img src="images/p1.jpg" alt="" width="100%">
				<h3>Black Top</h3>
				<p>
					<span class="cross">$89.99</span> &nbsp; <span class="new">$85.99</span>
				</p>
				<div class="card-footer">
					<a href="#"><i class="fa fa-cart-plus"></i></a>
					<a href="#"><i class="fa fa-heart"></i></a>
				</div>
			</div>
			<div class="p2">
				<img src="images/p2.jpg" alt="" width="100%">
				<h3>Blue Blazer</h3>
				<p>
					<span class="cross">$89.99</span> &nbsp; <span class="new">$85.99</span>
				</p>
				<div class="card-footer">
					<a href="#"><i class="fa fa-cart-plus"></i></a>
					<a href="#"><i class="fa fa-heart"></i></a>
				</div>
			</div>
			<div class="p3">
				<img src="images/p3.jpg" alt="" width="100%">
				<h3>Cream Sweater</h3>
				<p>
					<span class="cross">$89.99</span> &nbsp; <span class="new">$85.99</span>
				</p>
				<div class="card-footer">
					<a href="#"><i class="fa fa-cart-plus"></i></a>
					<a href="#"><i class="fa fa-heart"></i></a>
				</div>
			</div>
			<div class="p4">
				<img src="images/p4.jpg" alt="" width="100%">
				<h3>Colorful Top</h3>
				<p>
					<span class="cross">$89.99</span> &nbsp; <span class="new">$85.99</span>
				</p>
				<div class="card-footer">
					<a href="#"><i class="fa fa-cart-plus"></i></a>
					<a href="#"><i class="fa fa-heart"></i></a>
				</div>
			</div>
		</div>
	</section> -->

	<section id="partners">
		<h2 class="purple text-center">OUR PARTNERS</h2>
		<hr style="width:20%">
		<div class="text-center">
			<img src="images/logo1.jfif" class="partner">
			<img src="images/logo2.jfif" class="partner">
			
		</div>
	</section>

	<footer>
		<div class="foot container">
			<div class="foot1">
				<h3>Blenders&Shakers</h3>
				<ul class="contact">
					<li><i class="fa fa-building"></i>&nbsp;Shankhamul,Kathmandu</li>
					<li><i class="fa fa-phone"></i>&nbsp; +977 9898979678</li>
					<li><i class="fa fa-envelope"></i>&nbsp; blendersandshakers@gmail.com</li>
				</ul>
				<ul class="socials">
					<li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
				</ul>
			</div>

			<div class="foot2">
				<h3>Quick Links</h3>
				<ul class="ql">
					<li><a href="index.php">Home</a></li>
					<li><a href="menu.php">Menu</a></li>
					<li><a href="contact.php">Contact</a></li>
						
				</ul>
			</div>

			
		</div>
		<div class="text-center">
			<img src="images/visa.png" class="payment">
			<img src="images/american-express.png" class="payment">
			<img src="images/mastercard.png" class="payment">
			<img src="images/paypal.png" class="payment">
		</div>
		<hr width="40%">
		<p class="text-center foot-text">Copyright &copy; 2023, Blenders&Shakers <br> All Rights Reserved</p>
	</footer>
</body>
</html>