<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>THRILLVILLE</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            /* General styles */
            body {
                font-family: 'Jost', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #e3f2fd; /* Light sky blue */
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
            }

            /* Header */
            header {
                background-color: #1976d2; /* Deep blue */
                width: 100%;
                padding: 20px;
                text-align: center;
                position: relative;
            }

            header .name {
                font-size: 2.5em;
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
                font-size: 1.2em;
            }

            header .items a:hover {
                color: #ffeb3b; /* Yellow hover */
            }

            /* Login and Sign-up buttons */
            header .auth-buttons {
                position: absolute;
                top: 20px;
                right: 20px;
            }

            header .auth-buttons a {
                text-decoration: none;
                color: white;
                background-color: #ff9800; /* Orange */
                padding: 10px 20px;
                margin-left: 10px;
                border-radius: 5px;
                font-size: 1em;
                transition: background-color 0.3s;
            }

            header .auth-buttons a:hover {
                background-color: #e65100; /* Darker orange */
            }

            /* Main Content */
            .cont {
                text-align: center;
                margin: 30px 0;
            }

            .cont h1 {
                font-size: 3.5em;
                font-weight: bold;
                color: #0d47a1; /* Darker blue */
            }

            .cont h2 {
                font-size: 2.5em;
                color: #455a64; /* Slate gray */
                margin: 10px 0;
            }

            .cont button {
                background-color: #ff9800; /* Orange */
                color: white;
                border: none;
                padding: 15px 30px;
                font-size: 1.5em;
                border-radius: 10px;
                cursor: pointer;
                margin-top: 20px;
                transition: transform 0.3s, background-color 0.3s;
            }

            .cont button:hover {
                background-color: #e65100; /* Darker orange */
                transform: scale(1.1);
            }

            /* Footer */
            footer {
                margin-top: 40px;
                text-align: center;
                padding: 20px;
                background-color: #1976d2; /* Deep blue */
                color: white;
                width: 100%;
            }

            footer h4 {
                margin: 10px 0;
                font-size: 1.5em;
                font-weight: bold;
            }

            footer ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            footer ul li {
                margin: 5px 0;
            }

            footer ul li a {
                text-decoration: none;
                color: white;
                font-size: 1em;
            }

            footer ul li a:hover {
                color: #ffeb3b; /* Yellow hover */
            }

            footer .social-links {
                margin-top: 20px;
                display: flex;
                justify-content: center;
                gap: 15px;
            }

            footer .social-links a {
                font-size: 1.8em;
                text-decoration: none;
                color: white;
                transition: transform 0.3s, color 0.3s;
            }

            footer .social-links a:hover {
                color: #ffeb3b; /* Yellow */
                transform: scale(1.2);
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
            <div class="auth-buttons">
                <a href="loginpage.php">Login</a>
                <a href="signup.php">Sign Up</a>
            </div>
        </header>
        
        <!-- Main Content -->
        <div class="cont">
            <h1>WORLD'S NO 1</h1>
            <h2>FUN GALA</h2>
            <a href="booking3.php">
                <button>BOOK ME</button>
            </a>
        </div>

        <!-- Footer -->
        <footer>
            <div>
                <h4>company</h4>
                <ul>
                    <li><a href="aboutus.php">about us</a></li>
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
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </footer>
    </body>
</html>
