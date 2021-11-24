<!DOCTYPE >

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ASIPS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.6.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-github"></i> <a href="https://github.com/PascallisHenoch/projectPWBF">PWBF Kelompok 4 || Universitas Airlangga</a>
      </div>

    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#">ASIPS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index." class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Edukasi</a></li>
          <li><a class="nav-link scrollto" href="#departments">Informasi</a></li>
          <li><a class="nav-link scrollto" href="#services">Pengguna</a></li>
          <li><a class="nav-link scrollto" href="#appointment">Posyandu</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="/register">Registrasi</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="/login" class="appointment-btn scrollto"><span class="d-none d-md-inline">Login</span></a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>SELAMAT DATANG DI ASIPS</h1>
      <h2>Aplikasi Surveilans & Informasi Pencegahan Stunting</h2>
      <a href="#appointment" class="btn-get-started scrollto">Mulai</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Apa itu ASIPS?</h3>
              <p>
                Aplikasi Surveilans & informasi Pencegahan Stunting (ASIPS) adalah aplikasi tepat guna yang 
            dapat menghubungkan antara kader posyandu dengan pihak puskesmas dan orang tua dalam pencatatan 
            status gizi balita sebagai upaya pencegahan stunting.
              </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-6 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-3">
                    <i class="bx bxs-info-circle"></i>
                    <h6></h6>
                    <b> Berdasarkan data World Bank tahun 2020 menunjukkan bahwa kasus stunting di Indonesia berada di urutan peringkat 115 dari 151 negara di dunia.</b>
                  </div>
                </div>
                <div class="col-xl-6 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-3">
                    <i class="bx bxs-info-circle"></i>
                    <h6></h6>
                    <b>Berdasarkan data estimasi UNICEF, ada 31,8 persen anak stunting di Indonesia, sehingga Indonesia meraih predikat very high atau sangat tinggi.</b>
                  </div>
                </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-2">&nbsp;</div>
          <div class="col-xl-8 col-lg-8 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=RoopQlMzLao&ab_channel=INAHEALTH" class="glightbox play-btn mb-4"></a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Mengenal Stunting Lebih Dekat</h2>
          <p>Stunting adalah masalah gizi akibat kurangnya asupan gizi dalam jangka waktu panjang sehingga mengakibatkan terganggunya pertumbuhan anak. </p>
          <p>Biasanya, stunting mulai terjadi saat anak masih berada dalam kandungan dan terlihat saat mereka memasuki usia dua tahun.</p>
          <p>Stunting menjadi penyebab tinggi badan anak terhambat, sehingga lebih rendah dibandingkan anak-anak seusianya.</p>
        </div>
        <br><br>
        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Faktor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Dampak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Cara Mencegah</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Faktor</h3>
                    <p class="description">1. Faktor gizi buruk yang dialami ibu hamil dan anak balita</p>
                    <p class="description">2. Kurangnya pengetahuan ibu mengenai gizi</p>
                    <p class="description">3. Kurangnya akses air bersih dan sanitasi</p>
                    <p class="description">4. Kurangnya akses makanan bergizi karena ketidakmampuan biaya</p>
                    <p class="description">5. Rendahnya berat badan bayi ketika lahir</p>
                    <p class="description">6. Tidak mendapatkan ASI eksklusif menyebabkan malnutrisi pada anak</p>
                    <p class="description">7. Melewatkan imunisasi bisa mengalami infeksi berulang pada anak</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/satu.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Dampak</h3>
                    <p class="description">1. Wajah tampak lebih muda dari anak seusianya</p>
                    <p class="description">2. Pertumbuhan tubuh dan gigi yang terlambat</p>
                    <p class="description">3. Memiliki kemampuan fokus dan memori belajar yang buruk</p>
                    <p class="description">4. Berat badan lebih ringan untuk anak seusianya</p>
                    <p class="description">5. Postur tubuh tidak optimal saat dewasa dibandingkan pada umumnya</p>
                    <p class="description">6. Meningkatnya risiko obesitas dan penyakit lainnya</p>
                    <p class="description">7. Menurunnya kesehatan reproduksi</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/duaa.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cara Mencegah</h3>
                    <p class="description">1. Memenuhi kebutuhan gizi sejak hamil</p>
                    <p class="description">2. Beri ASI Eksklusif sampai bayi berusia 6 bulan</p>
                    <p class="description">3. Terus memantau tumbuh kembang anak</p>
                    <p class="description">4. Selalu jaga kebersihan lingkungan</p>
                    <p class="description">5. Meningkatkan persalinan di fasilitas kesehatan</p>
                    <p class="description">6. Menyelenggarakan konseling Inisiasi Menyusu Dini</p>
                    <p class="description">7. Penyuluhan dan pelayanan KB</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/tiga.jpeg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section><!-- End Departments Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="section-title">
          <h2>Sebaran Data</h2>
          <p>Informasi mengenai jumlah sebaran data yang ada di Indonesia</p>
        </div>
       <p></p>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="34" data-purecounter-duration="1" class="purecounter"></span>
              <p>Provinsi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="514" data-purecounter-duration="1" class="purecounter"></span>
              <p>Kota/Kabupaten</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="296777" data-purecounter-duration="1" class="purecounter"></span>
              <p>Posyandu</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2>Pengguna Aplikasi</h2>
      <p>Aplikasi ini dapat digunakan oleh berbagai pihak, mulai dari kader posyandu untuk melakukan pencatatan pemeriksaan berat badan dan tinggi anak, puskesmas, desa dan dinas terkait untuk mendapatkan laporan tentang data stunting.</p>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-user-edit"></i></div>
          <h4>Kader Posyandu</a></h4>
          <p>Pencatatan dan pelaporan penimbangan anak oleh kader mudah melalui aplikasi Android, WhatsApp atau Web.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-users"></i></div>
          <h4>Orang Tua Balita</a></h4>
          <p>Cek status gizi anak dengan mudah. Dan pantau hasil penimbangan anak. Dan pelajari pencegahan stunting melalui aplikasi</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-user-cog"></i></div>
          <h4>Super Admin</a></h4>
          <p>Monitoring, evaluasi dan kelola data penimbangan anak dari posyandu secara lebih efektif, real time dan paper less.</p>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg">
  <div class="container">

    <div class="section-title">
      <h2>History Posyandu</h2>
      <p>Masukkan NIK orang tua anak pada kolom di bawah ini dan klik cari untuk mengetahui informasi history posyandu pada anak</p>
    </div>

    <div class="row">
      <div class="col-md-4 form-group mt-3 mt-md-0">
      </div>
      <div class="col-md-4 form-group mt-3 mt-md-0">
        <input type="text" class="form-control" name="nik" id="nik" placeholder="Cari NIK" data-rule="nik" data-msg="NIK salah">
        <div class="validate"></div>
      </div>
      <div class="col-md-4 form-group mt-3 mt-md-0">
      </div>
    </div>
    <p></p>
    <div class="text-center"><button class="btn btn-success" onclick="search()">Cari</button></div>

    <table id="example1" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th style="width: 1%;">No</th>
          <th>Nama Balita</th>
          <th>Tanggal Posyandu</th>
          <th>Berat Badan</th>
          <th>Tinggi Badan</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>

  </div>
</section><!-- End Appointment Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Galeri Edukasi</h2>
          <p>Berikut ini beberapa galeri edukasi yang kami sediakan untuk lebih mudah memahami</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/11.jpg" class="galelry-lightbox">
                <img src="img/gallery/11.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/22.png" class="galelry-lightbox">
                <img src="img/gallery/22.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/77.jpeg" class="galelry-lightbox">
                <img src="img/gallery/77.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/aa.jpg" class="galelry-lightbox">
                <img src="img/gallery/aa.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/55.jpg" class="galelry-lightbox">
                <img src="img/gallery/55.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/66.jpg" class="galelry-lightbox">
                <img src="img/gallery/66.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/44.jpg" class="galelry-lightbox">
                <img src="img/gallery/44.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="img/gallery/88.jpg" class="galelry-lightbox">
                <img src="img/gallery/88.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->
    

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>FAQ</h2>
          <p>Berikut ini beberapa pertanyaan yang sering muncul dan kami merangkumnya dalam kolom pertanyaan di bawah ini</p>
          <p>Selamat Membaca😉😉😉</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apakah semua perawakan pendek disebut stunting? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Stunting bagian dari perawakan pendek, disebabkan kondisi kesehatan atau nutrisi sub-optimal terutama kualitas dan kuantitas asupan makanan yang salah. Disebut perawakan pendek jika panjang badan atau tinggi badan menurut umur berada di bawah Zscore -2 WHO Growth Standard.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Tanda-tanda awal stunting dimulai dan sejak kapan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Usia 2-3 bulan, dimulai dari berat badan kurang atau menurun dan terus dibiarkan. Begitu berat badan turun, asupan energi tidak cukup. Pada anak yang beratnya di bawah 10 kg, 50 persen energi digunakan untuk perkembangan otak. Bila dia kekurangan energi, yang menjadi korban adalah otaknya.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Adakah makanan khusus untuk mencegah stunting? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Makan asupan yang merangsang pertumbuhan tinggi, energi (karbohidrat dan lemak), harus cukup protein terutama hewani karena zat ini akan dipakai untuk tumbuh. Batita dianjurkan mengonsumsi 1,1 gram protein/kg/berat badan yang berkualitas tinggi (mengandung asam amino esensial lengkap) setiap hari, yang didapat dari sumber hewani seperti daging sapi, ayam, ikan, telur atau susu.

                  Penelitian menunjukkan anak yang mendapat protein 15 persen dari total asupan kalori mempunyai tinggi badan lebih daripada mereka yang mendapatkan protein 7,5 persen.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Apakah stunting tergolong penyakit serius dan susah untuk disembuhkan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Stunting bukan penyakit, tapi kondisi gagal tumbuh karena kurangnya asupan makanan dan terjadinya infeksi berulang dalam jangka waktu tertentu (kronis) yang terjadi pada periode emas atau 1.000 HPK seorang anak yaitu  sejak berada dalam kandungan hingga usia 2 tahun.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Apakah stunting hanya terjadi pada keluarga yang kurang mampu secara ekonomi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Mengingat faktor resiko/penyebab yang multidimensi (lihat penjelasan di no 5), maka stunting akibat masalah gizi kronis tidak hanya terkait dengan masalah ekonomi. Baik anak dari keluarga yang mampu maupun tidak mampu secara ekonomi dapat beresiko mengalami stunting. Sebagai contoh: pola asuh yang kurang optimal, kondisi lingkungan yang kurang bersih atau mengalami polusi, akses ke informasi gizi kesehatan yang tepat, dll dapat menjadi faktor resiko stunting yang tidak selalu dikarenakan masalah ekonomi keluarga..
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Tentang Kami</h2>
          <p>Kelompok 4 PWBF Praktikum</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="img/doctors/aku1.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Pascallis Henoch</h4>
                <span>152011513025</span>
                <p>Universitas Airlangga</p>
                <div class="social">
                  <a href="https://wa.me/62895703300407"><i class="ri-whatsApp-fill"></i></a>
                  <a href="https://www.instagram.com/pascallishenoch_/"><i class="ri-instagram-fill"></i></a>
                  <a href="https://github.com/PascallisHenoch"><i class="ri-github-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="img/doctors/aku2.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Adhiba Alya</h4>
                <span>152011513004</span>
                <p>Universitas Airlangga</p>
                <div class="social">
                  <a href="https://wa.me/6285851039374"><i class="ri-whatsApp-fill"></i></a>
                  <a href="https://www.instagram.com/adhibaalyaff_/"><i class="ri-instagram-fill"></i></a>
                  <a href="https://github.com/adhibaAlya"><i class="ri-github-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Doctors Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>PWBF Kelompok 4</span></strong>. All Rights Reserved
        </div>
      </div>

      <div class="me-md-right text-center text-md-right pt-3 pt-md-0">
        <div class="copyright2">
          Universitas Airlangga
        </div>
      </div>

      
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('admin/dist/js/demo.js') }}"></script>

  <script>
		$(function () {
			$('#example1').DataTable({
        searching: false,
        ajax: {
          url: "/history_posyandu/show/0",
          type: "GET"
        },
      });
		});

    function search() {
      var nik = "0";
      if($("#nik").val() != "") {
        nik = $("#nik").val();
      }
      $('#example1').DataTable().ajax.url("/history_posyandu/show/" + nik).load();
    }
  </script>
</body>

</>