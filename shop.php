<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThrillVille - Merchandise</title>

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
            padding: 20px;
            color: white;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Section Titles */
        .main-home h1 {
            font-size: 2rem;
            text-align: center;
            margin: 20px 0;
            color: #2185d0;
        }

        .center-text h2 {
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 20px;
            color: #2185d0;
        }

        .center-text span {
            color: #333;
            font-weight: bold;
        }

        /* Products Section */
        .products {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .products .product {
            margin: 15px 0;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .products .product:last-child {
            border-bottom: none;
        }

        .products h3 {
            margin: 5px 0;
            color: #2185d0;
            font-size: 1.2rem;
        }

        .products p {
            margin: 5px 0;
            font-size: 1rem;
        }

        .products button {
            background-color: #2185d0;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .products button:hover {
            background-color: #1a6db0;
        }

        /* Cart Section */
        .card {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .card h1 {
            font-size: 1.5rem;
            color: #2185d0;
        }

        .cart-items {
            margin: 20px 0;
        }

        .closeShopping {
            display: inline-block;
            background-color: #d9534f;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .closeShopping:hover {
            background-color: #c9302c;
        }

        .total-price {
            background-color: #5cb85c;
            color: white;
            padding: 10px;
            font-size: 1.2rem;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
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
    <?php include('header2.php'); ?>

    <!-- Main Section -->
    <section class="main-home">
        <div class="main-text">
            <h1>OUR COLLECTION</h1>
        </div>
    </section>

    <!-- Products Section -->
    <section class="trending-product" id="prod">
        <div class="center-text">
            <h2>Our <span>Products</span></h2>
        </div>
        <div class="products">
            <div class="product">
                <h3>V8 Cap</h3>
                <p>Price: $15</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <h3>Cars Neon Tee</h3>
                <p>Price: $20</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <h3>Neon Hoodie</h3>
                <p>Price: $30</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <h3>Disney Watch</h3>
                <p>Price: $50</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <h3>Castle Locket</h3>
                <p>Price: $12</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </section>

    <!-- Cart Section -->
    <div class="card">
        <h1>YOUR CART</h1>
        <div class="cart-items">
            <p>No items in the cart yet.</p>
        </div>
        <div class="checkOut">
            <a href="successpage2.php" style="text-decoration: none;">
                <div class="total-price"><span>$</span>0</div>
            </a>
            <button class="closeShopping">Close</button>
        </div>
    </div>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <!-- JavaScript -->
    <script src="app2.js"></script>
    <script src="java.js"></script>
</body>
</html>
