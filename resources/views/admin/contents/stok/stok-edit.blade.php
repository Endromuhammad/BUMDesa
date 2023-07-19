@extends('admin.layouts.layout')

@section('content')
<!-- page title area end -->
<div class="main-content-inner">
                
    <!-- Portofolio -->
    <div class="row mt-5 mb-5">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Edit Barang</h4>
                    </div>
                    <div>
                        <form action=" {{ route('stok-update', $barang->id) }}" method="POST" enctype="multipart/form-data">
                            <br>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Nama Barang</label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{ $barang->name }}" placeholder="Nama Barang">
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Harga Barang</label>
                                <input type="number" name="price" class="form-control" id="exampleFormControlInput1" value="{{ $barang->price }}" placeholder="Harga Barang">
                            </div>

                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Stok Barang</label>
                                <input type="number" name="qty" class="form-control" id="exampleFormControlInput1" value="{{ $barang->qty }}" placeholder="Stok Barang">
                            </div>

                            <input type="submit" class="btn btn-warning float-right mt-3" value="Update">
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