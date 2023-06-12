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
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Form Section ======= -->
    <section id="pbarang" class="portfolio" data-aos="fade-up">

        <div class="container">
            <div class="section-header">
                <h2>Peminjaman Barang</h2>
            </div>
            <form id="form-isi">
                <div class="row mb-3">
                    <label for="inputnik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputnik" required>
                    </div>
                  </div>
                <div class="row mb-3">
                  <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputnama" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputalamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputalamat" required>
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputtelp" class="col-sm-2 col-form-label">No Telpon</label>
                    <div class="col-sm-10">
                      <input type="tel" class="form-control" id="inputtelp" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputpilih" class="col-sm-2 col-form-label">Pilih barang</label>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class ="col-sm-11">
                          <select class="form-select" aria-label="Default select example" required>
                              <option selected>Barang yang mau dipinjam</option>
                              <option value="1">Sound System</option>
                              <option value="2">Tratak</option>
                              <option value="3">Kursi</option>
                          </select>
                        </div>
                        <div class ="col-sm-1">
                          <button type="button" class="btn btn-primary" onclick="addSelect()">+</button>
                        </div>
                        <br>
                        <div id="dynamic-fields"></div>
                      </div>
                    </div>
                </div>
                <div class="row mb-3">
                  <div class="row mb-3">
                    <label for="inputjml" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control" id="inputjml" required>
                    </div>
                    <label for="inputjml" class="col-sm-2 col-form-label">Sampai tanggal ke </label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control" id="inputjml" required>
                    </div>
                  </div>
                <div class="row mb-3">
                    <label for="inputalamat" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-5">
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Harga">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputktp" class="col-sm-2 col-form-label">Foto KTP</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02" required>
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                          </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <h4 class="header-title mb-0"></h4>
                  <button type="button" class="btn btn-primary">Daftar</button>
              </div>
              </form>
    
        </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>BUMDesa Klapagading</span></strong>. All Rights Reserved
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

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
  <script>
    function addSelect() {
      var dynamicFields = document.getElementById('dynamic-fields');
      var selectInputs = dynamicFields.getElementsByClassName('select-input');
      
      // Check if the maximum number of forms has been reached (3 forms)
      if (selectInputs.length >= 2) {
        return;
      }
      var newSelectId = selectInputs.length + 1;

      var formGroup = document.createElement('div');
      formGroup.classList.add('form-group');

      var selectLabel = document.createElement('label');
      selectLabel.textContent = 'Barang lainnya ';
      formGroup.appendChild(selectLabel);

      var selectInput = document.createElement('select');
      selectInput.classList.add('form-control', 'select-input');
      selectInput.name = 'select[]';
      selectInput.id = 'select';

      var option1 = document.createElement('option');
      option1.value = '1';
      option1.text = 'Sound System';
      selectInput.add(option1);

      var option2 = document.createElement('option');
      option2.value = '2';
      option2.text = 'Tratak';
      selectInput.add(option2);

      var option2 = document.createElement('option');
      option2.value = '3';
      option2.text = 'Kursi';
      selectInput.add(option2);

      formGroup.appendChild(selectInput);

      dynamicFields.appendChild(formGroup);
    }

  </script>

</body>

</html>