<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'streetwear';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to the database!');
    }
}

function template_header($title) {
    echo <<<EOT
<!DOCTYPE html>
<html>
<head>
  <title>$title</title>
  <link href="CSS/styles3.css" rel="stylesheet">
  <script src="JS/slideshow.js"></script>
</head>
<body>
<div class="wrapper clearfix">
  <header>
    <div class="logo">
      <img src="images/streetwear_logo2.jpeg" alt="Business Name">
    </div>
EOT;

    // Include the navbar.php file here
    include "navbar.php";

    echo <<<EOT
  </header>
  <main>
EOT;
}

// Template footer
function template_footer() {
    $year = date('Y');
    echo <<<EOT
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
EOT;
}
?>
