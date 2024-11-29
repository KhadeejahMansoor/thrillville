<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$db_name = 'wonderland';

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Cannot connect to Database: " . $conn->connect_error);
}


// Fetch the most recent row from the cart_data table
$sql = "SELECT Adult, Child, Adult_Price, Child_Price, SubTotal, Tax, Shipping, Grand_Total FROM cart ORDER BY Ticket_ID DESC LIMIT 1";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the row as an associative array
    $row = $result->fetch_assoc();

    // Assign values to variables
    $adult = $row['Adult'];
    $child = $row['Child'];
    $adultPrice = $row['Adult_Price'];
    $childPrice = $row['Child_Price'];
    $subTotal = $row['SubTotal'];
    $tax = $row['Tax'];
    $shipping = $row['Shipping'];
    $grandTotal = $row['Grand_Total'];

    // Now you can use these variables in your HTML code
} else {
    // Handle the case where the query fails
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart-ThrillVille</title>

    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <link type="text/css" rel="stylesheet" href="css/footer.css" />
    <link type="text/css" rel="stylesheet" href="css/cart.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link type="text/css" rel="stylesheet" href="css/header.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,700;1,200;1,300;1,400&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.
4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqR
Kc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
  </head>

  <body>

<div id="booking" class="section">
  <?php include('header.php'); ?>
  </div>
  <div class="cart">
    <h1 id="shop">Shopping Cart</h1>

    <div class="shopping-cart">

      <!-- Adult Product -->
      <div class="product-row">
        <div class="product">
          <div class="product-image">
            <img src="css/image/7.png">
          </div>
          <div class="product-details">
            <div class="product-title">
              <h2>Adult</h2>
            </div>
          </div>
          <div class="product-price">
            <h3>20</h3>
          </div>
          <form action="updateCart.php" method="post">
            <div class="product-quantity">
              <input type="number" name="adult_quantity" value="<?php echo $adult; ?>" min="1">
            </div>
            <input type="hidden" name="ticket_type" value="adult">
            <button type="submit">Update</button>
          </form>
          
          <div class="product-line-price"><?php echo $adultPrice; ?></div>
        </div>
      </div>

     
      <div class="product-row">
        <div class="product">
          <div class="product-image">
            <img src="css/image/8.png">
          </div>
          <div class="product-details">
            <div class="product-title">
              <h2>Children</h2>
            </div>
          </div>
          <div class="product-price">
            <h3>15</h3>
          </div>
          <form action="updateCart.php" method="post">
            <div class="product-quantity">
              <input type="number" name="child_quantity" value="<?php echo $child; ?>" min="1">
            </div>
            <input type="hidden" name="ticket_type" value="child">
            <button type="submit">Update</button>
          </form>
          
          <div class="product-line-price"><?php echo $childPrice; ?></div>
        </div>
      </div>

      <div class="totals">
        <div class="totals-item">
          <label>Subtotal</label>
          <div class="totals-value" id="cart-subtotal"><?php echo $subTotal; ?></div>
        </div>
        <div class="totals-item">
          <label>Tax (5%)</label>
          <div class="totals-value" id="cart-tax"><?php echo $tax; ?></div>
        </div>
        <div class="totals-item">
          <label>Shipping</label>
          <div class="totals-value" id="cart-shipping">5</div>
        </div>
        <div class="totals-item totals-item-total">
          <label>Grand Total</label>
          <div class="totals-value" id="cart-total"><?php echo $grandTotal; ?></div>
        </div>
      </div>
          

      <a class="ref" style="text-decoration: none;">
        <button type="submit" class="checkout" onclick="window.location.href = 'checkout.php'">Checkout</button>
      </a>

    </div>
  </div>
<?php include('footer.php'); ?>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="app.js"></script>
  
  </body>
  </html>