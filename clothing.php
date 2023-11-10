<!DOCTYPE html>
<html>
<head>
  <title>Clothing Website</title>
  <link href="CSS/styles3.css" rel="stylesheet">
  <script src="JS/slideshow.js"></script>
  </head>
<body>
<?php
// Start the session
session_start();
?>
<div class="wrapper clearfix">
  <header>
    <div class="logo">
      <img src="images/streetwear_logo2.jpeg" alt="Business Name">
    </div>
    <?php include "navbar.php"; ?>
  </header>

<main>  
  <?php
// Include the setup.php file to establish database connection
require_once 'setup.php';
//print_r($_GET);
$category = $_GET["category"];
// Fetch records from the "items" table
$sql = "SELECT * FROM items where category = '$category'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
     // Display the records in a gallery
    
     while ($row = mysqli_fetch_assoc($result)) {
        //print_r($row);
        $image = $row["image"];
        $name = $row["name"];
        $id = $row["id"];

        ?>
        <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="product.php?id=<?php echo $id;?>">
            <img src="images/<?php echo $image;?>" alt="image">
          </a>
          <div class="desc"><?php echo $name;?></div>
        </div>
      </div>
      <?php
    }
} else {
    echo 'No records found.';
}
?>
 

</div> 
</div>
</main>



</div>
</body>
<div class="footer">
    <ul class="footernavigation">
        <li><a href="PrivacyPolicy.php"><button>Privacy Policy</button></a></li>
        <li><a href="TermsandConditions.php"><button>Terms and Conditions</button></a></li>
        <li><a href="AboutUs.php"><button>About Us</button></a></li>
        <li><a href="ContactUs.php"><button>Contact Us</button></a></li>
    </ul>
</div>

</html>