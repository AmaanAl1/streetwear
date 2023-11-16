<nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="admin.php">Contacts</a></li>
        <li><a href="orders.php">Orders</a></li>
        
        
        
        
        <?php if(isset($_SESSION['loggedin'])){ ?>
        <li><a href="logout.php">Logout</a></li>
        <?php } else {?>
        <li><a href="login.php">Login</a></li> 
        <?php } ?>

        
        
  
      </ul>
      <div class="search-bar">
        <form action="search.php" method="GET">
          <input type="text" name="query" placeholder="Search...">
          <button type="submit">Search</button>
        </form>
      </div>
</nav>