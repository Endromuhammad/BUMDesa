<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin BUMDesa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/img/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="assets/img/icon/icon.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="{{url('/admin');}}" aria-expanded="true"><span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="{{url('/admin-berita');}}" aria-expanded="true"><span>Berita
                                    </span></a>
                            </li>
                            <li>
                                <a href="{{url('/admin-porto');}}" aria-expanded="true"><span>Portofolio
                                    </span></a>
                            </li>
                            <li  class="active">
                                <a href="{{url('/admin-pkeuangan');}}" aria-expanded="true"><span>Layanan Keuangan
                                    </span></a>
                            </li>
                            <li>
                                <a href="{{url('/admin-pbarang');}}" aria-expanded="true"><span>Layanan Peminjaman
                                    </span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6 clearfix">
                        <div class="breadcrumbs-area clearfix">
                            <div class="col-md-6 col-sm-8 clearfix">
                                <div class="nav-btn pull-left">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="search-box pull-left">
                                     <h4 class="page-title pull-left">Peminjaman Keuangan</h4>
                                        <ul class="breadcrumbs pull-left">
                                            <li><a href="admin.html">Home</a></li>
                                            <li><span>Peminjaman keuangan</span></li>
                                            <li><span> / Menambahkan Peminjaman Keuangan</span></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                
                <!-- Berita -->
                <div class="row mt-5 mb-5">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Menambahkan Data Peminjaman Keuangan</h4>
                                </div>
                                <div>
                                    <form>
                                        <br>
                                        <div class="mb-3">
                                            <label for="formnid" class="form-label">NIK</label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Nama Lengkap</label>
                                            <input class="form-control" type="text" id="formFile">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formjudul" class="form-label">No Telpon</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formjudul" class="form-label">Nominal Uang</label>
                                            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Kategori">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formjudul" class="form-label">Pilih Berapa Bulan</label>
                                            <input type="date" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formjudul" class="form-label">Biaya Perbulan</label>
                                            <input type="date" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Foto KTP</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Foto Memegang KTP</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Foto Kartu Keluarga</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0"></h4>
                                    <button type="button" class="btn btn-primary">Tambahkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- overview area end -->
                <!-- row area start -->
    </div>
    <!-- page container area end -->
    
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
