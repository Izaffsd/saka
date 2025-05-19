<?php include 'header_print.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Laporan User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #EEEEEE;
        }
        .navbar {
            background-color: #C4D7FF;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
        }
        .navbar-brand {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #333;
        }
        .navbar-brand img {
            margin-right: 10px;
        }
        .navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        .navbar ul li {
            margin-right: 20px;
        }
        .navbar ul li a {
            text-decoration: none;
            color: #333;
        }
        .navbar ul li a:hover {
            color: white;
        }
        .container-md {
            max-width: 1400px;
            margin: 30px auto;
            background-color: #EEEEEE;
            padding: 10px;
            box-shadow: 1px 1px 1px 1px black;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .table thead th {
            background-color: #C4D7FF;
            border: 1px solid #0B192C;
            padding: 10px;
            text-align: left;
        }
        .table tbody td {
            background-color: #EEEEEE;
            border: 1px solid #0B192C;
            padding: 10px;
        }
        .footer {
            background-color: #C4D7FF;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #ddd;
            margin-top: 20px;
        }
        #button{
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a class="navbar-brand" href="#">
            <img src="img/305199717_985453492342369_1200662185772088661_n.png" height="50" alt="Sistem Aduan Kerosakan Aset" />
            <b>SISTEM ADUAN KEROSAKAN ASET</b>
        </a>
        <ul>
            <li><a href="admin.php" class="btn btn-danger"><</a></li>
        </ul>
    </div>

    <!-- Main content -->
    <section class="vh-100">
        <div class="container-md">
            <h2><b>Laporan Aduan Pengguna</b></h2>
            <div class="table-responsive-sm">

            <div class="mb-3" id="button">
                <button onclick="exportToWord()" class="btn btn-info">Export Word</button>
                <button onclick="exportToExcel()" class="btn btn-warning">Export Excel</button>
            </div>

                <!-- Table -->
                <table class="table">
                    <thead>
                        <tr>
                        <th>Bil.</th>
                        <th>Kategori</th>
                        <th>Tarikh Kerosakan</th>
                        <th>Nama Dan Jawatan</th>
                        <th>Jenis Aset</th>
                        <th>Nombor Siri Pendaftaran Aset</th>
                        <th>Tempat Rosak</th>
                        <th>Pengguna Terakhir</th>
                        <th>Perihal Kerosakan</th>
                        <th>Disahkan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    include('db.php');
                    $sql = "SELECT * FROM tbl_semakan";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                    $count = 1;
                    while ($data = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo htmlspecialchars($data['kategori']); ?></td>
                        <td><?php echo htmlspecialchars($data['tarikh_rosak']); ?></td>
                        <td><?php echo htmlspecialchars($data['nama']); ?></td>
                        <td><?php echo htmlspecialchars($data['jenis_aset']); ?></td>
                        <td><?php echo htmlspecialchars($data['no_siri']); ?></td>
                        <td><?php echo htmlspecialchars($data['tempat_rosak']); ?></td>
                        <td><?php echo htmlspecialchars($data['userterakhir']); ?></td>
                        <td><?php echo htmlspecialchars($data['ulasan']); ?></td>
                        <td><?php echo htmlspecialchars($data['lulus_jabatan']); ?></td>
                    </tr>
                <?php
                    }
                }
                ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 Sistem Kerosakan Aset. All rights reserved.
    </div>

</body>
</html>
