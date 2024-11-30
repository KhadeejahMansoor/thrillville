<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>THRILLVILLE - SIGN UP</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 30px;
            width: 400px;
        }

        h1 {
            font-size: 2rem;
            text-align: center;
            color: #1976d2;
            margin-bottom: 20px;
        }

        h1 span {
            font-weight: bold;
        }

        .signup__form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .signup__inputs div {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .signup__label {
            font-size: 0.9rem;
            color: #333;
            font-weight: bold;
        }

        .signup__input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .signup__input:focus {
            border-color: #1976d2;
            outline: none;
            box-shadow: 0 0 4px rgba(25, 118, 210, 0.3);
        }

        .signup__box {
            position: relative;
        }

        .signup__eye {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
        }

        .signup__button {
            background-color: #1976d2;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .signup__button:hover {
            background-color: #145ea8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><span>Create</span> Account</h1>
        <form action="signupp.php" method="post" class="signup__form">
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
                    <input type="email" name="input-email" placeholder="Enter your email address" required class="signup__input" id="input-email">
                </div>
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
            <button class="signup__button">Sign Up</button>
        </form>
    </div>

    <script>
        // Toggle password visibility
        const passwordInput = document.getElementById('input-password');
        const toggleIcon = document.getElementById('input-icon');

        toggleIcon.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            toggleIcon.classList.toggle('ri-eye-line');
            toggleIcon.classList.toggle('ri-eye-off-line');
        });
    </script>
</body>
</html>
