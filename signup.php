<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/signup.css">
    
    <title>THRILLVILLE - SIGN UP</title>
</head>
<body>
    <div class="container">
        <div class="signup__content">
            <img src="css/image/30721.jpg" alt="signup image" class="signup__img">

            <form action="signupp.php" method="post" class="signup__form">
                <div>
                    <h1 class="signup__title">
                        <span>Create</span> Account
                    </h1>
                </div>

                <div>
                    <div class="signup__inputs">
                        <div>
                            <label for="input-fn" class="signup__label">First Name</label>
                            <input type="text" name="input-fn" placeholder="Enter your First Name" required class="signup__input" id="input-fn">
                        </div>
                        <div>
                            <label for="input-ln" class="signup__label">Last Name</label>
                            <input type="text" name="input-ln" placeholder="Enter your Last Name" required class="signup__input" id="input-ln">
                        </div>
                        <div>
                            <label for="input-email" class="signup__label">Email</label>
                            <input type="email" name="input-email" placeholder="Enter your email address" required class="signup__input" id="input-email">                        </div>

                        <div>
                            <label for="input-password" class="signup__label">Password</label>

                            <div class="signup__box">
                            <input type="password" name="input-password" placeholder="Create your password" required class="signup__input" id="input-password">
                                <i class="ri-eye-off-line signup__eye" id="input-icon"></i>
                            </div>
                        </div>

                        

                       
                        <div>
                            <label for="input-add" class="signup__label">Address</label>
                            <input type="text" name="input-add" placeholder="Enter your Address" required class="signup__input" id="input-add">
                        </div>

                        <div>
                            <label for="input-contact" class="signup__label">Contact Number</label>
                            <input type="tel" name="input-contact" placeholder="Enter your contact number" required class="signup__input" id="input-contact">
                        </div>
                    </div>

                    <!-- <div class="signup__check">
                        <input type="checkbox" class="signup__check-input" id="input-check">
                        <label for="input-check" class="signup__check-label">I agree to the Terms and Conditions</label>
                    </div> -->
                </div>

                <div>
                    <div class="signup__buttons">
                        <button class="signup__button">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    
</body>
</html>
