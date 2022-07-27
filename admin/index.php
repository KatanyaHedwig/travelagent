<?php
    session_start();
    if (isset($_SESSION['email'])) {
      echo'';  
    }else{
      header('location:../login/index.php'); 
    }
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Daftar</title>
    <link rel="stylesheet" href="../nicepage.css" media="screen">
    <link rel="stylesheet" href="../About.css" media="screen">
    <script class="u-script" type="text/javascript" src="../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.21, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="About">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-c246"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="" class="u-image u-logo u-image-1">
          <img src="../images/logo1.png" class="u-logo-image u-logo-image-1">
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
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="../index.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="../index.php" style="padding: 10px 20px;">List</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="../login/logout.php" style="padding: 10px 20px;">Logout</a>



</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../index.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../index.php">List</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../login/logout.php">Logout</a>

</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
      <div class="container-fluid" style="color: black">
        <?php
          if (isset($_POST['daftar'])) {
            include '../assets/mysql_connect/koneksi.php';
              $daftar = mysqli_query($koneksi, "INSERT INTO tb_user VALUES(
                NULL,
                '".$_POST['nama']."',
                '".$_POST['berangkat']."',
                '".$_POST['pulang']."',
                '".$_POST['destinasi']."',
                '".$_POST['paket']."',
                '".$_POST['jumlah']."')");                 
              if ($daftar) {
                echo '<h3 align="center" class="list-group-item list-group-item-success" >Berhasil Mendaftar</h3>';
              }else{
                echo '<h3 align="center" class="list-group-item list-group-item-Danger" >Pendaftaran Gagal </h3>'; 
              }
            }
        ?>
    <br>
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
          <div class="card-body">
                <h2 class="title" align="center">Pendaftaran Wisata</h2>
                <form method="POST">
                    <div class="input-group" >
                        <input class="input--style-2" type="text" placeholder="Nama Lengkap"  name="nama" required/>
                    </div>
                    <div class="col-4">
                            <div class="input-group">
                                <input class="input--style-2 js-datepicker" id="datepicker" type="text" placeholder="Tanggal Berangkat" name="berangkat" required/>
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                    </div>
                    <div class="col-4">
                            <div class="input-group">
                                <input class="input--style-2 js-datepicker" id="datepicker" type="text" placeholder="Tanggal Pulang" name="pulang" required/>
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                    </div>
                    <div class="row row-space">
                      <div class="col-6">
                        <div class="input-group rs-select2 js-select-simple select--no-search">
                            <select name="destinasi" required/>
                                <option disabled="disabled" selected="selected">Pilihan Destinasi</option>
                                <option>Tur Keliling Kota</option>
                                <option>Mendaki</option>
                                <option>Tur Romantis</option>
                                <option>Solo Travel</option>
                                <option>Piknik Bersama</option>
                                <option>Bersepeda</option>
                            </select>
                        <div class="select-dropdown"></div>
                      </div>
                    </div>
                    <div class="container-fluid">
                    <div class="row row-space">
                      <div class="col-6">
                        <div class="input-group rs-select2 js-select-simple select--no-search">
                            <select name="paket" required/>
                                <option disabled="disabled" selected="selected">Pilihan Paket</option>
                                <option>Tur Keliling Kota</option>
                                <option>Tur Mendaki</option>
                                <option>Tur Romantis</option>
                                <option>Tur Travel</option>
                                <option>Tur Piknik Bersama</option>
                                <option>Tur Bersepeda</option>
                            </select>
                        <div class="select-dropdown"></div>
                      </div>
                    </div>
              </div>
                      <div class="input-group col-4">
                        <input class="input--style-2" type="number" placeholder="Jumlah Peserta" name="jumlah" required maxlength="2"/>
                      </div>
                      <div class="p-t-30">
                      <input class="btn btn--radius btn--green" type="submit" name="daftar" value="Daftar" style="width: 400px;" />
                      </div>
                </form>
            </div>
        </div>
    </div>
  </div>
          </br>
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-acee"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Copyright @ Pemrograman Web Lanjut</p>
      </div></footer>

<!-- Javascript -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../assets/js/sb-admin-2.min.js"></script>
  <script src="../assets/vendor/select2/select2.min.js"></script>
  <script src="../assets/vendor/datepicker/moment.min.js"></script>
  <script src="../assets/vendor/datepicker/daterangepicker.js"></script>
  <script src="../assets/vendor/global.js"></script>
  </body>
</html>