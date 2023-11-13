<!DOCTYPE html>
<html>
<head>
  <title>Shopping Cart</title>
  <!-- Add necessary CSS and scripts -->
</head>
<body>
<div class="wrapper clearfix">
  <header>
    <!-- Header Content -->
  </header>
  <main>
    <h1>Shopping Cart</h1>
    <div class="cart">
        <?php
        session_start();

        if (!empty($_POST)) {
            $cart_item = array(
                'id' => $_POST['item_id'],
                'name' => $_POST['item_name'],
                'price' => $_POST['item_price']
            );

            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }

            array_push($_SESSION['cart'], $cart_item);
        }

        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                echo "<div class='cart-item'>";
                echo "<h3>{$item['name']}</h3>";
                echo "<p>Price: $ {$item['price']}</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Your cart is empty.</p>";
        }
        ?>
    </div>
  </main>
  <div class="footer">
    <!-- Footer Content -->
  </div>
</body>
</html>

