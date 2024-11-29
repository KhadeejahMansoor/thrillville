<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$db_name = 'wonderland';

// Create a database connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check the database connection
if ($conn->connect_error) {
    die("Cannot connect to Database: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

$sql = "SELECT Ticket_ID, Grand_Total FROM cart ORDER BY Ticket_ID DESC LIMIT 1";

// Execute the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the row as an associative array
    $row = $result->fetch_assoc();

    // Assign values to variables
    $tid = $row['Ticket_ID'];
    $gt = $row['Grand_Total'];
    
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300;800&family=Prompt&family=Roboto:wght@500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
    <style>
      main{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
      .btn-1,
.btn-1 *,
.btn-1 :after,
.btn-1 :before,
.btn-1:after,
.btn-1:before {
  border: 0 solid;
  box-sizing: border-box;
}
.btn-1 {
  -webkit-tap-highlight-color: transparent;
  -webkit-appearance: button;
  background-color: #000;
  background-image: none;
  color: #fff;
  cursor: pointer;
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
    Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
    Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
  font-size: 100%;
  font-weight: 900;
  line-height: 1.5;
  margin: 0;
  -webkit-mask-image: -webkit-radial-gradient(#000, #fff);
  padding: 0;
  text-transform: uppercase;
}
.btn-1:disabled {
  cursor: default;
}
.btn-1:-moz-focusring {
  outline: auto;
}
.btn-1 svg {

  display: block;
  vertical-align: middle;
}
.btn-1 [hidden] {
  display: none;
}
.btn-1 {
  border-radius: 99rem;
  border-width: 2px;
  padding: 0.8rem 3rem;
}
.btn-1:hover {
  color: #999;
}

      footer{
        margin-top: 330px;
      }
      .whole{
        width: 100%;
        height: 100vh;
        
      }
      body {
        font-family: "Poppins", sans-serif;
      }
      /* nav bar */
      svg {
        height: 20px;
      }
      h1 {
        font-size: 14px;
        font-weight: 400;
        margin-top: 80px;
      }
      a {
        font-size: 14px;
        font-weight: 400;
        text-decoration: none;
        color: black;
      }
      .nav {
        margin-top: 20px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);

        padding: 0 20px;
      }
      .guest {
        display: flex;
        align-items: center;
      }
      .logo {
        justify-self: center;
      }
      .logo > img {
        height: 42px;
      }
      .nav-right {
        width: 500px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .sign {
        display: flex;
        align-items: center;
        gap: 15px;
      }
      .wishList {
        display: flex;
        align-items: center;
        gap: 15px;
      }
      .cart {
        display: flex;
        align-items: center;
        gap: 15px;
      }
      svg {
        fill: #0795e6;
      }
      .container1 {
        width: 50%;
        margin: auto;
        text-align: center;
        margin-top: 100px;
      }
      .container1 h1 {
        font-size: 30px;
        font-weight: bold;
        color: #21648b;
      }
      .container1 p {
        color: solid black;
        margin-top: 20px;
      }
      .container2  {
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
    
    <div class="whole">
    <main>
      <div class="container1">
        <h1>THANK YOU FOR YOUR PURCHASE</h1>
        <p>Your Ticket number is <b><?php echo $tid; ?></b> And Your Total is <b>$</b> <b><?php echo $gt; ?> </b> </p>
        <p>
          we will email you an order confirmation with details and tracking info
        </p>
       
      </div>
      <div class="container2">
        <button class="btn-1">Continue Shopping</button>     
      </div>
    </main>
    <?php include('footer.php'); ?>
</div>
  </body>
</html>