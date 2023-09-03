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
  

  .contact-container {
    background-color: white;
    border-radius: 30px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    padding: 40px;
    width: auto;
  }

  .contact-icon {
    font-size: 24px;
    margin-right: 10px;
  }

  .contact-input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .contact-textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    resize: vertical;
  }

  .contact-button {
    background-color: #53b8c4; /* Pastel button color */
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
  }

  .contact-button:hover {
    background-color: #39909e; /* Darker color on hover */
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
    <div class="container">
        <div class="contact-container">
            <h2>Contact Us</h2>
            <form id="contact-form" action="#">
                <div>
                <span class="contact-icon">&#x1F464;</span>
                <input class="contact-input" id="name" type="text" placeholder="Your Name" required>
                </div>
                <div>
                <span class="contact-icon">&#x2709;</span>
                <input class="contact-input" id="email" type="email" placeholder="Your Email" required>
                </div>
                <div>
                <span class="contact-icon">&#x260E;</span>
                <input class="contact-input" id="tel" type="tel" placeholder="Your Phone">
                </div>
                <div>
                <span class="contact-icon">&#x270D;</span>
                <textarea class="contact-textarea" id="msg" placeholder="Your Message" required></textarea>
                </div>
                <button class="contact-button" type="submit">Submit</button>
            </form>
        </div>
    </div>
	

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
	</footer><br>
</body>
</html>








