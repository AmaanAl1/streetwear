    <!DOCTYPE html>
    <html lang="en">
    <head>
    <link rel="stylesheet" href="Styling.css">
    <title>Index</title>




    <div class="header">
        <img src="images/streetwear_logo2.jpeg"
            alt="logo" class="Logo">
        <input type="text" placeholder="Search...">
    </div>


    <div class="navbar">
        <a href = "">Menswear</a>
        <a href = "">Womenswear</a>
        <a href = "">Kids</a>
        <div class="navbar-right">
        <a href = "" class="right">About us</a>
        <a href = "" class="right">Sign up/Sign in</a>
        </div>
    </div>
    </head>
    <body> 
    <div class="slideshow-container">
        <div class ="myslides">
            <div class="numbertext">1/3</div>
            <img src="images/brown-pants.jpg" style="width:10%">
            <div class="text">Brown Pants</div>
        </div>
        </div>
    <div class="slideshow-container">
        <div class ="myslides">
            <div class="numbertext">2/3</div>
            <img src="images/pink-hoodie.jpg" style="width:10%">
            <div class="text">Pink Hoodie</div>
        </div>
        </div>  
        <div class="slideshow-container">
            <div class ="myslides">
                <div class="numbertext">3/3</div>
                <img src="images/black-t.jpg" style="width:10%">
                <div class="text">Black Tee</div>
            </div>
            </div>
    <div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    </body>
    </html>