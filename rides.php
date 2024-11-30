<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attractions - ThrillVille</title>
    
    <!-- Fonts and Styles -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Jost', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
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
            font-size: 2rem;
            text-align: center;
            margin: 20px 0;
            color: #2185d0;
        }

        /* Content */
        .content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            font-size: 1.5rem;
            color: #2185d0;
            margin-bottom: 10px;
        }

        .content p {
            margin: 10px 0;
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

    <!-- Dining Section -->
    <section>
        <div class="main-text">
            <h1>Dining</h1>
        </div>
        <div class="content">
            <h2>Top Restaurants</h2>
            <p><strong>Angry Dogs:</strong> Hotdogs with a fiery twist!</p>
            <p><strong>Flos V8 Cafe:</strong> Dine in a retro-style setting with classic American meals.</p>
        </div>
    </section>

    <!-- Shop Section -->
    <section>
        <div class="main-text">
            <h1>Shop</h1>
        </div>
        <div class="content">
            <h2>Shopping Spots</h2>
            <p><strong>Adventure Emporium:</strong> Souvenirs and collectibles for thrill-seekers.</p>
            <p><strong>Thrill Bazaar:</strong> A wide range of apparel and gifts for all ages.</p>
        </div>
    </section>

    <!-- Ride Section -->
    <section>
        <div class="main-text">
            <h1>Rides</h1>
        </div>
        <div class="content">
            <h2>Must-Try Rides</h2>
            <p><strong>Hanging Garden:</strong> A serene ride through a beautiful garden setting.</p>
            <p><strong>Sky Dizzy Toucan:</strong> A thrilling experience with a bird's-eye view.</p>
            <p><strong>The Sinking Ship:</strong> Hold on tight as you brave this intense water ride!</p>
            <p><strong>Banshee Coaster:</strong> Feel the adrenaline rush on this high-speed coaster.</p>
        </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>

</body>
</html>
