<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Peminjaman Barang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>BUMDesa Klapagading<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{url('/index');}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('/profile');}}">Profile</a></li>
          <li><a class="nav-link scrollto" href="{{url('/blog');}}">Berita</a></li>
          <li><a class="nav-link scrollto" href="{{url('/portofolio');}}">Portfolio</a></li>
          <li class="dropdown megamenu"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href=" {{url('/pkeuangan');}}">Peminjaman Keuangan</a>
                <a href="{{url('/pbarang');}}">Peminjaman Barang</a>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Peminjaman Barang</h2>
          <ol>
            <li><a href="index.html">Layanan</a></li>
            <li>Peminjaman Barang</li>
            <li>Konfimasi Peminjaman</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Form Section ======= -->
    <section id="pbarang" class="portfolio" data-aos="fade-up">

        <div class="container">
            <div class="section-header">
                <h2>Konfirmasi Peminjaman</h2>
            </div>
            <form>
                <div class="row mb-3">
                    <label for="inputnik" class="col-sm-2 col-form-label">Barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputnik" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputnik" class="col-sm-2 col-form-label">Total Harga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputnik" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputpilih" class="col-sm-2 col-form-label">Pilih Metode Bayar</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <select class="form-control" id="selectForm">
                                <option selected>Pilih</option>
                                <option value="form1">Transfer</option>
                                <option value="form2">COD</option>
                            </select>
                          </div>
                      </div>
                    </div>
                    <div id="formContainer"></div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0"></h4>
                        <button type="button" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
            
        </div>

  </main><!-- End #main -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#selectForm').on('change', function() {
        var selectedForm = $(this).val();

        // Hapus form sebelumnya jika ada
        $('#formContainer').empty();

        // Tambahkan form upload file baru berdasarkan pilihan
        if (selectedForm === 'form1') {
          var form1 = '<form id="form2">' +
                        '<div class="form-group">' +
                          '<label for="inputpilih" class="col-sm-2 col-form-label">Bukti Pembayaran</label>' +
                          '<input type="file" class="form-control-file" id="file1">' +
                        '</div>' +
                      '</form>';
          $('#formContainer').append(form1);
        }
      });
    });
  </script>
</body>

</html>