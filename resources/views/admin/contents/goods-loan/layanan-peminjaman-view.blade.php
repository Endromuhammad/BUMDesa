@extends('admin.layouts.layout')

@section('content')
<div class="main-content-inner">
    <!-- Berita -->
    <div class="row mt-5 mb-5">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Menambahkan Data Peminjaman Barang</h4>
                    </div>
                    <div>
                        <form>
                            <br>
                            <div class="mb-3">
                                <label for="formnid" class="form-label">NIK</label>
                                <input class="form-control" type="text" placeholder="" name="nik" value="{{ $loan->nik }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Nama Lengkap</label>
                                <input class="form-control" type="text" id="formFile" name="name" value="{{ $loan->name }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="phone_number" value="{{ $loan->phone_number }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" disabled>{{ $loan->address }}</textarea>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-10">
                                        <label for="formjudul" class="form-label">Barang</label>
                                    </div>
                                    <div class="col-2">
                                        <label for="formjudul" class="form-label">Qty</label>
                                    </div>
                                </div>
                                @foreach ($selectedBarang as $barang)
                                <div class="row">
                                    <div class="col-10">
                                        <input type="text" class="mt-2 form-control" value="{{ $barang->name }}" disabled>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" class="mt-2 form-control" value="{{ $barang->qty_input }}" disabled>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="row mb-3">
                                <label for="inputjml" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                                <div class="col-sm-4">
                                  <input type="date" name="start_date" class="form-control" id="inputjml" disabled value="{{ $loan->start_date }}">
                                </div>
                                <label for="inputjml" class="col-sm-2 col-form-label">Sampai tanggal ke </label>
                                <div class="col-sm-4">
                                  <input type="date" name="end_date" class="form-control" id="inputjml" disabled value="{{ $loan->end_date }}">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Total Harga</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="phone_number" value="Rp {{ number_format($loan->total_price) }}" disabled>
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto KTP</label> <br />
                                <img src="{{ $loan->ktp_path }}" width="500px">
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