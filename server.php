<?php
session_start();

// initializing variables
$from_products = 0;
$username = "";
$password = "";
$errors = array(); 

// connect to the database
include ("db.php");

//DELETE PRODUCT
// if (isset($_POST['delete_product'])){
//   $query = "DELETE FROM product WHERE id=" . $_POST["product_id"];
//   // echo $query; die();
//   if (mysqli_query($conn, $query)) {
//     $image_name = $_POST["image_name"];
//     // echo $image_name; die();
//     $dir = "images/products";
//     unlink($dir.'/'.$image_name);
//     $_SESSION['delete_product'] = "Product deleted successfully!";
//     header('location: adminproducts.php');
//   }else {
//     $_SESSION['delete_product_fail'] = "Error: Product cannot be deleted!";
//     header('location: adminproducts.php');
//   }
// }

//ADD PRODUCT TO CART
if (isset($_POST['add_to_cart'])){
  $p_id = mysqli_real_escape_string($conn, $_POST['p_id']);
  $p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
  $p_price = mysqli_real_escape_string($conn, $_POST['p_price']);
  $p_quantity = mysqli_real_escape_string($conn, $_POST['item_quantity']);
  $p_image = mysqli_real_escape_string($conn, $_POST['p_image']);

  $_SESSION['items'][] = array('quantity' => $p_quantity, 'price' => $p_price, 'name' => $p_name, 'image_name' => $p_image);
  $_SESSION['success_cart'] = "Product added to cart successfully!";
  $_SESSION['success_cart_ok'] = 1;

  var_dump($_SESSION);
    
  header('location: menu.php');

}


//DELETE PRODUCT FROM CART
if(isset($_POST['delete_from_cart'])){
  $key = $_POST['p_id'];
  unset($_SESSION['items'][$key]);
  // $_SESSION['success_cart_ok'] = 0;
  header('location: cart.php');
}

//CART CHECKOUT
if(isset($_POST['checkout'])){
  $_SESSION['bill_amt'] = $_POST['grand_total'];
  if($_POST['method'] == "online"){
    header('location: card.php');
  }

  if($_POST['method'] == "cod"){
    header('location: card_cod.php');
  }
}

//PROCESS PAYMENT
if(isset($_POST['process_payment'])){
  // var_dump( $_POST['purchases']);
  $cust_name = mysqli_real_escape_string($conn, $_POST['cust_name']);
  $total_bill = mysqli_real_escape_string($conn, $_POST['total_bill']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $bank_name = mysqli_real_escape_string($conn, $_POST['bank_name']);
  $card_cvc = mysqli_real_escape_string($conn, $_POST['card_cvc']);
  $purchases = mysqli_real_escape_string($conn, $_POST['purchases']);
  $cardNumber = mysqli_real_escape_string($conn, $_POST['cardNumber']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);


  $query = "INSERT INTO orders (cust_name, purchases, total_bill, email, phone, card_cvc, bank_name, card_number, address) 
                VALUES('$cust_name', '$purchases','$total_bill', '$email', '$phone','$card_cvc', '$bank_name', '$cardNumber', '$address')";
  mysqli_query($conn, $query);
    
  $_SESSION['checkout_success'] = "Checkout successfull! Your orders are on the way.";
  unset($_SESSION['items']);
  unset($_SESSION['bill_amt']);
  unset($_SESSION['success_cart_ok']);
  header('location: menu.php');

}

if(isset($_POST['process_payment_cod'])){
    $cust_name = mysqli_real_escape_string($conn, $_POST['cust_name']);
    $total_bill = mysqli_real_escape_string($conn, $_POST['total_bill']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $purchases = mysqli_real_escape_string($conn, $_POST['purchases']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);


    $query = "INSERT INTO orders (cust_name, purchases, total_bill, email, phone, address) 
                    VALUES('$cust_name', '$purchases','$total_bill', '$email', '$phone', '$address')";
    mysqli_query($conn, $query);
        
    $_SESSION['checkout_success'] = "Checkout successfull! Your orders are on the way.";
    unset($_SESSION['items']);
    unset($_SESSION['bill_amt']);
    unset($_SESSION['success_cart_ok']);
    header('location: menu.php');  
}
?>
  