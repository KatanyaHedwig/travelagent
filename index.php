<?php
    session_start();
    if (isset($_SESSION['email'])) {
      echo'';  
    }else{
      header('location:login/index.php'); 
    }
?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Travel Planning">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.21, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#0b7522">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-c246"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="" class="u-image u-logo u-image-1">
          <img src="images/logo1.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#!" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.php" style="padding: 10px 20px;">Daftar</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.php" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="login/index.php" style="padding: 10px 20px;">Login</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php">Daftar</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="login/index.php">Login</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-palette-2-base u-section-1" src="" id="carousel_3171">
      <div class="u-expanded-width u-grey-10 u-shape u-shape-rectangle u-shape-1"></div>
      <h2 class="u-text u-text-body-color u-text-default-lg u-text-default-xl u-text-1">Travel Planning</h2>
      <p class="u-text u-text-body-color u-text-2">Atur destinasi, jadwal, dan keseruan Anda disini!</p>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <img alt="" class="u-expanded-width u-image u-image-round u-radius-30 u-image-1" src="images/dd.jpg" data-image-width="1380" data-image-height="920">
              <h5 class="u-text u-text-black u-text-default u-text-3">PIKNIK</h5>
              <p class="u-text u-text-grey-50 u-text-4">Atur jadwal berangkat, pulang, lama liburan sepuasnya!</p>
              <a href="About.php" class="u-active-none u-align-center u-border-1 u-border-active-grey-60 u-border-black u-border-hover-grey-60 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">more</a>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-video-cover u-white">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <img alt="" class="u-expanded-width u-image u-image-round u-radius-30 u-image-2" src="images/map-lying-wooden-table_53876-23516.jpg" data-image-width="1380" data-image-height="901">
              <h5 class="u-text u-text-black u-text-default u-text-5">Bersepeda</h5>
              <p class="u-text u-text-grey-50 u-text-6">Cari lokasi terbaikmu disini! Mulai dari wisata hingga petualangan menarik!</p>
              <a href="About.php" class="u-active-none u-align-center u-border-1 u-border-active-grey-60 u-border-black u-border-hover-grey-60 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">more</a>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-video-cover u-white">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <img alt="" class="u-expanded-width u-image u-image-round u-radius-30 u-image-3" src="images/couple-travelers-pointing-directions_23-2147643192.webp" data-image-width="1380" data-image-height="920">
              <h5 class="u-text u-text-black u-text-default u-text-7">Tur keliling kota</h5>
              <p class="u-text u-text-grey-50 u-text-8">Berkeliling kota dengan kendaraan umum, sesuaikan juga dengan keinginanmu!</p>
              <a href="About.php" class="u-active-none u-align-center u-border-1 u-border-active-grey-60 u-border-black u-border-hover-grey-60 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-3">more</a>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-video-cover u-white">
            <div class="u-container-layout u-similar-container u-container-layout-4">
              <img alt="" class="u-expanded-width u-image u-image-round u-radius-30 u-image-4" data-image-width="1380" data-image-height="987" src="images/breathtaking-scenery-snowy-rocks-cloudy-sky-dolomiten-italy_181624-12706.webp">
              <h5 class="u-text u-text-black u-text-default u-text-9">Mendaki</h5>
              <p class="u-text u-text-grey-50 u-text-10">Kunjungi wilayah yang belum pernah kamu jamah! Tunggu apalagi, ayo pesan sekarang!</p>
              <a href="About.php" class="u-active-none u-align-center u-border-1 u-border-active-grey-60 u-border-black u-border-hover-grey-60 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-4">more</a>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-video-cover u-white">
            <div class="u-container-layout u-similar-container u-container-layout-5">
              <img alt="" class="u-expanded-width u-image u-image-round u-radius-30 u-image-5" data-image-width="1380" data-image-height="920" src="images/couple-sunrise-beach_1153-8733.jpg">
              <h5 class="u-text u-text-black u-text-default u-text-11">Tur Romantis</h5>
              <p class="u-text u-text-grey-50 u-text-12">Bosan solo travelling? Ajak pasanganmu menemukan pengalaman baru disini!!</p>
              <a href="About.php" class="u-active-none u-align-center u-border-1 u-border-active-grey-60 u-border-black u-border-hover-grey-60 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-5">more</a>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-video-cover u-white">
            <div class="u-container-layout u-similar-container u-container-layout-6">
              <img alt="" class="u-expanded-width u-image u-image-round u-radius-30 u-image-6" data-image-width="1380" data-image-height="920" src="images/tourist-making-photo-nature_1150-7742.webp">
              <h5 class="u-text u-text-black u-text-default u-text-13">Solo travel</h5>
              <p class="u-text u-text-grey-50 u-text-14">Ingin menjelajah tempat baru ataupun mencari tempat menyendiri? Atur sekarang juga!</p>
              <a href="About.php" class="u-active-none u-align-center u-border-1 u-border-active-grey-60 u-border-black u-border-hover-grey-60 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-6">more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-acee"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Copyright @ Pemrograman Web Lanjut</p>
      </div></footer>
  </body>
</html>