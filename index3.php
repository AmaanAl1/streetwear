<!DOCTYPE html>
<html>
<head>
  <title>Clothing Website</title>
  <link href="CSS/styles3.css" rel="stylesheet">
  <script src="JS/slideshow-auto.js"></script>
  </head>
<body>
  <header>
    <div class="logo">
      <img src="images/streetwear_logo2.jpeg" alt="Business Name">
    </div>
    <?php include "navbar.php"; ?>
  </header>
  
 
  <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/black-t.jpg" style="width:100%">
    <div class="text">Black T</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/brown-pants.jpg" style="width:100%">
    <div class="text">Brown pants</div>
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

  <div class="gallery">
    <img src="images/brown-pants.jpg" alt="Image 1">
    <img src="images/brown-pants.jpg" alt="Image 2">
    <img src="images/brown-pants.jpg" alt="Image 3">
    <img src="images/brown-pants.jpg" alt="Image 4">
    <img src="images/brown-pants.jpg" alt="Image 5">
    <img src="images/brown-pants.jpg" alt="Image 6">
    
  </div>
  
  <footer>
    &copy; 2023 Streetwear Essentials. All rights reserved.
  </footer>
</body>
</html>