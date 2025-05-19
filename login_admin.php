

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Login Pentadbir</title>

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
            max-width: 1000px;
            background-color: white;
            display: flex;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            flex-direction: column;
        }

        .login-form {
            width: 100%;
            padding: 30px;
            text-align: center;
        }

        .login-form h2 {
            margin-top: 20px;
            font-size: 1.8rem;
        }

        .login-image {
            width: 100%;
            height: 400px;
            background: url('img/unauthorized-person.png') no-repeat center center;
            background-size: cover;
        }

        .btn-primary {
            background-color: #007bff;
            width: 90%;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .link-group {
            margin-top: 20px;
            text-align: center;
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

        /* Tablet view adjustments */
        @media (min-width: 600px) and (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }

            .login-image {
                height: 250px;
            }
        }

        /* Desktop view adjustments */
        @media (min-width: 769px) {
            .login-container {
                flex-direction: row;
            }

            .login-form {
                width: 60%;
                padding: 50px;
                text-align: left;
            }

            .login-image {
                width: 40%;
                height: auto;
            }
        }
    </style>
</head>
<body>
    
    <div class="login-container">
        <div class="login-image">
            <!-- Background image or asset-related graphic -->
        </div>

        <div class="login-form">
            <a href="index.php" class="btn btn-outline-danger" id="kembali"><b><-</b></a>
            <?php
                session_start(); 
                if (isset($_SESSION['message'])) {
                    echo "<div class='alert alert-{$_SESSION['msg_type']}'>{$_SESSION['message']}</div>";
                    unset($_SESSION['message']);
                }
            ?>
            <h2>LOGIN PENTADBIR</h2>
            <form action="login_proses.php" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required/>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required/>
                </div>
                <button type="submit" name="loginadmin" class="btn btn-primary">Log In</button>
            </form>
        </div>
    </div>
</body>
</html>