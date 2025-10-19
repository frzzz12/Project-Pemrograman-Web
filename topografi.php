<?php 
include 'config/function.php';

$data1 = mysqli_query($hub, "SELECT * FROM uraian WHERE id_uraian=1");
$data2 = mysqli_query($hub, "SELECT * FROM uraian WHERE id_uraian=2");
$data3 = mysqli_query($hub, "SELECT * FROM uraian WHERE id_uraian=3");
$data4 = mysqli_query($hub, "SELECT * FROM uraian WHERE id_uraian=4");
$data5 = mysqli_query($hub, "SELECT * FROM uraian WHERE id_uraian=5");
$data6 = mysqli_query($hub, "SELECT * FROM uraian WHERE id_uraian=6");
$data7 = mysqli_query($hub, "SELECT * FROM uraian WHERE id_uraian=9");

$row1 = mysqli_fetch_row($data1);
$row2 = mysqli_fetch_row($data2);
$row3 = mysqli_fetch_row($data3);
$row4 = mysqli_fetch_row($data4);
$row5 = mysqli_fetch_row($data5);
$row6 = mysqli_fetch_row($data6);
$row7 = mysqli_fetch_row($data7);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Data Geografis</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Butterfly
  * Template URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <!-- Uncomment the line below if you also wish to use text logo -->
        <!-- <h1 class="sitename">Butterfly</h1>  -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="datageografis.php"><?= $row1[1]?></a></li>
          <li><a href="datakependudukan.php"><?= $row2[1]?></a></li>
          <li><a href="kecamatan.php"><?= $row3[1]?></a></li>
          <li><a href="topografi.php" class="active"><?= $row4[1]?></a></li>
          <li><a href="wilayah.php"><?= $row5[1]?></a></li>
          <li><a href="layout/admin/admin.php"><i class="fa-solid fa-user-tie" style="font-size: 1.1rem"></i></a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          
          <div class="col-lg-6 position-relative" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/<?= $row4[4]?>" class="img-fluid rounded" alt="" style='width: 1000px'>
          </div>
          <div class="col-lg-6 ps-lg-4 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <h3><?= $row4[1]?></h3>
            <p>
              <?= $row4[3]?>
            </p>
            <div>
              <button class="btn" style="background-color: #49b5e7;">
                <a href="index.php" class="text-light fw-bold">Kembali</a>
              </button>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    
    <!-- Clients Section -->
    

        

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Kelompok 2</span>
          </a>
          <p>Website ini dikembangkan oleh Kelompok 2 sebagai platform digital untuk mempermudah akses informasi dan layanan di Kecamatan Tinanggea. Sistem ini memuat data profil kecamatan, informasi pelayanan publik, berita terkini, serta pengelolaan administrasi secara terintegrasi. Dengan adanya sistem ini, masyarakat dapat memperoleh informasi dengan cepat, transparan, dan efisien.</p>
          <!-- <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div> -->
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#about"><?= $row1[1]?></a></li>
          <li><a href="index.php#services"><?= $row2[1]?></a></li>
          <li><a href="index.php#wilayahKecamatan"><?= $row3[1]?></a></li>
          <li><a href="index.php#batasWilayah"><?= $row5[1]?></a></li>
          </ul>
        </div>

        <!-- <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div> -->

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Tinanggea, Konawe Selatan</p>
          <p>Sulawesi Tenggara</p>
          <p>Indonesia</p>
          <p class="mt-4"><strong>Phone:</strong> <a href="https://bit.ly/4osisQu"> <span>+62 811 1234 5678</span></p>
          <p><strong>Email:</strong> <a href="https://bit.ly/47fsmy2"> <span>programmer_softspoken@gmail.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Kelompok 2</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>