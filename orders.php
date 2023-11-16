<!DOCTYPE html>
<html>

<head>
  <title>Clothing Website</title>
  <link href="CSS/styles3.css" rel="stylesheet">
  <script src="JS/slideshow.js"></script>
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
    <?php if ($_SESSION['name']== "admin") {
    
    include "adminnavbar.php"; 
    } else {
      header('Location: index.php');
    }
    ?>
  </header>

<main>
<h1>Orders List</h1>
<?php
// Include the setup.php file to establish database connection
require_once 'setup.php';
// Fetch records from the "orders" table
//$sql = "SELECT * FROM orders";
$sql = "SELECT orders.id, accounts.username, items.name, orders.InvoiceDate
FROM orders
INNER JOIN accounts ON orders.accountId=accounts.id
INNER JOIN items ON orders.itemID=items.id";

//INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;
//print $sql;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
     // Display the records in a table
     echo '<table>';
     echo '<tr><th>OrderId</th><th>AccountId</th><th>ItemID</th><th>InvoiceDate</th><th>Actions</th></tr>';
     while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['username'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['InvoiceDate'] . '</td>';
        echo '<td><a href="edit.php?id=' . $row['id'] . ' ">Edit</a> | <a href="delete.php?id=' . $row['id'] .'">Delete</a></td>';
                 echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'No records found.';
}
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