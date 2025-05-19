<?php
include('db.php');
session_start();

// Check if user is logged in
if (!isset($_SESSION['ic'])) {
    header("Location: index.php");
    exit();
}

// Get current user's information
$ic= $_SESSION['ic'];
$sql = "SELECT * FROM `tbl_daftar` WHERE ic = '$ic'";
$result = mysqli_query($conn, $sql);
$userdata = mysqli_fetch_assoc($result);

// If no user data found, redirect to login
if (!$userdata) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css"/>
    <title>HOME</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h4 {
            color: black;
            margin-top: 10px;
            font-size: 18px;
            font-family: 'Arial';
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
            max-width: 95%;
            margin: 40px auto;
            background-color: #EEEEEE;
            padding: 20px;
            box-shadow: 1px 1px 4px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .table thead th {
            background-color: #C4D7FF;
            border: 1px solid #0B192C;
            padding: 10px;
            text-align: center;
        }

        .table tbody td {
            background-color: #EEEEEE;
            border: 1px solid #0B192C;
            padding: 10px;
            text-align: left;
            max-width: 200px; /* Set maximum width for cells */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
        /* Add class for expandable content */
        .expandable-cell {
            position: relative;
            cursor: pointer;
        }
        
        .expandable-cell .full-content {
            display: none;
            position: absolute;
            background: #fff;
            border: 1px solid #0B192C;
            padding: 10px;
            z-index: 100;
            width: 300px;
            white-space: normal;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        
        .expandable-cell:hover .full-content {
            display: block;
        }

        .footer {
            background-color: #C4D7FF;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #ddd;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<div class="navbar">
    <a class="navbar-brand" href="#">
        <img src="img/305199717_985453492342369_1200662185772088661_n.png" height="50" alt="Sistem Aduan Kerosakan Aset" />
        <h4><b>SISTEM ADUAN KEROSAKAN ASET</b></h4>
    </a>
    <ul>
        <li><a href="aduan_user.php" class="btn btn-outline-dark">Mohon Aduan Aset</a></li>
        <li><a href="index.php" class="btn btn-outline-danger">Log Keluar</a></li>
    </ul>
</div>

<!-- Main content -->
<section class="vh-100">
    <div class="container-md">
        
        <h2><b>Senarai Aduan Kerosakan Aset</b><br><?php echo($userdata['emel']); ?></h2>

        <div class="table-responsive">
            <table id="aduanTable" class="table table-bordered display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Bil.</th>
                        <th>Kategori</th>
                        <th>Tarikh Kerosakan</th>
                        <th>Nama Dan Jawatan</th>
                        <th>Jenis Aset</th>
                        <th>No. Siri Aset</th>
                        <th>Tempat Rosak</th>
                        <th>Pengguna Terakhir</th>
                        <th>Perihal Kerosakan</th>
                        <th>Disahkan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // Filter by the current user's ID or IC number
                $sql = "SELECT * FROM `tbl_semakan` WHERE emel = '".$userdata['emel']."'";
                $result = mysqli_query($conn, $sql);
                if ($result && $result->num_rows > 0) {
                    $count = 1;
                    while ($data = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo ($data['role']); ?></td>
                        <td><?php echo ($data['tarikh_rosak']); ?></td>
                        <td><?php echo ($data['nama']); ?></td>
                        <td><?php echo ($data['jenis_aset']); ?></td>
                        <td><?php echo ($data['no_siri']); ?></td>
                        <td><?php echo ($data['tempat_rosak']); ?></td>
                        <td><?php echo ($data['userterakhir']); ?></td>
                        <td class="expandable-cell">
                            <?php 
                                // Limit text to 30 characters
                                echo substr($data['ulasan'], 0, 500) . (strlen($data['ulasan']) > 500 ? '...' : ''); 
                            ?>
                        </td>
                        <td><?php echo ($data['lulus_jabatan']); ?></td>
                    </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='10' class='text-center'>Tiada data ditemui.</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="text-center p-3">ILP Kuala Langat Selangor &copy; 2024 Sistem Kerosakan Aset. All rights reserved.</div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

<!-- DataTables Initialization -->
<script>
    $(document).ready(function () {
        $('#aduanTable').DataTable({
            responsive: true,
            scrollX: true,
            pageLength: 5,
            lengthMenu: [5, 10, 25, 50],
            language: {
                search: "Carian:",
                lengthMenu: "Papar _MENU_ rekod",
                paginate: {
                    first: "Pertama",
                    last: "Terakhir",
                    next: "Seterusnya",
                    previous: "Sebelumnya"
                }
            }
        });
    });
</script>
</body>
</html>