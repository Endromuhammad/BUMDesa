<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin BUMDesa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('assets/img/icon/icon.png')}}" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="@if ($page == 'dashboard') active @endif">
                                <a href="{{ route('dashboard')}}" aria-expanded="true"><span>Dashboard</span></a>
                            </li>
                            <li class="@if ($page == 'berita') active @endif">
                                <a href="{{ route('berita') }}" aria-expanded="true"><span>Berita
                                    </span></a>
                            </li>
                            <li class="@if ($page == 'portofolio') active @endif">
                                <a href="{{ route('portofolio') }}" aria-expanded="true"><span>Portofolio
                                    </span></a>
                            </li>
                            <li class="@if ($page == 'layanan-keuangan') active @endif">
                                <a href="{{ route('layanan_keuangan') }}" aria-expanded="true"><span>Layanan Keuangan
                                    </span></a>
                            </li>
                            <li class="@if ($page == 'layanan-peminjaman') active @endif">
                                <a href="{{ route('layanan_peminjaman') }}" aria-expanded="true"><span>Layanan Peminjaman
                                    </span></a>
                            </li>
                            <li class="@if ($page == 'stok') active @endif">
                                <a href="{{ route('stok') }}" aria-expanded="true"><span>Stok Barang
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
                                    <h4 class="page-title pull-left">Admin BUMDesa</h4>
                                    <ul class="breadcrumbs pull-left">
                                        <li><a href="index.html">Home</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 clearfix">
                    <div class="user-profile pull-right">
                        <img class="avatar user-thumb" src="{{asset('assets/img/author/avatar.png')}}" alt="avatar">
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ session('nama') }}<i class="bi bi-caret-down"></i></h4>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>