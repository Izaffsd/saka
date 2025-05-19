<?php
session_start();  
include "db.php"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn_submit'])) {
    $id_pegawai = trim($_POST['id_pegawai']);
    $ic = $_POST['ic'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Secure password hashing
    $nama = $_POST['nama'];
    $emel = $_POST['emel'];
    $notel = $_POST['notel'];
    $role = $_POST['role'];

    // Prepared statement to prevent SQL injection
    $sql = "INSERT INTO `tbl_daftar` (`id_pegawai`, `ic`, `password`, `nama`, `emel`, `notel`, `role`) 
        VALUES (
            '$id_pegawai',
            '$ic',
            '$password',
            '$nama',
            '$emel',
            '$notel',
            'Pengajar'
        )";

if (mysqli_query($conn, $sql)) {  echo "
    <script>
    alert('Akaun berjaya didaftar!');
    document.location.href = 'signup.php';
    </script>";
} else {   //       echo "Error: " . $sql . "" . mysqli_error($conn);    
}     //  $conn->close();


    // if ($sql->execute()) {
    //     echo "
    //     <script>
    //     alert('Akaun berjaya didaftar!');
    //     document.location.href = 'signup.php';
    //     </script>";
    // } else {
    //     $_SESSION['message1'] = "Error: " . $sql->error;
    //     $_SESSION['msg_type1'] = "danger";
    // }
    // $sql->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Navbar styles */
        .navbar {
            background-color: #C4D7FF;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .container {
            max-width: 1500px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand img {
            height: 70px;
        }

        .navbar-nav {
            list-style: none;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            color:rgb(255, 0, 0);
            text-decoration: none;
            border: 1px solid rgb(255, 1, 1);
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .button:hover {
            background-color:rgb(255, 0, 0);
            color: white;
        }

        /* Form section styles */
        .form-section {
            min-height: calc(100vh - 90px);
            display: flex;
            align-items: center;
            padding: 40px 0;
        }

        .form-container {
            background-color: #f1f1f1;
            padding: 40px;
            border-radius: 10px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0,123,255,0.2);
        }

        button {
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: white;
            margin-right: 10px;
        }

        button[type="reset"] {
            background-color: red;
            color: white;
        }

        button:hover {
            opacity: 0.9;
        }

        /* Alert styles */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            color: white;
        }

        .alert-success {
            background-color: #28a745;
        }

        .alert-danger {
            background-color: #dc3545;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .form-container {
                margin: 0px;
                padding: 20px;
            }

            button {
                width: 100%;
                margin-bottom: 10px;
            }
        }

        @media (max-width: 399px) {
            .navbar-brand img {
                height: 50px;
            }

            h2 {
                font-size: 20px;
            }

            .form-section {
                padding: 20px 0;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="img/305199717_985453492342369_1200662185772088661_n.png" alt="Sistem Aduan Kerosakan Aset" loading="lazy">
            </a>
            <ul class="navbar-nav">
                <li>
                    <a class="button" href="index.php"><</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php if (isset($_SESSION['message1'])): ?>
    <div class="alert alert-<?php echo $_SESSION['msg_type1']; ?>">
        <?php 
            echo $_SESSION['message1'];
            unset($_SESSION['message1']);
        ?>
    </div>
    <?php endif ?>

    <section class="form-section">
        <div class="container">
            <div class="form-container">
                <h2>Daftar Pengguna</h2>
                <form action="signup.php" method="POST">
                    <div class="form-group">
                        <label for="id_pegawai">ID Pegawai:</label>
                        <input type="text" id="id_pegawai" name="id_pegawai" placeholder="Masukkan ID Pegawai Pengajar" required>
                    </div>

                    <div class="form-group">
                        <label for="ic">No Kad Pengenalan(IC):</label>
                        <input type="text" id="ic" name="ic" placeholder="Masukkan No Kad Pengenalan" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Kata Laluan:</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan katalaluan" required>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>
                    </div>

                    <div class="form-group">
                        <label for="emel">Email:</label>
                        <input type="email" id="emel" name="emel" placeholder="Masukkan email" required>
                    </div>

                    <div class="form-group">
                        <label for="notel">No Telefon:</label>
                        <input type="text" id="notel" name="notel" placeholder="Masukkan nombor telefon" required>
                    </div>

                    <div class="form-group">
                        <button type="reset">Set Semula</button>
                        <button type="submit" name="btn_submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>