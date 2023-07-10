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
                        <h4 class="header-title mb-0">Buat Portofolio</h4>
                    </div>
                    <div>
                        <form action="{{ route('portofolio-store') }}" method="POST" enctype="multipart/form-data">
                            <br>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Judul Portofolio</label>
                                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Judul Portofolio">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Kategori</label>
                                <input type="text" name="category" class="form-control" id="exampleFormControlInput1" placeholder="Kategori">
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Tanggal Project</label>
                                <input type="date" name="project_date" class="form-control" id="exampleFormControlInput1" placeholder="Kategori">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar</label>
                                <input class="form-control" type="file" id="formFile" name="image_portofolio" accept="image/*">
                            </div>

                            <input type="submit" class="btn btn-primary float-right mt-3" value="Create">
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