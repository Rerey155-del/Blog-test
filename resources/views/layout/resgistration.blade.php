<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
    <style>
        .container {
            position: relative;
            min-height: 100vh;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding-left: 169px;
            overflow: hidden;
        }

        .form-container {
            width: 389px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group input {
            width: 100%;
            box-sizing: border-box;
        }

        .input-group input:focus {
            outline: none;
            background: #ff465530;
        }

        .login-btn:hover {
            background: #ff3545;
        }

        .sign-in-link:hover {
            cursor: pointer;
            opacity: 0.8;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Roboto, sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1 style="font-family: Roboto; font-size: 32px; font-weight: 400; line-height: 40px; text-align: center; margin-bottom: 40px;">Register</h1>

            <div class="input-group">
                <input type="text" placeholder="Username" style="background: #ff46551a; border-radius: 10px; padding: 20px 33px; width: 389px; height: 61px; border: none; font-family: Roboto; font-size: 14px; color: #00000080;">
            </div>

            <div class="input-group">
                <input type="email" placeholder="Email" style="background: #ff46551a; border-radius: 10px; padding: 20px 33px; width: 389px; height: 61px; border: none; font-family: Roboto; font-size: 14px; color: #00000080;">
            </div>

            <div class="input-group">
                <input type="password" placeholder="Password" style="background: #ff46551a; border-radius: 10px; padding: 20px 33px; width: 389px; height: 61px; border: none; font-family: Roboto; font-size: 14px; color: #00000080;">
            </div>

            <button class="login-btn" style="background: #ff4655; border-radius: 10px; width: 389px; height: 61px; border: none; color: white; font-family: Roboto; font-size: 14px; font-weight: 500; cursor: pointer;">Login</button>

            <div class="sign-in-link" style="text-align: center; margin-top: 20px;">
                <span style="display: inline-flex; align-items: center; color: #00000080; font-family: Roboto; font-size: 14px; font-weight: 500;">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z9NjYyppvFKitUFF/arrow-1.png" alt="Arrow" style="width: 18px; height: 18px; margin-right: 12px;">
                    Sign In
                </span>
            </div>
        </div>

        <div class="background-image" style="position: absolute; right: 0; top: 0; width: 873px; height: 1181px; z-index: -1;">
            <img src="https://dashboard.codeparrot.ai/api/image/Z9NjYyppvFKitUFF/group-60.png" alt="Background" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </div>
</body>

</html>