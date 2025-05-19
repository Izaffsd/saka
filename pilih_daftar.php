<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <title>Document</title>
  <style>

  *{
    box-sizing: border-box; 
  }
    /* General Styles */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.container-fluid {
  width: 90%;
  margin: auto;
  overflow: hidden;
  display:  flex;
  justify-content: space-between;
}

h1 {
  font-size: 2.5rem;
  text-align: center;
}

p {
  text-align: center;
  font-size: 1.2rem;
}

a {
  text-decoration: none;
  color: #333;
}

a:hover {
  color: #007bff;
}

/* Navbar Styles */
.navbar {
  background-color: #C4D7FF;
  padding: 10px 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.navbar-brand {
  margin-left: 10px;
}

.navbar-links {
  list-style-type: none;
  display: flex;
  margin-right: 10px;
}

.navbar-links li {
  margin-left: 20px;
}

.navbar-links .nav-link {
  font-size: 1rem;
  color: #333;
}

/* Banner Styles */
#banner {
  background: #e9ecef;
  padding: 50px 0;
  text-align: center;
}

#banner h1 {
  color: #333;
}

#banner .highlight {
  color: #007bff;
}

/* Newsletter Section */
#newsletter {
  background: #333;
  color: #fff;
  padding: 15px 0;
  text-align: center;
}

/* Boxes Section */
#boxes {
  padding: 30px 0;
}

#boxes .container {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

#boxes .box {
  width: 30%;
  padding: 20px;
  text-align: center;
  border: 1px solid #e9ecef;
  border-radius: 5px;
  margin-bottom: 20px;
}

#boxes img {
  width: 100px;
  height: 100px;
  margin-bottom: 15px;
}

#boxes h3 {
  font-size: 1.5rem;
  margin-bottom: 10px;
}

@media (max-width: 768px) {
  #boxes .box {
    width: 45%;
  }
}

@media (max-width: 600px) {
  #boxes .box {
    width: 100%;
  }
}

#back{
  width: 50px;

  margin-right: 85rem;
}

  </style>
</head>
<body>
  <!--Navbar-->
  <nav class="navbar">
    <div class="container-fluid">
  
        <img src="img/305199717_985453492342369_1200662185772088661_n.png" height="100px" alt="Sistem Aduan Kerosakan Aset"/>
      </a>
      <ul class="navbar-links">
        <li><a href="admin.php" class="btn btn-outline-danger" id="kembali"><b><</b></a></li>
      </ul>
    </div>
  </nav>
  <!--Banner-->
  <section id="banner">
    <div class="container">
      <h1><span class="highlight"><b>SISTEM ADUAN KEROSAKAN ASET DI ILPKLS</b></span></h1>
      <p>Sistem ini adalah satu alternatif baru bagi memudahkan pelajar, pensyarah dan kakitangan di ILPKLS untuk membuat aduan kerosakan asset secara atas talian</p>
    </div>
  </section>
  <!--Newsletter Section-->
  <section id="newsletter">
    <div class="container">
      <h1>PENTADBIR</h1>
    </div>
  </section>

  <!--Boxes Section-->
  <section id="boxes">
    <div class="container">
      <div class="box">
        <a href="create_user.php">
          <img src="img/team.png" alt="USER">
          <h3>USER</h3>
        </a>
      </div>
      <div class="box">
        <a href="create_bppa.php">
          <img src="img/staff.png" alt="STAFF">
          <h3>BPPA</h3>
        </a>
      </div>
      <div class="box">
        <a href="create_pengarah.php">
          <img src="img/boss.png" alt="PENGARAH">
          <h3>PENGARAH</h3>
        </a>
      </div>
    </div>
  </section>

</body>
</html>
