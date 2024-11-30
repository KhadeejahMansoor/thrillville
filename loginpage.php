<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>THRILLVILLE - LOGIN</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Jost', sans-serif;
            background-color: #f5f5f5;
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
            width: 350px;
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

        .login__form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .login__inputs div {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .login__label {
            font-size: 0.9rem;
            color: #333;
            font-weight: bold;
        }

        .login__input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .login__input:focus {
            border-color: #1976d2;
            outline: none;
            box-shadow: 0 0 4px rgba(25, 118, 210, 0.3);
        }

        .login__box {
            position: relative;
        }

        .login__eye {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
        }

        .login__check {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 0.9rem;
            color: #333;
        }

        .login__check-input {
            width: 16px;
            height: 16px;
        }

        .login__buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .login__button {
            background-color: #1976d2;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
        }

        .login__button:hover {
            background-color: #145ea8;
        }

        .login__button-ghost {
            background-color: transparent;
            border: 2px solid #1976d2;
            color: #1976d2;
        }

        .login__button-ghost:hover {
            background-color: #1976d2;
            color: #fff;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><span>Welcome</span> Back</h1>
        <form action="loginp.php" method="post" class="login__form">
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
            <div class="login__buttons">
                <button class="login__button" type="submit">Log In</button>
                <a href="signup.php" class="login_button login_button-ghost">Sign Up</a>
            </div>
        </form>
    </div>

    <script>
        // Toggle password visibility
        const passwordInput = document.getElementById('input-pass');
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
