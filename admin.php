<!DOCTYPE html>
<html>
<head>
  <title>Clothing Website</title>
  <link href="CSS/styles3.css" rel="stylesheet">
  <script src="JS/slideshow.js"></script>
  </head>
<body>
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
// Fetch records from the "contacts" table
$sql = "SELECT * FROM contacts";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
     // Display the records in a table
     echo '<table>';
     echo '<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Comment</th><th>Actions</th></tr>';
     while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['fname'] . '</td>';
        echo '<td>' . $row['lname'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['comment'] . '</td>';
        echo '<td><a href="edit.php?id=' . $row['id'] . ' ">Edit</a> | <a href="delete.php?id=' . $row['id'] .'">Delete</a></td>';
                 echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'No records found.';
}
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>

?>
</main>
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