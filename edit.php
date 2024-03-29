<!DOCTYPE html>
<html>
<head>
  <title>Clothing Website Edit</title>
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

// Check if the ID parameter is provided in the URL
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  // Fetch the record from the "contacts" table with the given ID
  $query = "SELECT * FROM contacts WHERE id = ?";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    // Display the edit form with the existing record's data
    ?>

<h2>Edit Contact</h2>
<form method="post" action="update.php">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<label for="fname">First Name:</label>
<input type="text" id="fname" name="fname" value="<?php echo $row['fname']; ?>"><br><br>
<label for="lname">Last Name:</label>
<input type="text" id="lname" name="lname" value="<?php echo $row['lname']; ?>"><br><br>
<label for="email">Email:</label>
<input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
<label for="comment">Comment:</label>
<textarea id="comment" name="comment"><?php echo $row['comment']; ?></textarea><br><br>
<input type="submit" value="Update">
</form>
</body>
</html>
<?php
}else {
echo 'No record found with the provided ID.';
}
 // Close the statement
 mysqli_stmt_close($stmt);
} else {
    echo 'ID parameter not provided.';
}// Close the database connection
mysqli_close($conn);

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
</body>
</html>