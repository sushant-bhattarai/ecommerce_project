<?php
session_start();
  include("db.php");
  $query = "SELECT * FROM menu";
  $result = $conn->query($query);
  $cart = $_SESSION;
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Milkshake Menu</title>
<!-- GOOGLE FONTS -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> -->
<!-- FONT AWESOME FOR ICONS-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
  body {
    font-family:cursive;
  }
  .menu-item {
    display: flex;
    align-items: center;
    padding: 10px;
    border-bottom: 1px solid #ccc;
  }
  .item-image {
    flex: 0 0 80px;
    margin-right: 10px;
  }
  .item-details {
    flex: 1;
  }
  .item-title {
    font-size: 18px;
    margin: 0;
  }
  .item-description {
    font-size: 14px;
    margin-top: 5px;
  }
  .item-price {
    font-size: 16px;
    margin: 5px 0;
  }
</style>
</head>
<body>
    <header class="container">
		<!-- Logo -->
		<p class="logo"><a href="index.php">    Blenders<span class="ee">&</span>Shakers</p></a>
		<!-- NavBar -->
		<ul class="main-nav">
			<li><a href="menu.php">Menu</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
		<!-- Search -->
		<div class="search-div">
			<input type="text" placeholder="Type to search" class="search-input">
			<i class="fa fa-search"></i>
		</div>
        
            <!-- Add the cart icon -->
    <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>

<!-- Add the heart icon -->
<!-- <i class="fa fa-heart"></i> -->

       
	</header>

  <?php if (isset($_SESSION['success_cart'])) : ?>
        <h4 style="color: green; font-weight: bold; text-align: center">
            <?php 
            echo $_SESSION['success_cart']; 
            unset($_SESSION['success_cart']);
            ?></h4> <br>
    <?php endif ?>

    <?php if (isset($_SESSION['checkout_success'])) : ?>
        <h4 style="color: green; font-weight: bold; text-align: center">
            <?php 
            echo $_SESSION['checkout_success']; 
            unset($_SESSION['checkout_success']);
            ?></h4> <br>
    <?php endif ?>

<!-- Here , the menu is viewed using the database -->

<div class="container">
<?php
  while ($row = $result->fetch_assoc()) { ?>
  <div class="menu-item" style="background-color: #FFF4E3;">
    <img src="images/<?php echo $row['image'] ?>" alt="Milkshake" class="item-image">
    <div class="item-details">
      <h3 class="item-title"><?php echo $row['name'] ?></h3>
      <p class="item-description"><?php echo $row['description'] ?></p>
      <p class="item-price">Price: रू <?php echo $row['price'] ?></p>
      
    </div>
    <div class="card-footer">
      <form method='post' action='server.php'>
        <input type='hidden' name='p_id' value='<?=$row['id']?>'>
        <input type='hidden' name='p_name' value='<?=$row['name']?>'>
        <input type='hidden' name='p_price' value='<?=$row['price']?>'>
        <input type="hidden" name="p_image" value="<?=$row['image']?>">
        <input type='number' name='item_quantity' value="1" min="1" max="5">
        <button type="submit" name="add_to_cart"><i class="fa fa-cart-plus"></i></button>
        <!-- <a href="menu.php"><i class="fa fa-heart"></i></a> -->
      </form>
    </div>
  </div>
<?php } ?>

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
	</footer>
</body>
</html>
