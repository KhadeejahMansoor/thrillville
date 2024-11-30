<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>THRILLVILLE</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <body style="
        font-family: 'Jost', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #add8e6; /* Light blue background */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    ">
        <!-- Header -->
        <?php include('header.php'); ?>
        
        <!-- Main Content -->
        <div class="cont" style="
            text-align: center;
            margin: 20px 0;
        ">
            <h1 style="
                font-size: 3em;
                font-weight: bold;
                color: #000;
            ">WORLD'S NO 1</h1>
            <h2 style="
                font-size: 2em;
                color: #555;
                margin: 10px 0;
            ">FUN GALA</h2>
            <a href="booking3.php">
                <button style="
                    background-color: #2185d0;
                    color: white;
                    border: none;
                    padding: 10px 20px;
                    font-size: 1.2em;
                    border-radius: 5px;
                    cursor: pointer;
                    margin-top: 20px;
                ">BOOK ME</button>
            </a>
        </div>

        <!-- Footer -->
        <footer style="
            margin-top: 40px;
            text-align: center;
        ">
            <div style="
                margin-bottom: 20px;
            ">
                <h4 style="margin: 10px 0;">company</h4>
                <ul style="
                    list-style: none;
                    padding: 0;
                    margin: 0;
                ">
                    <li style="margin: 5px 0;"><a href="aboutus.php" style="text-decoration: none; color: #000;">about us</a></li>
                    <li style="margin: 5px 0;"><a href="#" style="text-decoration: none; color: #000;">privacy policy</a></li>
                </ul>
            </div>
            <div style="
                margin-bottom: 20px;
            ">
                <h4 style="margin: 10px 0;">get help</h4>
                <ul style="
                    list-style: none;
                    padding: 0;
                    margin: 0;
                ">
                    <li style="margin: 5px 0;"><a href="contactus.php" style="text-decoration: none; color: #000;">FAQ</a></li>
                    <li style="margin: 5px 0;"><a href="checkoutpage.php" style="text-decoration: none; color: #000;">payment options</a></li>
                </ul>
            </div>
            <div style="
                margin-bottom: 20px;
            ">
                <h4><a href="shop.php" style="text-decoration: none; color: #000;">online merchandise</a></h4>
            </div>
            <div class="social-links" style="
                margin-top: 20px;
                display: flex;
                justify-content: center;
                gap: 15px;
            ">
                <a href="#" style="font-size: 1.5em; text-decoration: none; color: #000;">Facebook</a>
                <a href="#" style="font-size: 1.5em; text-decoration: none; color: #000;">Twitter</a>
                <a href="#" style="font-size: 1.5em; text-decoration: none; color: #000;">Instagram</a>
                <a href="#" style="font-size: 1.5em; text-decoration: none; color: #000;">LinkedIn</a>
            </div>
        </footer>
    </body>
</html>
