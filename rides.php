<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attractions - ThrillVille</title>
    
    <!-- External Fonts and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRkc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Inline Styles -->
    <style>
        body {
            margin: 0;
            font-family: 'Jost', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Header */
        header {
            background-color: #2185d0;
            padding: 20px 0;
            color: white;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Section Titles */
        .main-text h1 {
            font-size: 2.5rem;
            text-align: center;
            margin: 20px 0;
            color: #2185d0;
        }

        /* Image Grid */
        .main-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            margin: 0 auto;
            max-width: 1200px;
        }

        .image-box {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .image-box img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }

        .image-box:hover img {
            transform: scale(1.1);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .image-box:hover .overlay {
            opacity: 1;
        }

        .image-box-text {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
            z-index: 2;
        }

        .image-box-text h2 {
            margin: 0;
            font-size: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .image-box-text p {
            margin: 5px 0 0;
            font-size: 1rem;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        footer a {
            color: #2185d0;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Attractions Section -->
    <section class="explore">
        <div class="main-text">
            <h1>Our Attractions</h1>
        </div>
        <div class="main-container">
            <div class="image-box">
                <a href="#dine">
                    <img src="css/image/lamplight-lounge-disneyland-DLANDINE0821-7768e3c5332b49819d1734a61b33cb99.jpg" alt="Dining">
                    <div class="overlay"></div>
                    <div class="image-box-text">
                        <h2>Dining</h2>
                    </div>
                </a>
            </div>
            <div class="image-box">
                <a href="shop.html">
                    <img src="css/image/n019441_2028sep16_world_shop-fantasyland-menagerie-du-royaume_16-9_tcm1861-160395$w~960$p~1$f~jpg.jpg" alt="Shop">
                    <div class="overlay"></div>
                    <div class="image-box-text">
                        <h2>Shop</h2>
                    </div>
                </a>
            </div>
            <div class="image-box">
                <a href="#ride">
                    <img src="css/image/Splash-Mntn-Garth-Vaughan-56a9510b5f9b58b7d0fa4257.jpg" alt="Rides">
                    <div class="overlay"></div>
                    <div class="image-box-text">
                        <h2>Rides</h2>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Ride Section -->
    <section class="explore">
        <div class="main-text">
            <h1 id="ride">Come Ride With Us</h1>
        </div>
        <div class="main-container">
            <div class="image-box">
                <img src="css/image/Who-Designs-Amusement-Park-Rides.jpg" alt="Hanging Garden">
                <div class="overlay"></div>
                <div class="image-box-text">
                    <h2>Hanging Garden</h2>
                    <p>Fabulous atmosphere and nature</p>
                </div>
            </div>
            <div class="image-box">
                <img src="css/image/skyfall.jpg" alt="Sky Dizzy Toucan">
                <div class="overlay"></div>
                <div class="image-box-text">
                    <h2>Sky Dizzy Toucan</h2>
                    <p>Dizziness Guaranteed</p>
                </div>
            </div>
            <div class="image-box">
                <img src="css/image/photo-35.jfif" alt="The Sinking Ship">
                <div class="overlay"></div>
                <div class="image-box-text">
                    <h2>The Sinking Ship</h2>
                    <p>Get Onboard At Your Own Risk</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Dining Section -->
    <section class="explore">
        <div class="main-text">
            <h1 id="dine">Dining</h1>
        </div>
        <div class="main-container">
            <div class="image-box">
                <img src="css/image/angry-dogs-16x9-1-scaled.jpg" alt="Angry Dogs">
                <div class="overlay"></div>
                <div class="image-box-text">
                    <h2>Angry Dogs</h2>
                </div>
            </div>
            <div class="image-box">
                <img src="css/image/7842797476_f197852d23_b.jpg" alt="Flos V8">
                <div class="overlay"></div>
                <div class="image-box-text">
                    <h2>Flos V8</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>

</body>
</html>
