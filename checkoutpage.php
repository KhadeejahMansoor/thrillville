<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/checkout.css">
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
    <title>Document</title>
    
</head>
<body>
    <?php include('header.php'); ?>
    <main>
        
     <div class="container">
         <div class="left">
             <h3>BILLING ADDRESS</h3>
             <form action="">
                 Fullname
                 <input type="text" name="" placeholder="Enter name">
                 Email
                 <input type="text" name="" placeholder="Enter email">
                 Address
                 <input type="text" name="" placeholder="Enter adress">
                 City
                 <input type="text" name="" placeholder="Enter city">
                 <div  id="zip">
                     <label for="">
                         state
                         <select name="" id="">
                             <option value="">Please Select State</option>
                             <option value="">California</option>
                             <option value="">Florida</option>
                             <option value="">Texas</option>
                             <option value="">Madhya Pradesh</option>
                         </select>
                     </label>
                     <label for="">
                         ZipCode
                         <input type="number" name="" placeholder="Zip Code">
                     </label>
                 </div>
             </form>
         </div>
         <div class="right">
            <h3>PAYMENT</h3>
            <form action="">
                Accepted Card
                <img src="https://shopdisney.in/media/footer_social_media_icon/cards.img.jpg" alt=""><br><br>
                Account Number
                <input type="text" name="" placeholder="Enter card number">
                Name
                <input type="text" name="" placeholder="Name">
                
                <div  id="zip">
                    <label for="">
                        Expiry year
                        <input type="number" name="" placeholder="MM/YY" class="year">
                    </label>
                    <label for="">
                        Cvv
                        <input type="number" name="" placeholder="Enter your cvv">
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