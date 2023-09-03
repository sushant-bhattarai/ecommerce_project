<?php
    session_start();
    // var_dump($_SESSION);
    include ("db.php");
    if(array_key_exists('items',$_SESSION) && !empty($_SESSION['items'])){
        $cart = $_SESSION['items'];
    }
    $sn_count = 1;
    $grand_total = 0;
    
    
?>

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

        /* table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        } */
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


	<section class="container" id="partners">
		<div>
        <?php 
        if(array_key_exists('items',$_SESSION) && !empty($_SESSION['items'])){
        ?>
            <table style="border-collapse: collapse;
                width:74%; margin-left:13%; margin-right:13%;">
            <tr>
                <th>S.N.</th>
                <th>Product</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total Price</th>
                <th>Action</th>
            </tr>
        <?php foreach($cart as $key=>$value){ ?>
            <tr>
                <td><?= $sn_count?></td>
                <td><?= $value['name'] ?></td>
                <td>
                    <img style="border: 1px solid #ddd; border-radius: 4px;
                            padding: 5px; width: 75px;" 
                            src="images/<?=$value['image_name']?>" 
                            alt="<?=$value['image_name']?>">
                </td>
                <td><?= $value['quantity'] ?></td>
                <td>रू <?= $value['price'] ?></td>
                <td>रू <?= $value['price'] *  $value['quantity']?></td>
                <td>
                    <form action="server.php" method="post"><br>
                        <input type="hidden" name="p_id" value="<?= $key ?>">
                        <button type="submit" onclick="return confirm('Are you sure you want to remove product from cart?')" value="Remove from Cart" name="delete_from_cart" class= "btn btn-danger"> Remove
                    </form>
                </td>
                <?php
                    $grand_total +=  $value['price'] *  $value['quantity'];
                ?>
            </tr>
            <?php
            $sn_count++;}
            ?>
        <tr>
            <th colspan=5 style="text-align: right; ">Grand Total</th>
            <td></td>
            <th>रू <?=$grand_total ?></th>
        </tr>
    </table><br>

    <form action="server.php" method="post">
            <input type="hidden" name="grand_total" value="<?= $grand_total ?>">
            <div style="float: right; margin-right:150px">
                <select name="method" id="" required>
                    <option value="">-- Choose Payment method --</option>
                    <option value="cod">Cash on Delivery</option>
                    <option value="online">Online</option>
                </select>
            </div><br><br>
            <br><button type="submit" onclick="return confirm('Are you sure you want to checkout?')" value="Checkout" style="float: right; margin-right:150px" name="checkout" class="btn btn-primary">Checkout
        </form><br>


        <?php }else{ ?>
                <h3 style="text-align: center">Cart Empty! Shop some products by clicking <a href="menu.php">here.</a></h3>

            <?php } ?>
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