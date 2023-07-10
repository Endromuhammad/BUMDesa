@extends('layouts.layout')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/portofolio')}}">Portfolio</a></li>
            <li>Portfolio Details</li>  
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset(Storage::url($portofolio->image_path)) }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h2>{{ $portofolio->title }}</h2>
              <p>
                {!! $portofolio->description !!}
              </p>
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: {{ $portofolio->category }}</li>
                <li><strong>Project date</strong>: {{ date("d M, Y", strtotime($portofolio->created_at)) }}</li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@stop