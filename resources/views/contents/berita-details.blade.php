@extends('layouts.layout')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Berita Lengkap</h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/berita')}}">Berita</a></li>
            <li>Berita Lengkap</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="{{ asset(Storage::url($berita->image_upload_path)) }}" alt="" class="img-fluid">
              </div>

              <h2 class="title">{{ $berita->title }}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#!">{{ $berita->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#!"> {{ date("d M, Y", strtotime($berita->created_at)) }} </a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                {!! $berita->content !!}

              </div><!-- End post content -->

            </article><!-- End blog post -->

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">
                    @foreach ($latest_news as $news)
                        <div class="post-item mt-3">
                            <img src="{{ asset(Storage::url($news->image_upload_path)) }}" alt="" class="flex-shrink-0">
                            <div>
                            <h4><a href="{{ route('berita-detail-user', $news->id) }}">{{ $news->title }}</a></h4>
                            <time datetime="2020-01-01">{{ date("d M, Y", strtotime($news->created_at)) }}</time>
                            </div>
                        </div><!-- End recent post item-->
                    @endforeach

                </div>

              </div><!-- End sidebar recent posts-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->
@stop