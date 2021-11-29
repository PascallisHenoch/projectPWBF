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
<div id="topbar2" class="d-flex align-items-center fixed-top">
  <div class="container d-flex justify-content-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-person-check-fill"></i>| ROLE ORANG TUA</a>
      

    </div>
    <div class="d-none d-lg-flex social-links align-items-center">
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <form action="/logout" method="post">
          @csrf
          <div>
            <p></p>
              <button type="submit"><i class="nav-icon fas fa-sign-out-alt"></i> Logout </button>
          </div>
        </form>
    </ul>
    </div>
  </div>
</div>

  <main id="main">

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
    <p></p>
    
  </div>
</section><!-- End Appointment Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer2">

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