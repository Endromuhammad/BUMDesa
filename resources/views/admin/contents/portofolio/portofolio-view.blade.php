@extends('admin.layouts.layout')

@section('content')
<!-- page title area end -->
<div class="main-content-inner">
                
    <!-- Berita -->
    <div class="row mt-5 mb-5">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Portofolio</h4>
                    </div>
                    <div>
                        <form>
                            <br>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Judul Portofolio</label>
                                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Judul Berita" disabled value="{{ $portofolio->title }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" disabled>{{ $portofolio->description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Kategori</label>
                                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Judul Berita" disabled value="{{ $portofolio->category }}">
                            </div>

                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Tanggal Project</label>
                                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Judul Berita" disabled value="{{ date('d M Y', strtotime($portofolio->project_date)) }}">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar</label> <br />
                                <img src="{{ $portofolio->image_path }} " width="150px">
                                {{-- <input class="form-control" type="file" id="formFile" name="image_news" accept="image/*"> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- overview area end -->
    <!-- row area start -->
</div>
@stop