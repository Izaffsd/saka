<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Kemas Kini Aduan</title>
</head>
<body>
    <div class="container my-5">
        <header class="d-flex justify-content-between my-4">
            <h1>Kemas Kini Aduan</h1>
            <div>
                <a href="maklumat_user.php" class="btn btn-primary">Kembali</a>
            </div>
        </header>
        <style>
            body {
            background-color: #C4D7FF;
        }
        </style>
        <form action="process_edit.php" method="POST">
            <?php
            session_start();
            if (isset($_GET['no_id'])) {
                include("db.php");

                // Dapatkan ID dari URL
                $no_id = $_GET['no_id'];

                // Betulkan query
                $sql = "SELECT * FROM tbl_semakan WHERE no_id = $no_id";
                $result = mysqli_query($conn, $sql);

                // Semak jika rekod wujud
                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result);
                    ?>
                
                <input type="hidden" name="no_id" value="<?php echo $no_id; ?>">

                <div class="form-element my-4">
                        <input type="text" class="form-control" name="nama" placeholder="Nama dan Jawatan" value="<?php echo $row["nama"]; ?>" required>
                </div>

                <div class="form-element my-4">
                        <select name="jenis_aset" class="form-control" required>
                            <option value="jenis aset" disabled>Jenis Aset</option>
                            <option value="Peralatan Komputer" <?php if($row["jenis_aset"] == "Peralatan Komputer") { echo "selected"; } ?>>Peralatan Komputer</option>
                            <option value="Perabut" <?php if($row["jenis_aset"] == "Perabut") { echo "selected"; } ?>>Perabut</option>
                            <option value="Tandas" <?php if($row["jenis_aset"] == "Tandas") { echo "selected"; } ?>>Tandas</option>
                            <option value="Peralatan Makmal" <?php if($row["jenis_aset"] == "Peralatan") { echo "selected"; } ?>>Peralatan Makmal</option>
                            <option value="Peralatan Elektrik" <?php if($row["jenis_aset"] == "Peralatan Elektrik") { echo "selected"; } ?>>Peralatan Elektrik</option>
                            <option value="Suis Elektrik" <?php if($row["jenis_aset"] == "Suis Elektrik") { echo "selected"; } ?>>Suis Elektrik</option>
                        </select>
                    </div>

                    <div class="form-element my-4">
                        <select name="kategori" class="form-control" required>
                            <option value="kategori" disabled>kategori</option>
                            <option value="Bangunan/Sivil (Encik Kamal)" <?php if($row["kategori"] == "Bangunan/Sivil (Encik Kamal)") { echo "selected"; } ?>>Bangunan/Sivil (Encik Kamal)</option>
                            <option value="Mekanikal/Elektrikal/Aircond (Encik Hairul)" <?php if($row["kategori"] == "Mekanikal/Elektrikal/Aircond (Encik Hairul)") { echo "selected"; } ?>>Mekanikal/Elektrikal/Aircond (Encik Hairul)</option>
                            <option value="Komputer/ ICT (Encik Hadi)" <?php if($row["kategori"] == "Komputer/ ICT (Encik Hadi)") { echo "selected"; } ?>>Komputer/ ICT (Encik Hadi)</option>
                        </select>
                    </div>
                    <div class="form-element my-4">
                        <input type="number" class="form-control" name="no_siri" placeholder="Nombor Siri Pendaftaran" value="<?php echo $row["no_siri"]; ?>">
                    </div>

                    <div class="form-element my-4">
                        <select name="tempat_rosak" class="form-control" required>
                            <option value="" disabled>Tempat Kerosakan</option>
                            <option value="Asrama" <?php if($row["tempat_rosak"] == "Asrama") { echo "selected"; } ?>>Asrama</option>
                            <option value="Dewan Makan" <?php if($row["tempat_rosak"] == "Dewan Makan") { echo "selected"; } ?>>Dewan Makan</option>
                            <option value="Library" <?php if($row["tempat_rosak"] == "Library") { echo "selected"; } ?>>Library</option>
                            <option value="Makmal" <?php if($row["tempat_rosak"] == "Makmal") { echo "selected"; } ?>>Makmal</option>
                            <option value="Bilik Kuliah" <?php if($row["tempat_rosak"] == "Bilik Kuliah") { echo "selected"; } ?>>Bilik Kuliah</option>
                            <option value="Cafe" <?php if($row["tempat_rosak"] == "Cafe") { echo "selected"; } ?>>Cafe</option>
                        </select>
                    </div>

                    <div class="form-element my-4">
                        <input type="date" class="form-control" name="tarikh_rosak" placeholder="Tarikh Rosak" value="<?php echo $row["tarikh_rosak"]; ?>" required> 
                    </div>

                    <div class="form-element my-4">
                        <input type="text" class="form-control" name="userterakhir" placeholder="Pengguna Terakhir" value="<?php echo $row["userterakhir"]; ?>" required> 
                    </div>

                    <div class="form-element my-4">
                    <input type="text" class="form-control" name="ulasan" placeholder="Perihal Kerosakan" value="<?php echo $row["ulasan"]; ?>"required>    
                    </div>
                    
                    <div class="form-element my-4">
                            <select name = "lulus_jabatan" class="form-control" required>
                                <option selected>Dalam Proses</option>
                                <option name="lulus_jabatan" value="Diterima">Diterima</option>
                                <option name="lulus_jabatan" value="Ditolak">Ditolak</option>
                                <option name="lulus_jabatan" value="Sedang Dibaiki">Sedang Dibaiki</option>
                                <option name="lulus_jabatan" value="Siap Dibaiki">Siap Dibaiki</option>
                            </select>
                    </div>

                    <div class="form-element my-4">
                        <input type="submit" name="staffedit" value="Kemas Kini Permohonan" class="btn btn-primary">
                    </div>

                    <?php
                } else {
                    echo "<h3>Permohonan tidak wujud.</h3>";
                }
            } else {
                echo "<h3>Permohonan tidak wujud.</h3>";
            }
            ?>
        </form>
    </div>
</body>
</html>