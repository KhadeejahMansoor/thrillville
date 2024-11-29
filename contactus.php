<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="Viewport" content="width= device-width , initial-scale=1.0">
        <title>Contact-THRILLVILLE</title>
       
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,700;1,200;1,300;1,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.
4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqR
Kc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
        <div class="parentcontainer">
            <?php include('header.php'); ?>
          
            <div class="text">
                <h1>We Are Here For You</h1>
            </div>
            <button class="btn-2"><span>Get In Touch</span></button>
        </div>
        <div class="mega">
        <div class="contact-form-container">
            <h2>Contact Us</h2>
            <form action="#" method="post" class="contact-form">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
    
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
    
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
    
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
    
                <div class="form-group">
                    <button class="btn-1">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <?php include('footer.php'); ?>
 
        </body>
        </html>