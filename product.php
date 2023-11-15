<!DOCTYPE html>
<html>
<head>
  <title>Clothing Website</title>
  <link href="CSS/styles3.css" rel="stylesheet">
  <script src="JS/slideshow.js"></script>
  <?php
  session_start();
  ?>
  <style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
  </style>
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
  <div class="card">
  <?php
// Include the setup.php file to establish database connection
require_once 'setup.php';
//print_r($_GET);
if(isset($_GET['id'])) {
  $id = $_GET['id'];
}
// Fetch records from the "items" table
$sql = "SELECT * FROM items where id = '$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
     // Display the records in a gallery

     $row = mysqli_fetch_assoc($result);
        //print_r($row);
        $image = $row["image"];
        $name = $row["name"];
        $id = $row["id"];
        $price = $row["price"];
        $description = $row["description"];

        ?>
  <form method="post" action="cart.php">
 <input type="hidden" id="itemId" name="itemId" value="<?php echo$id ?>">
 <input type="hidden" id="quantity" name="quantity" value="1">
  <img src="images/<?php print $image;?>" alt="Denim Jeans" style="width:100%">
  <h1><?php print $name;?></h1>
  <p class="price">$<?php print $price;?></p>
  <p><?php print $description;?></p>
  
  <p><button>Add to Cart</button></p>
</form>
<?php
} else {
    echo 'No records found.';
}
?>
</div>
  </main>
 
 


<div class="footer">
    <ul class="footernavigation">
        <li><a href="PrivacyPolicy.php"><button>Privacy Policy</button></a></li>
        <li><a href="TermsandConditions.php"><button>Terms and Conditions</button></a></li>
        <li><a href="AboutUs.php"><button>About Us</button></a></li>
        <li><a href="ContactUs.php"><button>Contact Us</button></a></li>
    </ul>
</div>
</body>
</html>