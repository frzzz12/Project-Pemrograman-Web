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
  <title>Project Tinanggea 1M</title>
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

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <!-- Uncomment the line below if you also wish to use text logo -->
        <!-- <h1 class="sitename">Butterfly</h1>  -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about"><?= $row1[1]?></a></li>
          <li><a href="#services"><?= $row2[1]?></a></li>
          <li><a href="#portfolio"><?= $row3[1]?></a></li>
          <li><a href="#team"><?= $row4[1]?></a></li>
          <li><a href="#contact"><?= $row5[1]?></a></li>
          <li><a href="layout/admin/admin.php"><i class="fa-solid fa-user-tie" style="font-size: 1.1rem"></i></a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-md-start" data-aos="fade-up">
            <h2>SELAMAT DATANG DI SISTEM INFORMASI KECAMATAN TINANGGEA</h2>
            <div class="d-flex mt-4 justify-content-center justify-content-md-start">
              <a href="#about" class="cta-btn">Get Started</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/<?= $row1[4]?>" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 position-relative" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/<?= $row1[4]?>" class="img-fluid rounded" alt="" style='width: 1000px'>
            <a href="https://youtu.be/N45Sbarw-jk?si=UfIYoxiZlPG93Bn5" class="glightbox pulsating-play-btn"></a>
          </div>

          <div class="col-lg-6 ps-lg-4 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <h3><?= $row1[1]?></h3>
            <p>
              <?= $row1[3]?>
            </p>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    
    <!-- Clients Section -->
    

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?= $row2 [1]?></h2>
        <p><?= $row2 [2]?></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="" data-aos="fade-up" data-aos-delay="100">
            <div class="d-flex gap-4">
              <div class="icon">
                <img src="assets/img/<?= $row2[4]?>" class="rounded" style="color: #0dcaf0;" style=></i>
              </div>
              <div class="" style="width: 500px;">
                <p><?=$row2 [3]?></p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->
    

    <!-- Testimonials Section -->
    

<!-- Team Section -->
<section id="team" class="team section bg-light py-5">
  <div class="container text-center">
    <div class="section-title mb-5">
      <h2>Team Kecamatan Tinanggea</h2>
      <hr class="mx-auto" style="width: 60px; border: 2px solid #0d6efd;">
      <p>Tim pengembang dan pengelola website Profil Kecamatan Tinanggea</p>
    </div>

    <div class="row gy-4 justify-content-center">

      <!-- 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="assets/Team/Team1.jpg" class="img-fluid" alt="Rizky Yamin">
            <div class="social"><h4>Muhammad Rizky Yamin</h4></div>
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="col-lg-3 col-md-6">
        <div class="member" data-aos="fade-up" data-aos-delay="200">
          <div class="member-img">
            <img src="assets/Team/Team2.jpg" class="img-fluid" alt="Tenri Liu Aspat Colle">
            <div class="social"><h4>Tenri Liu Aspat Colle</h4></div>
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div class="col-lg-3 col-md-6">
        <div class="member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="assets/Team/Team3.jpg" class="img-fluid" alt="Vyola Cecilia Potto">
            <div class="social"><h4>Vyola Cecilia Potto</h4></div>
          </div>
        </div>
      </div>

      <!-- 4 -->
      <div class="col-lg-3 col-md-6">
        <div class="member" data-aos="fade-up" data-aos-delay="400">
          <div class="member-img">
            <img src="assets/Team/Team4.jpg" class="img-fluid" alt="Fatih Muhammad Bintang Possumah">
            <div class="social"><h4>Fatih Muhammad Bintang Possumah</h4></div>
          </div>
        </div>
      </div>

      <!-- 5 -->
      <div class="col-lg-4 col-md-6">
        <div class="member" data-aos="fade-up" data-aos-delay="500">
          <div class="member-img">
            <img src="assets/Team/Team5.jpg" class="img-fluid" alt="Annisa Salsabila">
            <div class="social"><h4>Annisa Salsabila</h4></div>
          </div>
        </div>
      </div>

      <!-- 6 -->
      <div class="col-lg-4 col-md-6">
        <div class="member" data-aos="fade-up" data-aos-delay="600">
          <div class="member-img">
            <img src="assets/Team/Team6.jpg" class="img-fluid" alt="Rizkmah Lailatul">
            <div class="social"><h4>Rizkmah Lailatul</h4></div>
          </div>
        </div>
      </div>

      <!-- 7 -->
      <div class="col-lg-4 col-md-6">
        <div class="member" data-aos="fade-up" data-aos-delay="700">
          <div class="member-img">
            <img src="assets/Team/Team7.jpg" class="img-fluid" alt="Annisa Nurul Faizah">
            <div class="social"><h4>Annisa Nurul Faizah</h4></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
.team .member {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  transition: transform 0.3s;
  background: #fff;
}

.team .member:hover {
  transform: scale(1.03);
}

.team .member-img {
  position: relative;
  width: 100%;
  height: 350px; /* tinggi seragam */
  overflow: hidden;
  border-radius: 10px;
}

.team .member-img img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* penting agar tidak melewati frame */
  transition: 0.4s ease-in-out;
}

.team .member:hover .member-img img {
  filter: brightness(60%);
}

.team .member .social {
  position: absolute;
  inset: 0; /* ganti bottom/width jadi full */
  color: #fff;
  background: rgba(0, 0, 0, 0.55);
  opacity: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: opacity 0.3s ease-in-out;
}

.team .member:hover .social {
  opacity: 1;
}

.team .social h4 {
  font-size: 1.2rem;
  font-weight: bold;
  text-shadow: 0 0 10px rgba(0,0,0,0.4);
}
</style>


  
    </section><!-- /Team Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/batas.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/wilayah.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/topografi.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/geografis.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/DJI_0112.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/logo_konsel.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/menu-bg.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/penduduk.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Butterfly</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Butterfly</strong> <span>All Rights Reserved</span></p>
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