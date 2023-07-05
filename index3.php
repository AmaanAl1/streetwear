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
  
 
  <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/shirt-deal2.jpg" style="width:100%">
    <div class="text">Promotion 1</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/pants-promo-edit.jpg" style="width:100%">
    <div class="text">Promotion 2</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/shirt-deal2.jpg" style="width:100%">
    <div class="text">Promotion 3</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<h2>Popular Items</h2>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/pink-hoodie.jpg">
      <img src="images/pink-hoodie.jpg" alt="image 1">
    </a>
    <div class="desc">Mens Pink Hoodie (XS,S,M,L,XL,XXL)</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/brown-pants-womens.jpeg">
      <img src="images/brown-pants-womens.jpeg" alt="image 2">
    </a>
    <div class="desc">Womens Brown Cargo Pants (XS,S,M,L,XL,XXL) </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/blue-jeans.jpg">
      <img src="images/blue-jeans.jpg" alt="image 3">
    </a>
    <div class="desc">Mens Blue Jeans (XS,S,M,L,XL,XXL)</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/white-t-womens.jpg">
      <img src="images/white-t-womens.jpg" alt="image 4">
    </a>
    <div class="desc">Womens White T-Shirt (XS,S,M,L,XL,XXL)</div>
  </div>
</div>

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