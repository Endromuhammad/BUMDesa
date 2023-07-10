@extends('layouts.layout')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Profile</h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Profile</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- Pengertian -->
    <section id="cta" class="cta">
      <br>
        <div class="container" data-aos="zoom-out">
  
          <div class="row g-5">
  
            <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
              <h3>BUMDesa Klapagading</h3>
              <p> Badan Usaha Milik Desa (BUMDesa) Klapagading adalah badan usaha yang didirikan oleh pemerintah desa dengan modal awal bersumber dari APB desa.</p>
            </div>
  
            <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
              <div class="img">
                <img src="assets/img/profile/balaidesa.jpg" alt="" class="img-fluid">
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Call To Action Section -->

    <!-- ======= Profile Section ======= -->
    <section id="Profile" class="team">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Profile</h2>
            <p>Para Perkerja yang bekerja di BUMDesa Klapagading</p>
          </div>
  
          <div class="row gy-5">
  
            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
              <div class="team-member">
                <div class="member-img">
                  <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Ahmad Yusuf, S.E</h4>
                  <span>Direktur Utama</span>
                </div>
              </div>
            </div><!-- End Team Member -->
  
            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
              <div class="team-member">
                <div class="member-img">
                  <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Muhdir, S.Pd I, M.P.d</h4>
                  <span>Sekertaris</span>
                </div>
              </div>
            </div><!-- End Team Member -->
  
            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
              <div class="team-member">
                <div class="member-img">
                  <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Sutono</h4>
                  <span>Bendahara</span>
                </div>
              </div>
            </div><!-- End Team Member -->

            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
              <div class="team-member">
                <div class="member-img">
                  <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Slamet Santoso, AMd</h4>
                  <span>Unit Usaha Pertanian & Perternakan</span>
                </div>
              </div>
            </div><!-- End Team Member -->

            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
              <div class="team-member">
                <div class="member-img">
                  <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4> Andi </h4>
                  <span> Unit Usaha Pariwisata</span>
                </div>
              </div>
            </div><!-- End Team Member -->

            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
              <div class="team-member">
                <div class="member-img">
                  <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Tri Rahmawati, SE</h4>
                  <span>Unit Usaha Jasa & Finance</span>
                </div>
              </div>
            </div><!-- End Team Member -->

            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
              <div class="team-member">
                <div class="member-img">
                  <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4>Serly Ana Yulianti</h4>
                  <span>Unit Usaha Perdagangan</span>
                </div>
              </div>
            </div><!-- End Team Member -->
  
          </div>
  
        </div>
      </section><!-- End Team Section -->

  </main><!-- End #main -->
@stop