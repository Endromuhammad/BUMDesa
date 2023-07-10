@extends('layouts.layout')

@section('content')
<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="assets/img/office_02.jpg" class="img-fluid animated">
      <h2>Welcome to <span>BUMDesa</span></h2>
      <p>Selamat Datang di Website BUMDesa</p>
      <p>Jika ingin tau apa itu BUMDesa bisa klik tombol dibawah</p>
      <div class="d-flex">
        <a href="{{url('/profile')}}" class="btn-get-started scrollto">Info Lebih lanjut</a>
      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-printer icon"></i></div>
              <h4>Printer</h4>
              <p>Jasa printer dokumen sesuai keperluan anda</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-files icon"></i></div>
              <h4>Fotocopy</h4>
              <p>Jasa fotocopy berkas juga ada di sini</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-book-half icon"></i></div>
              <h4>Alat Tulis</h4>
              <p>Menjual peralatan tulis sesuai kebutuhan anda</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bank icon"></i></div>
              <h4>Peminjaman Uang</h4>
              <p>Jasa peminjaman keuangan untuk warga desa klapagading</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- Pengertian -->
    <section id="cta" class="cta">
      <br>
        <div class="container" data-aos="zoom-out">
  
          <div class="row g-5">
  
            <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
              <h3>Pendapatan Warga Desa Klapagading</h3>
              <p> Pendapatan warga desa Klapagading Kec. Wangon Kab. Banyumas adalah dari bertani karena kebanyakan warga desa Klapagading berprofesi sebagai petani. Terutama adalah petani sawah karena sebagian besar daerah desa Klapagading di kelilingi oleh sawah - sawah jadi wajar saja jika pendapatan rata - rata warga Desa Klapagading adalah dari bertani.</p>
            </div>
  
            <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
              <div class="img">
                <img src="assets/img/index/sawah.png" alt="" class="img-fluid">
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Call To Action Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

      </div>

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Informasi</h3>
              <p>Jika anda menginginkan infomasi lebih atau ingin mengirimkan pesan kepada BUMDesa dapat mengirimkan ke infomasi dibawah ini.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Klapagading, Kec. Wangon, Kabupaten Banyumas, Jawa Tengah 53176</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>087773515710</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@stop