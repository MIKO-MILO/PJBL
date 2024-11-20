<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
  </head>
  <body>
    <!-- Tombol untuk membuka sidebar -->
    <div class="tombol">
      <a href="#modal">
        <div class="burger">
          <svg xmlns="http://www.w3.org/2000/svg" width="2vw" height="2vw" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" style="color: #fff; position: fixed;">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
          </svg>
        </div>
      </a>
      <div class="header-sekolah">
        <div class="logo-navbar"><img src="FOTO/picture1_2.png"/></div>
        <div class="top-right"><p align="right"><b>SMPN 4 Malang</b></p></div>
      </div>
    </div>

    <!-- Overlay dan sidebar menggunakan :target -->
    <div id="modal">
      <a href="#" class="modal-overlay"></a>
      <!-- Link untuk menutup sidebar saat klik di luar -->
      <div class="sidebar">
        <img src="FOTO/picture1_2.png"style="height: 3vw; width: auto;">
        <div style="margin-top: -2.5vw; padding-left: 3vw; padding-bottom: 1vw;"><h5><b><a href="index.php">SMPN 4 Malang</a></b></h5></div>
        <a href="index.php">Beranda</a>

        <!-- Dropdown untuk Services -->
        <div class="dropdown" id="services">
          <a href="#services" class="dropdown-toggle">Profil</a>
          <div class="dropdown-content">
            <a href="Profil.VisiMisi.php">Visi & Misi</a>
            <a href="DataGuru.php">Data Guru dan Karyawan</a>
          </div>
        </div>

        <div class="dropdown" id="services">
          <a href="#services" class="dropdown-toggle">Siswa</a>
          <div class="dropdown-content">
            <a href="#">Ekstrakulikuler</a>
            <a href="#">Tatib</a>
          </div>
        </div>

        <div class="dropdown" id="services">
          <a href="#services" class="dropdown-toggle">Informasi Sekolah</a>
          <div class="dropdown-content">
            <a href="#">Fasilitas</a>
            <a href="#">Kontak</a>
            <a href="#">Prestasi</a>
          </div>
        </div>

        <div class="dropdown" id="services">
          <a href="#services" class="dropdown-toggle">Gallery</a>
          <div class="dropdown-content">
            <a href="GalleryFoto.php">Foto</a>
            <a href="#">Vidio</a>
          </div>
        </div>
        <a href="#">Berita</a>
        <a href="Perpus.php">Perpustakaan</a>

        <a href="#" class="close-btn">Close Sidebar</a>
    </div>

    <div class="centered">
      <h1 class="text-center" style="font-size: 4vw; color: #fff; margin-top: 13vw;"><b> Selamat Datang<br>SMPN 4 Malang </b></h1>
    </div>