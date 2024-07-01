<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - pphbesari</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/pph/logo.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Jun 14 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="#hero" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/pph/logo.png" alt="" >
        {{-- <h1 class="sitename">Pondok Pesantren KH. Hasan Besari</h1> --}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">Profil</a></li>
          <li><a href="#program">Program</a></li>
          <li><a href="#kegiatan">Kegiatan</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      {{-- <a class="btn-getstarted" href="courses.html">Get Started</a> --}}

    </div>
  </header>

  <main class="main">
    @yield('main')
</main>

<footer id="footer" class="footer position-relative">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="#hero" class="d-flex align-items-center " >
            <img src="assets/pph/logo2.png" alt="" style="width: 50%">
          {{-- <span class="sitename">Mentor</span> --}}
        </a>
        <div class="footer-contact pt-3">
         
        </div>
       
      </div>

      <div class="col-lg-4 col-md-3 footer-links my-auto">
        <h4>Alamat</h4>
        <p>Kedung, Guwosari, Kec. Pajangan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55751</p>
        <p class="mt-3"><strong>Hp/Telp:</strong> <span>+628-1312-4307-14</span></p>
        <p><strong>Email:</strong> <span>pphbesari@gmail.com</span></p>
      </div>

      <div class="col-lg-4 col-md-3 footer-links my-auto">
        <h4>Follow Sosial Media Kami</h4>
        <div class="social-links d-flex mt-4">
            {{-- <a href=""><i class="bi bi-twitter-x"></i></a> --}}
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/hasanbesari.ppspa/" target="_blank"><i class="bi bi-instagram"></i></a>
            {{-- <a href=""><i class="bi bi-linkedin"></i></a> --}}
          </div>
      </div>

    

    </div>
  </div>

  <div class="container-fluid copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">PONDOK PESANTREN KH.BESARI</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you've purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
    </div>
  </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
{{-- <div id="preloader"></div> --}}

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll(".navmenu ul li a");

  // Function to handle scrolling to section when nav link is clicked
  navLinks.forEach(link => {
    link.addEventListener("click", function(e) {
      e.preventDefault(); // Prevent default anchor click behavior
      const targetId = this.getAttribute("href").substring(1); // Get target id
      const targetSection = document.getElementById(targetId); // Get target section

      targetSection.scrollIntoView({ behavior: "smooth" }); // Scroll to target section smoothly

      // Update active class
      navLinks.forEach(link => link.classList.remove("active"));
      this.classList.add("active");
    });
  });

  // Function to update active class on scroll
  window.onscroll = () => {
    let current = "";

    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      if (pageYOffset >= sectionTop - sectionHeight / 3) {
        current = section.getAttribute("id");
      }
    });

    navLinks.forEach(link => {
      link.classList.remove("active");
      if (link.getAttribute("href").includes(current)) {
        link.classList.add("active");
      }
    });
  };
});

  document.getElementById('whatsapp-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var name = document.getElementById('name').value;
    var message = document.getElementById('message').value;

    var whatsappMessage = `Assalamu'alaikum, perkenalkan nama saya ${name}. ${message}`;
    var whatsappUrl = `https://wa.me/+6281312430714?text=${encodeURIComponent(whatsappMessage)}`;

    window.open(whatsappUrl, '_blank');
  });

</script>
</body>

</html>