<!DOCTYPE html>
<html>
<head>
  <title>Clothing Website</title>
  <link href="CSS/styles3.css" rel="stylesheet">
  <script src="JS/slideshow.js"></script>
  </head>
<body>
<div class="wrapper clearfix">
<div class="wrapper">
  <header>
    <div class="logo">
      <img src="images/streetwear_logo2.jpeg" alt="Business Name">
    </div>
    <?php include "navbar.php"; ?>
  </header>
</div>
<main>
<?php
session_start();
//session_unset();
require_once 'setup.php';
//print_r($_SESSION);
//Array ( [loggedin] => 1 [name] => amaanali [id] => 7 [cart] => Array ( [6] => 31 ) )
$accountId=$_SESSION['id']; 
$cartitems=array_keys($_SESSION['cart']);
//print_r($cartitems);
$itemId=$cartitems[0];
//print($itemId);
$InvoiceDate=date("Y/m/d");

$sql ="INSERT INTO `orders` (`id`, `itemId`, `accountId`, `InvoiceDate`) 
VALUES (NULL, '$itemId', '$accountId', '$InvoiceDate')";

if ($conn->query($sql) === TRUE) {
  echo "Your order has been placed succesfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//if (!empty($_SESSION['cart'])) {
    //foreach ($_SESSION['cart'] as $item) {
        //echo "<div class='cart-item'>";
        //echo "<h3>{$item}</h3>";
       // echo "<p>Price: $ {$item['price']}</p>";
        //echo "</div>";
    //}
//} else {
    //echo "<p>Your cart is empty.</p>";
//}

?>
</main>





<div class="footer">
    <ul class="footernavigation">
        <li><a href="PrivacyPolicy.php"><button>Privacy Policy</button></a></li>
        <li><a href="TermsandConditions.php"><button>Terms and Conditions</button></a></li>
        <li><a href="AboutUs.php"><button>About Us</button></a></li>
        <li><a href="ContactUs.php"><button>Contact Us</button></a></li>
    </ul>
</div>
</div>
</div>
</div>
</body>

</html>
