<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Login Pengguna</title>

    <style>
        body {
            height: 100vh;
            display: flex;
            background-repeat: no-repeat;
            background-size: cover;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            margin: 0; /* Ensure no default margins */
        }

        .login-container {
            width: 100%;
            max-width: 500px; /* Control maximum width */
            background-color: white;
            display: flex;
            border-radius: 0; /* Removed for mobile full-width */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            flex-direction: column;
            margin: auto; /* Center horizontally */
            position: absolute;
            top: 50%; /* Center vertically */
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .login-image {
            width: 100%;
            height: 200px; /* Default height for mobile */
            background: url('img/team.png') no-repeat center center;
            background-size: cover;
        }

        .login-form {
            width: 100%;
            padding: 30px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-form h2 {
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 1.8rem;
            text-align: center;
        }

        .login-form form {
            width: 100%;
            max-width: 320px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-group {
            text-align: center;
            margin-bottom: 15px;
            width: 100%;
        }

        label {
            display: block;
            text-align: center;
            margin-bottom: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            margin-top: 15px;
            color: white;
            font-weight: normal;
            cursor: pointer;
            font-size: 16px;
        }

        .link-group {
            margin-top: 20px;
            text-align: center;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
        }
        
        .link-group a {
            text-decoration: none;
        }

        .link-group a {
            color: #007bff;
            text-decoration: none;
        }

        .alert-danger {
            margin-bottom: 20px;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #555;
            outline: none;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: lightblue;
        }

        /* Responsive design */
        @media (max-width: 576px) {
            .login-container {
                width: 100%;
                max-width: none;
                height: 100vh;
                border-radius: 0;
                box-shadow: none;
            }
            
            .login-form {
                padding: 20px 15px;
            }
        }
        
        /* Tablet view */
        @media (min-width: 577px) and (max-width: 768px) {
            .login-container {
                width: 80%;
                border-radius: 10px;
            }
        }
        
        /* Desktop view */
        @media (min-width: 769px) {
            .login-container {
                width: 500px;
                border-radius: 10px;
            }
        }
        
        #kembali {
            align-self: flex-start;
            margin-bottom: 15px;
            border: 1px solid #dc3545;
            color: #dc3545;
            padding: 5px 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    
    <div class="login-container">
        <!-- <div class="login-image"> -->
            <!-- Background image or asset-related graphic -->
        <!-- </div> -->

        <div class="login-form">
            <a href="index.php" class="btn btn-outline-danger" id="kembali"><b><-</b></a>
            <h2>LOGIN</h2>
            <form action="loginsession.php" method="post">
                <div class="form-group">
                    <label for="ic">No Kad Pengenalan (IC):</label>
                    <input type="text" id="ic" name="ic" required/>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required/>
                </div>
                <button type="submit" name="loginuser" class="btn btn-primary">Log In</button>
                <div class="link-group">
                    <a href="signup.php" style="color:red;">Create Account</a>
                    <a href="forg_pass.php" style="color:#007bff;">Forget Password</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>