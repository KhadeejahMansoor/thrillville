<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - THRILLVILLE</title>

    <!-- Font and Icon Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Internal Styles -->
    <style>
        body {
            margin: 0;
            font-family: 'Jost', sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            color: #333;
        }

        .banner {
            background-color: #2185d0;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .banner h1 {
            margin: 0;
            font-size: 3rem;
            font-weight: bold;
        }

        .desc {
            padding: 40px 20px;
            background-color: #fff;
            margin: 20px auto;
            max-width: 900px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .desc h3 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #2185d0;
            text-align: center;
        }

        .desc p {
            margin-bottom: 20px;
            text-align: justify;
            line-height: 1.8;
        }

        .banner2 {
            background-color: #f0f8ff;
            padding: 40px 20px;
            margin: 20px auto;
            max-width: 900px;
            border-radius: 8px;
            text-align: center;
        }

        .banner2 h3 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 20px;
        }

        .banner2 p {
            line-height: 1.8;
            font-size: 1.1rem;
            color: #555;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 0.9rem;
        }

        .footer a {
            color: #2185d0;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .social-links a {
            color: white;
            margin: 0 5px;
            font-size: 1.2rem;
        }

        .social-links a:hover {
            color: #2185d0;
        }

        .reveal.active {
            transform: translateY(0);
            opacity: 1;
            transition: all 1s ease;
        }

        .reveal {
            transform: translateY(50px);
            opacity: 0;
            transition: all 1s ease;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="banner">
        <?php include('header.php'); ?>
        <h1>ABOUT US</h1>
    </div>

    <!-- Main Content -->
    <div class="reveal">
        <div class="desc">
            <h3>THRILLVILLE EXPERIENCES</h3>
            <p>Thrill Ville Experiences brings the excitement of The Thrill Ville Company's powerful brands and franchises — including Thrill Ville, Thrill Pixie, Marvel Thrills, Galactic Thrills, Thrill Sports, Twentieth Century Thrills, and Adventure Expeditions — into the daily lives of families and fans around the world to create thrilling memories that last a lifetime.</p>
            <p>When Thrill Ville opened Thrill Land in Adventureburg, Thrillifornia, on July 17, 1955, it created a unique destination built around thrilling storytelling and immersive experiences, ushering in a new era of family excitement. More than 65 years later, Thrill Ville has grown into one of the world’s leading providers of family travel and adrenaline-pumping leisure experiences, with iconic businesses including six thrill destinations with 12 adventure parks and 55 adrenaline-charged hotels in the United States, Europe, and Asia.</p>
            <p>Thrill Ville Consumer Products, Games, and Publishing includes the world’s leading thrilling business; one of the largest adventure publishing brands globally; one of the largest licensors of extreme games across platforms worldwide; and adrenaline-pumping products at retail around the world.</p>
        </div>
    </div>

    <!-- Additional Section -->
    <div class="banner2">
        <h3>WHO ARE WE?</h3>
        <p>Throughout our 65+ year history, we’ve designed our parks, experiences, and products to inspire optimism and create magical moments that our guests can share with their loved ones. Our cast members continue to find new ways to do what we do best – build on our legacy of incredible storytelling by dreaming up experiences that can only be found at Disney.</p>
    </div>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <script>
        // Reveal animation on scroll
        window.addEventListener('scroll', function () {
            const reveals = document.querySelectorAll('.reveal');
            for (const reveal of reveals) {
                const windowHeight = window.innerHeight;
                const revealTop = reveal.getBoundingClientRect().top;
                const revealPoint = 150;
                if (revealTop < windowHeight - revealPoint) {
                    reveal.classList.add('active');
                } else {
                    reveal.classList.remove('active');
                }
            }
        });
    </script>

</body>
</html>
