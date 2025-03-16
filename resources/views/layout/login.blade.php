<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            width: 100%;
            max-width: 1366px;
            height: 768px;
        }

        .background-image {
            flex: 1;
            background: url('https://dashboard.codeparrot.ai/api/image/Z9KCc5IdzXb5OlFE/group-60.png') no-repeat;
            background-size: cover;
        }

        .login-container {
            width: 389px;
            padding: 40px;
            margin-right: 164px;
            margin-top: 173px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-title {
            font-size: 32px;
            font-weight: 400;
            margin-bottom: 44px;
            color: #000;
            text-align: center;
        }

        .input-field {
            width: 100%;
            height: 61px;
            background: rgba(255, 70, 85, 0.1);
            border: none;
            border-radius: 10px;
            padding: 0 33px;
            font-size: 14px;
            font-weight: 500;
            color: rgba(255, 4, 4, 0.5);
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .input-field::placeholder {
            color: rgba(0, 0, 0, 0.5);
        }

        .login-button {
            width: 100%;
            height: 61px;
            background: #FF4655;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            margin-bottom: 20px;
            transition: background 0.3s;
        }

        .login-button:hover {
            background: #ff5c69;
        }

        .forgot-password {
            text-align: center;
            margin-bottom: 120px;
        }

        .forgot-password a {
            color: rgba(0, 0, 0, 0.5);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }

        .create-account {
            text-align: center;
        }

        .create-account a {
            color: rgba(0, 0, 0, 0.5);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .arrow {
            width: 18px;
            height: 1px;
            background: rgba(223, 10, 10, 0.5);
            margin-left: 10px;
            position: relative;
        }

        .arrow::after {
            content: '';
            position: absolute;
            right: 0;
            top: -2px;
            width: 6px;
            height: 6px;
            border-right: 1px solid rgba(223, 10, 10, 0.5);
            border-top: 1px solid rgba(223, 10, 10, 0.5);
            transform: rotate(45deg);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="background-image"></div>
        <div class="login-container">
            <h1 class="login-title">Login</h1>
            <input type="email" class="input-field" placeholder="Email">
            <input type="password" class="input-field" placeholder="Password">
            <button class="login-button">Login</button>
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
            <div class="create-account">
                <a href="#">
                    Create Your Account
                    <span class="arrow"></span>
                </a>
            </div>
        </div>
    </div>
</body>

</html>