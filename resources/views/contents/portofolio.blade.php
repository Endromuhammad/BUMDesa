@extends('layouts.layout')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portofolio</h2>
          <ol>
            <li><a href="{{url('/index')}}">Home</a></li>
            <li>Portofolio</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" data-aos="fade-up">

        <div class="container">
  
          <div class="section-header">
            <h2>Portfolio</h2>
            <p>Foto Hasil Kerja dari BUMDesa Klapagading Selama ini</p>
          </div>
  
        </div>
  
        <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">
  
          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
  
            <div class="row g-0 portfolio-container">
                
                @foreach ($portofolios as $portofolio)
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset(Storage::url($portofolio->image_path)) }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>{{ $portofolio->title }}</h4>
                        <a href="{{ asset(Storage::url($portofolio->image_path)) }}" title="{{ $portofolio->title }}" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="{{ route('portofolio-detail-user', $portofolio->id) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                @endforeach

            </div><!-- End Portfolio Container -->
  
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
@stop