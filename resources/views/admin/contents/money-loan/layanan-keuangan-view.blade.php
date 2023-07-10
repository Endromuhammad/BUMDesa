@extends('admin.layouts.layout')

@section('content')
<div class="main-content-inner">
    <!-- Berita -->
    <div class="row mt-5 mb-5">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Data Peminjaman Keuangan</h4>
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
                                <label for="formjudul" class="form-label">Nominal Uang</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="nominal" value="{{ $loan->nominal }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Pilih Berapa Bulan</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" name="tenor" value="{{ $loan->tenor }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Biaya Perbulan</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" name="monthly_fee" value="{{ $loan->monthly_fee }}" disabled >
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto KTP</label> <br />
                                <img src="{{ $loan->ktp_path }}" width="500px">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto Memegang KTP</label> <br />
                                <img src="{{ $loan->holding_ktp_path }}" width="500px">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto Kartu Keluarga</label> <br />
                                <img src="{{ $loan->kk_path }}" width="500px">
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