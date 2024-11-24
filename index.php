<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 15 Malang</title>
    <!-- HREF CSS, FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Jost:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="template.css">
</head>
<body>
    <h1 hidden>Hello World</h1>
    
<?php
// Menentukan halaman yang aktif
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-title navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center flex-wrap" href="index.php?page=home" class="nav-link <?= ($page == 'home') ? 'active' : '' ?>">
            <img src="images/logo.png" alt="Logo" class="logo-img me-2">
            <div class="brand-text">
                <span class="text"><b>SMPN 15 Malang</b></span>
                <small class="text-white motto">TAQWA, CERDAS, TERAMPIL, BERKARAKTER</small>
            </div>
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="index.php?page=home" class="nav-link <?= ($page == 'home') ? 'active' : '' ?>">Beranda</a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=profil" class="nav-link <?= ($page == 'profil') ? 'active' : '' ?>">Profil</a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=akademik" class="nav-link <?= ($page == 'akademik') ? 'active' : '' ?>">Akademik</a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=siswa" class="nav-link <?= ($page == 'siswa') ? 'active' : '' ?>">Siswa</a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=fasilitas" class="nav-link <?= ($page == 'fasilitas') ? 'active' : '' ?>">Fasilitas</a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=pendaftaran" class="nav-link <?= ($page == 'pendaftaran') ? 'active' : '' ?>">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=berita" class="nav-link <?= ($page == 'berita') ? 'active' : '' ?>">Berita & Acara</a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=galeri" class="nav-link <?= ($page == 'galeri') ? 'active' : '' ?>">Galeri</a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=kontak" class="nav-link <?= ($page == 'kontak') ? 'active' : '' ?>">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Pemanggilan konten --> 
  <?php
  switch ($page) {
      case 'home':
          include 'pages/home.php';
          break;
      case 'profil':
          include 'pages/profil.php';
          break;
      case 'akademik':
          include 'pages/akademik.php';
          break;
      case 'siswa':
          include 'pages/siswa.php';
          break;
      case 'fasilitas':
          include 'pages/fasilitas.php';
          break;
      case 'pendaftaran':
          include 'pages/pendaftaran.php';
          break;
      case 'berita':
          include 'pages/berita.php';
          break;
      case 'galeri':
          include 'pages/galeri.php';
          break;
      case 'kontak':
          include 'pages/kontak.php';
          break;
      case 'organisasi':
           include 'pages/organisasi.php';
           break;
      case 'keterampilan':
           include 'pages/keterampilan.php';
           break;
      case 'olahraga':
           include 'pages/olahraga.php';
           break;
      case 'read_more':
            include 'pages/read_more.php';
            break;
      case 'read_more1':
            include 'pages/read_more1.php';
            break;
      case 'read_more2':
            include 'pages/read_more2.php';
            break;
      case 'read_more3':
            include 'pages/read_more3.php';
            break;
      case 'read_more4':
            include 'pages/read_more4.php';
            break;
      case 'read_more5':
            include 'pages/read_more5.php';
            break;
      case 'read_more6':
            include 'pages/read_more6.php';
            break;
      case 'read_more7':
            include 'pages/read_more7.php';
            break;
      default:
          echo "<p>Halaman tidak ditemukan!</p>";
          break;
  }
  ?>

<!-- Footer -->
<footer class="py-5" style="background-color: #16325B; color: #ffffff;">
    <div class="container">
        <div class="row">
            <!-- Kolom Kiri: Sosial Media Sekolah -->
            <div class="col-md-4">
                <ul class="list-unstyled">
                    <li class="mb-4">
                        <a href="https://www.instagram.com/smpn15.mlg/" class="text-light" style="font-size: 1.2rem; text-decoration: none;">
                            <i class="fab fa-instagram fa-lg"></i> smpn.15mlg
                        </a>                       
                    </li>
                    <li class="mb-4">
                        <a href="https://www.facebook.com/p15malang/" class="text-light" style="font-size: 1.2rem; text-decoration: none;">
                            <i class="fab fa-facebook fa-lg"></i> Libel Malang
                        </a>                     
                    </li>
                    <li class="mb-4">
                        <a href="https://x.com/smp15mlg" class="text-light" style="font-size: 1.2rem; text-decoration: none;">
                            <i class="fab fa-twitter fa-lg"></i> @smp15mlg
                        </a>                       
                    </li>
                    <li class="mb-4">
                        <a href="http://www.youtube.com/@smpnegeri15malang59" class="text-light" style="font-size: 1.2rem; text-decoration: none;">
                            <i class="fab fa-youtube fa-lg"></i> SMP Negeri 15 Malang
                        </a>
                    </li>
                </ul>
            </div>
  
            <!-- Kolom Tengah: Informasi Sekolah -->
            <div class="col-md-4">
              <div class="info-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                      <g fill="none" fill-rule="evenodd">
                          <path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/>
                          <path fill="white" d="M11.063 2.469a1.5 1.5 0 0 1 1.753-.087l.121.087l4.312 3.45a2 2 0 0 1 .743 1.38L18 7.48V10h2a2 2 0 0 1 1.995 1.85L22 12v7.9a1.1 1.1 0 0 1-.98 1.094L20.9 21H3.1a1.1 1.1 0 0 1-1.094-.98L2 19.9V12a2 2 0 0 1 1.85-1.995L4 10h2V7.48a2 2 0 0 1 .614-1.442l.137-.12zM12 4.28l-4 3.2V19h8V7.48zM20 12h-2v7h2zM6 12H4v7h2zm6-4a3 3 0 1 1 0 6a3 3 0 0 1 0-6m0 2a1 1 0 1 0 0 2a1 1 0 0 0 0-2"/>
                      </g>
                  </svg>
                  <p class="text-white">Tujuan SMP Negeri 15 Malang adalah menciptakan lulusan yang cerdas, terampil, beriman, bertaqwa, serta peduli lingkungan.</p>
              </div>
          
              <div class="info-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                      <path fill="white" d="m12 20.9l4.95-4.95a7 7 0 1 0-9.9 0zm0 2.828l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4a2 2 0 0 0 0 4m0 2a4 4 0 1 1 0-8a4 4 0 0 1 0 8"/>
                  </svg>
                  <p class="text-white">Jl. Bukit Dieng Permai No.8 Blok T, Pisang Candi, Kec. Sukun, Kota Malang, Jawa Timur 65146.</p>
              </div>
          
              <div class="info-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                      <path fill="none" stroke="white" stroke-dasharray="64" stroke-dashoffset="64" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 3c0.5 0 2.5 4.5 2.5 5c0 1 -1.5 2 -2 3c-0.5 1 0.5 2 1.5 3c0.39 0.39 2 2 3 1.5c1 -0.5 2 -2 3 -2c0.5 0 5 2 5 2.5c0 2 -1.5 3.5 -3 4c-1.5 0.5 -2.5 0.5 -4.5 0c-2 -0.5 -3.5 -1 -6 -3.5c-2.5 -2.5 -3 -4 -3.5 -6c-0.5 -2 -0.5 -3 0 -4.5c0.5 -1.5 2 -3 4 -3Z">
                          <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/>
                      </path>
                  </svg>
                  <p class="text-white">(0341) 571715</p>
              </div>
                
                <!-- Logo-Logo -->
                <div class="d-flex mt-3">
                    <img src="images/tut-wuri-handayani.png" alt="Tut Wuri Handayani" style="width: 65px; margin: 0 10px;">
                    <img src="images/jawa-timur.png" alt="Jawa Timur" style="width: 50px; margin: 0 10px;">
                    <img src="images/kota-malang.png" alt="Kota Malang" style="width: 65px; margin: 0 10px;">
                    <img src="images/logo.png" alt="SMPN 15 Malang" style="width: 100px; margin: 0 -20px;">
                </div>
            </div>
  
            <!-- Kolom Kanan: Feedback Pengunjung -->
            <div class="col-md-4">
                <h2 class="text-center mb-4"><div class="putih">Feedback Pengunjung</div></h2>
                <form class="feedback-form" action="feedback/submit_feedback.php" method="POST">
                    <div class="mb-3 feedback-input">
                        <input type="text" class="form-control" name="name" placeholder="Nama" required>
                    </div>
                    <div class="mb-3 feedback-input">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3 feedback-input">
                        <textarea class="form-control" name="message" rows="1" placeholder="Pesan" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-light feedback-button">Kirim</button>
                </form>
            </div>
        </div>
    </div>
  
    <!-- Copyright -->
    <div class="container-fluid text-center mt-5" style="position: relative; bottom: 0; width: 100%; background-color: #16325B;">
        <small>&copy; SMP Negeri 15 Malang 2024 | Dikembangkan oleh Kelompok 5</small>
    </div>
  </footer>
  
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Sertakan jQuery, Popper.js, dan Bootstrap JS dari CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>