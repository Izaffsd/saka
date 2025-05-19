<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sistem Aduan Kerosakan Aset</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #f1f5f9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    nav.navbar {
      background-color: #C4D7FF;
      padding: 10px 0;
    }

    .navbar-brand {
      display: flex;
      align-items: center;
    }

    .navbar-brand img {
      height: 50px;
      width: auto;
    }

    .social-links {
      display: flex;
      gap: 5px;
    }

    .banner {
      background: url('img/banner.png') center center no-repeat;
      background-size: cover;
      height: 450px;
      position: relative;
      margin-bottom: 30px;
    }

    .banner-text {
      position: absolute;
      bottom: 0;
      width: 100%;
      text-align: center;
      color: white;
      background: rgba(0, 0, 0, 0.6);
      padding: 20px 15px;
    }

    .highlight {
      color: #f4b41a;
      font-weight: bold;
    }

    .login-title {
      margin: 40px 0 30px;
      text-align: center;
      font-weight: bold;
      color: #0b192c;
    }

    .boxes {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 40px;
      padding: 20px 0 50px;
    }

    .box {
      background: white;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      padding: 20px;
      text-align: center;
      width: 280px;
      height: 230px;
      transition: transform 0.3s ease;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .box:hover {
      transform: scale(1.05);
    }

    .box img {
      width: 100px;
      height: 100px;
      margin-bottom: 15px;
    }

    .box h3 {
      color: rgb(116, 46, 255);
      font-size: 18px;
      margin-top: 10px;
    }

    .footer {
      background-color: #C4D7FF;
      padding: 20px;
      text-align: center;
      font-size: 14px;
    }

    /* Media queries for responsive design */
    @media (max-width: 991px) {
      .navbar-brand span {
        font-size: 16px;
      }
      
      .social-links {
        margin-top: 10px;
      }
      
      .banner {
        height: 350px;
      }
    }

    @media (max-width: 767px) {
      .navbar {
        padding: 10px 0;
      }
      
      .navbar-brand {
        margin-bottom: 8px;
      }
      
      .social-links {
        display: flex;
        justify-content: center;
        width: 100%;
        margin-top: 15px;
      }
      
      .banner {
        height: 300px;
      }
      
      .banner-text h1 {
        font-size: 20px;
      }
      
      .boxes {
        gap: 20px;
      }
    }

    @media (max-width: 576px) {
      .navbar-brand img {
        height: 40px;
      }

      .navbar-brand span {
        font-size: 14px;
      }
      
      .nav-container {
        flex-direction: column;
      }
      
      .home-btn {
        margin-bottom: 10px;
        width: 100%;
      }
      
      .social-links {
        flex-wrap: wrap;
        gap: 8px;
        justify-content: center;
      }
      
      .social-links .btn {
        padding: 6px 10px;
      }

      .banner {
        height: 200px;
      }

      .banner-text {
        padding: 15px 10px;
      }
      
      .banner-text h1 {
        font-size: 16px;
      }

      .banner-text p {
        font-size: 12px;
        padding: 0 5px;
      }
      
      .login-title {
        font-size: 20px;
        margin: 20px 0;
      }

      .boxes {
        padding: 5px;
      }
      
      .box {
        width: 100%;
        height: 80%;
        padding: 30px;
      }

      .box img {
        width: 80px;
        height: 80px;
      }

      .box h3 {
        font-size: 16px;
      }

      .footer {
        font-size: 12px;
        padding: 15px 10px;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/305199717_985453492342369_1200662185772088661_n.png" alt="Logo" />
        <span class="ms-3 fw-bold fs-5 text-dark">Sistem Aduan Kerosakan Aset</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="ms-auto nav-container d-flex align-items-center">
          <a class="btn btn-outline-dark home-btn me-2" href="https://www.ilpkls.gov.my">
            <i class="fas fa-home"></i> Laman Utama
          </a>
          <div class="social-links">
            <a class="btn btn-outline-dark" href="https://www.facebook.com/ILPKUALALANGAT/"><i class="fa-brands fa-facebook"></i></a>
            <a class="btn btn-outline-dark" href="https://www.instagram.com/ilpkualalangat_official/?hl=en"><i class="fa-brands fa-instagram"></i></a>
            <a class="btn btn-outline-dark" href="https://www.youtube.com/@ILPKUALALANGAT"><i class="fa-brands fa-youtube"></i></a>
            <a class="btn btn-outline-dark" href="https://www.tiktok.com/@ilpkualalangat_official"><i class="fab fa-tiktok"></i></a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Banner -->
  <div class="banner">
    <div class="banner-text">
      <h1><span class="highlight">SISTEM ADUAN KEROSAKAN ASET</span></h1>
      <p>Sistem ini adalah satu alternatif bagi memudahkan pelajar, pensyarah dan kakitangan ILPKLS membuat aduan kerosakan secara atas talian</p>
    </div>
  </div>

  <!-- Log Masuk Section -->
  <div class="container">
    <h2 class="login-title">LOG MASUK SISTEM</h2>
    <div class="boxes">
      <a href="signup.php" class="text-decoration-none">
        <div class="box">
          <img src="img/register_6851123.png" alt="Register">
          <h3><b>REGISTER</b></h3>
        </div>
      </a>
      <a href="login_user.php" class="text-decoration-none">
        <div class="box">
          <img src="img/user_9795143.png" alt="User">
          <h3><b>LOGIN</b></h3>
        </div> 
      </a>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    ILP Kuala Langat Selangor &copy; 2024 Sistem Kerosakan Aset. All rights reserved.
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>