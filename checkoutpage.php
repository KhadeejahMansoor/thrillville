<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Checkout - ThrillVille</title>
    <style>
        body {
            font-family: 'Jost', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            color: #333;
        }

        header {
            background-color: #2185d0;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
        }

        main {
            padding: 20px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px auto;
            max-width: 1000px;
            gap: 20px;
        }

        .left, .right {
            flex: 1;
            min-width: 300px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #2185d0;
            font-size: 1.4rem;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #2185d0;
            box-shadow: 0 0 5px rgba(33, 133, 208, 0.5);
        }

        #zip {
            display: flex;
            gap: 10px;
        }

        #zip label {
            flex: 1;
        }

        .right img {
            max-width: 100px;
            margin-top: 10px;
        }

        a {
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #2185d0;
            padding: 10px 15px;
            text-align: center;
            border-radius: 5px;
            margin-top: 10px;
            font-weight: bold;
            font-size: 1rem;
        }

        a:hover {
            background-color: #1a6db0;
        }

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
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <main>
        <div class="container">
            <!-- Billing Address -->
            <div class="left">
                <h3>BILLING ADDRESS</h3>
                <form action="">
                    <label>Fullname</label>
                    <input type="text" name="" placeholder="Enter name">
                    <label>Email</label>
                    <input type="text" name="" placeholder="Enter email">
                    <label>Address</label>
                    <input type="text" name="" placeholder="Enter address">
                    <label>City</label>
                    <input type="text" name="" placeholder="Enter city">
                    <div id="zip">
                        <label for="">
                            State
                            <select name="" id="">
                                <option value="">Please Select State</option>
                                <option value="California">California</option>
                                <option value="Florida">Florida</option>
                                <option value="Texas">Texas</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                            </select>
                        </label>
                        <label for="">
                            ZipCode
                            <input type="number" name="" placeholder="Zip Code">
                        </label>
                    </div>
                </form>
            </div>
            <!-- Payment Section -->
            <div class="right">
                <h3>PAYMENT</h3>
                <form action="">
                    <label>Accepted Card</label>
                    <img src="https://shopdisney.in/media/footer_social_media_icon/cards.img.jpg" alt="Accepted Cards">
                    <label>Account Number</label>
                    <input type="text" name="" placeholder="Enter card number">
                    <label>Name</label>
                    <input type="text" name="" placeholder="Name">
                    <div id="zip">
                        <label>
                            Expiry Year
                            <input type="text" name="" placeholder="MM/YY" class="year">
                        </label>
                        <label>
                            CVV
                            <input type="number" name="" placeholder="Enter your CVV">
                        </label>
                    </div>
                    <a href="successpage.php">Click here to proceed</a>
                </form>
            </div>
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>
