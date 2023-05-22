<!DOCTYPE html>
<html lang="en">
<head>
<title>Streetwear-Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style2.css" rel="stylesheet" type="text/css">
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>





<body>
<div class="wrapper">
<div class="header">
  <h1>Streetwear</h1>
  <p>Clothing brand</p>
</div>

<?php include "navbar.php"; ?>
    
<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>More Text</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
  </div>
  <div class="main">
  <div class="gallery">
  <a target="_blank" href="images/black-t.jpg">
    <img src="images/black-t.jpg" alt="black t" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
      <div class="gallery">
  <a target="_blank" href="images/black-t.jpg">
    <img src="images/black-t.jpg" alt="black t" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
      <div class="gallery">
  <a target="_blank" href="images/black-t.jpg">
    <img src="images/black-t.jpg" alt="black t" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
      <div class="gallery">
  <a target="_blank" href="images/black-t.jpg">
    <img src="images/black-t.jpg" alt="black t" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>
    </div>
</body>
</html>