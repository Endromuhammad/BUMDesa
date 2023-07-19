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
                        <h4 class="header-title mb-0">Barang</h4>
                    </div>
                    <div>
                        <form>
                            <br>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Nama Barang</label>
                                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Judul Berita" disabled value="{{ $barang->name }}">
                            </div>

                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Harga Barang</label>
                                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Judul Berita" disabled value="{{ number_format($barang->price) }}">
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Stok</label>
                                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Judul Berita" disabled value="{{ number_format($barang->qty) }}">
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