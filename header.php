<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wonderland</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #add8e6; /* Light blue background */
      margin: 0;
      padding: 0;
      color: #000;
      text-align: center;
    }

    header {
      background-color: #2185d0;
      padding: 10px 0;
    }

    header .name {
      font-size: 2em;
      font-weight: bold;
      color: white;
      text-decoration: none;
    }

    header .items {
      margin-top: 10px;
    }

    header .items a {
      margin: 0 15px;
      text-decoration: none;
      color: white;
      font-size: 1em;
    }

    .cont {
      margin: 30px auto;
      width: 80%;
    }

    .cont h1 {
      font-size: 3.5em;
      font-weight: bold;
      margin: 0;
    }

    .cont h2 {
      font-size: 2em;
      color: #555;
      margin: 10px 0;
    }

    .btn-2 {
      background-color: #2185d0;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 1.5em;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 20px;
    }

    .btn-2:hover {
      background-color: #165a91;
    }

    .footer {
      margin-top: 40px;
      text-align: center;
      font-size: 1em;
    }

    .footer h4 {
      margin-bottom: 10px;
      font-weight: bold;
    }

    .footer ul {
      list-style: none;
      padding: 0;
    }

    .footer ul li {
      margin: 5px 0;
    }

    .footer ul li a {
      text-decoration: none;
      color: #000;
    }

    .footer ul li a:hover {
      color: #555;
    }

    .social-links {
      margin-top: 20px;
    }

    .social-links a {
      margin: 0 10px;
      font-size: 1.2em;
      text-decoration: none;
      color: #000;
    }

    .social-links a:hover {
      color: #555;
    }

    .red-dot {
      display: inline-block;
      width: 6px;
      height: 6px;
      background-color: red;
      border-radius: 50%;
      margin-left: 5px;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <a href="land.php" class="name">WONDERLAND</a>
    <div class="items">
      <a href="index.php">Home</a>
      <a href="aboutus.php">About</a>
      <a href="booking3.php">Booking</a>
      <a href="rides.php">Attractions</a>
      <a href="shop.php">Shop</a>
    </div>
  </header>

  <!-- Main Content -->
  <div class="cont">
    <h1>WORLD'S NO 1</h1>
    <h2>FUN GALA</h2>
    <a href="booking3.php"><button class="btn-2">BOOK ME</button></a>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div>
      <h4>company</h4>
      <ul>
        <li><a href="aboutus.php">about us</a><span class="red-dot"></span></li>
        <li><a href="#">privacy policy</a></li>
      </ul>
    </div>
    <div>
      <h4>get help</h4>
      <ul>
        <li><a href="contactus.php">FAQ</a></li>
        <li><a href="checkoutpage.php">payment options</a></li>
      </ul>
    </div>
    <div>
      <h4><a href="shop.php">online merchandise</a></h4>
    </div>
    <div class="social-links">
      <a href="#">Facebook</a>
      <a href="#">Twitter</a>
      <a href="#">Instagram</a>
      <a href="#">LinkedIn</a>
    </div>
  </footer>
</body>
</html>
