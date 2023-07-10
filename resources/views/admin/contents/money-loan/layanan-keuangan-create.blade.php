@extends('admin.layouts.layout')

@section('content')
<div class="main-content-inner">
    <!-- Berita -->
    <div class="row mt-5 mb-5">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Menambahkan Data Peminjaman Keuangan</h4>
                    </div>
                    <div>
                        <form action="{{ route('layanan_keuangan-store')}}" method="post" enctype="multipart/form-data">
                            <br>
                            <div class="mb-3">
                                <label for="formnid" class="form-label">NIK</label>
                                <input class="form-control" type="text" placeholder="" name="nik">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Nama Lengkap</label>
                                <input class="form-control" type="text" id="formFile" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="phone_number">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Nominal Uang</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="nominal">
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Pilih Berapa Bulan</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" name="tenor">
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Biaya Perbulan</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" name="monthly_fee">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto KTP</label>
                                <input class="form-control" type="file" id="formFile" name="ktp" required accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto Memegang KTP</label>
                                <input class="form-control" type="file" id="formFile" name="holding_ktp" required accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto Kartu Keluarga</label>
                                <input class="form-control" type="file" id="formFile" name="kk" required accept="image/*">
                            </div>

                            <input type="submit" class="btn btn-primary" value="Create">
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