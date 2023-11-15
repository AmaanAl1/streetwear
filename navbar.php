<nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="clothing.php?category=menswear">Mens</a></li>
        <li><a href="clothing.php?category=womenswear">Womens</a></li>
        <li><a href="clothing.php?category=kidswear">Kids</a></li>
        
        
        <?php if(isset($_SESSION['loggedin'])){ ?>
        <li><a href="logout.php">Logout</a></li>
        <?php } else {?>
        <li><a href="login.php">Login</a></li> 
        <?php } ?>

        <li><a href="register.php">Register</a></li>
        <li><a href="cart.php">Cart</a></li>
  
      </ul>
      <div class="search-bar">
        <form action="search.php" method="GET">
          <input type="text" name="query" placeholder="Search...">
          <button type="submit">Search</button>
        </form>
      </div>
</nav>
    

    