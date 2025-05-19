<?php session_start();
include('db.php');
$sql = "SELECT * FROM tbl_daftar WHERE `ic`='".$_SESSION['ic']."'";
$akaun = mysqli_query($conn, $sql);
$row_akaun = mysqli_fetch_assoc($akaun) ;
$totalRows_akaun = mysqli_num_rows($akaun);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>MOHON ADUAN</title>
</head>
<body>
<style>
            body {
            background-color: #C4D7FF;
        }
        </style>
    <div class="container my-5">
        <header class="d-flex justify-content-between my-4">
            <h1>Aduan Kerosakan Aset <?php echo $row_akaun['emel'] ?></h1>
            <div>
                <a href="user.php" class="btn btn-primary">Kembali</a>
            </div>
        </header>

        <form action="aduan_proses.php" method="POST">
            <div class="form-element my-4">
            <select name="role" id="" class="form-control" required>
                    <option value="" selected disabled>Kategori</option>
                    <option value="Bangunan/Sivil">Bangunan/Sivil (Encik Kamal)</option>
                    <option value="Mekanikal/Elektrikal/Aircond">Mekanikal/Elektrikal/Aircond (Encik Hairul)</option>
                    <option value="Komputer/ICT">Komputer/ ICT (Encik Hadi)</option>     
            </select>
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="jenis_aset" placeholder="Jenis Asset" required>
            </div>
            <!-- <div>
            <select name="jenis_aset" id="" class="form-control" required>
                    <option value="" selected disabled>Jenis Aset</option>
                    <option value="Peralatan Komputer">Peralatan Komputer</option>
                    <option value="Perabut">Perabut</option>
                    <option value="Tandas">Tandas</option>
                    <option value="Peralatan Makmal">Peralatan Makmal</option>
                    <option value="Peralatan Elektrik">Peralatan Elektrik</option>
                    <option value="Suis Elektrik">Suis Elektrik</option>
                    <option value="Peralatan Bilik Kuliah">Peralatan Bilik Kuliah</option>  
                    <option value="Printer">Printer</option>  
                </select>
            </div>  -->
            <div class="form-element my-4">
                <input type="text" class="form-control" name="nomborsiri" placeholder="Tuliskan Nombor Siri Pendaftaran Aset" required>
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="tempat" placeholder="Tempat Kerosakan" required>
            </div>
            <!-- <div class="form-element my-4">
            <select name="tempat" id="" class="form-control" required>
                    <option value="" selected disabled>Pilih Tempat Kerosakan</option>
                    <option value="Asrama">Asrama</option>
                    <option value="Dewan Makan">Dewan Makan</option>
                    <option value="Library">Library</option>
                    <option value="Makmal">Makmal</option>
                    <option value="Bengkel">Bengkel</option>
                    <option value="Bilik Kuliah">Bilik Kuliah</option>
                    <option value="Cafe">Cafe</option>   
                </select>
            </div> -->

            <div class="form-element my-4">
                <input type="text" class="form-control" name="kerosakan" placeholder="Pengguna Terakhir" required>
            </div>

            <div class="form-element my-4">
                <textarea name="text" id="" class="form-control" name="Nama pengguna" placeholder="Perihal Kerosakan" required></textarea>
            </div>

            <div class="form-element my-4">
                <input type="date" class="form-control" name="Tarikh kerosakan" placeholder="pilih tarikh kerosakan" required>
            </div>
            <div class="form-element my-4">
                <input type="hidden" class="form-control" name="Nama dan Jawatan" placeholder="Tuliskan Nama dan Jawatan" value="<?php echo $row_akaun['nama'] ?>" required>
                <input type="text" class="form-control" name="Nama dan Jawatanxxx" placeholder="Tuliskan Nama dan Jawatan" value="<?php echo $row_akaun['nama'] ?>" disabled>
            </div>

            <div class="form-element my-4">
            <input type="hidden" class="form-control" name="emel" required placeholder="Masukkan email anda" value="<?php echo $row_akaun['emel'] ?>">
            <input type="text" class="form-control" name="emelxx" required placeholder="Masukkan email anda" value="<?php echo $row_akaun['emel'] ?>" disabled>
        </div>

            <div class="form-element my-4">
                <input type="submit" name="aduanuser" value="Hantar" class="btn btn-primary">
            </div>
        </form>
</body>
</html>