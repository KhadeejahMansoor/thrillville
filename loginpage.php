

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="css/logincss.css">
       
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
         <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,700;1,200;1,300;1,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.
4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqR
Kc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <title>THRILLVILLE -LOGIN</title>
    </head>
    <body>
        <div class="container">
            <div class="login__content">
                <img src="css/image/30721.jpg" alt="login image" class="login__img">
                

                <form action="loginp.php" method="post" class="login__form">
                    <div>
                        <h1 class="login__title">
                            <span>Welcome</span> Back
                        </h1>
                      
                    </div>
                    
                    <div>
                        <div class="login__inputs">
                            <div>
                                <label for="input-email" class="login__label">Email</label>
                                <input type="email" placeholder="Enter your email address" required class="login__input" id="input-email" name="input-email">
                            </div>
    
                            <div>
                                <label for="input-pass" class="login__label">Password</label>
    
                                <div class="login__box">
                                    <input type="password" placeholder="Enter your password" required class="login__input" id="input-pass" name="input-pass">
                                    <i class="ri-eye-off-line login__eye" id="input-icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="login__check">
                            <input type="checkbox" class="login__check-input" id="input-check">
                            <label for="input-check" class="login__check-label">Remember me</label>
                        </div>
                    </div>

                    <div>
                        <div class="login__buttons">
                        <a href="index.php" style="text-decoration: none;"><button class="login__button" type="submit">Log In</button></a>
                            <a href="signup.php" style="text-decoration: none;"> <button class="login__button login__button-ghost">Sign Up</button></a>
                        </div>

                       
                    </div>
                </form>
            </div>
        </div>

       
    </body>
</html>