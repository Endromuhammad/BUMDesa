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
                        <h4 class="header-title mb-0">Buat Stok Barang</h4>
                    </div>
                    <div>
                        <form action="{{ route('stok-store') }}" method="POST" enctype="multipart/form-data">
                            <br>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Nama Barang</label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Nama Barang">
                            </div>

                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Harga Barang</label>
                                <input type="number" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Harga Barang">
                            </div>

                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Stok Barang</label>
                                <input type="number" name="qty" class="form-control" id="exampleFormControlInput1" placeholder="Stok Barang">
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