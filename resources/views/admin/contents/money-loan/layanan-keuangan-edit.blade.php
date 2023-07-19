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
                        <form action="{{ route('layanan_keuangan-update', $loan->id)}}" method="post" enctype="multipart/form-data">
                            <br>
                            <div class="mb-3">
                                <label for="formnid" class="form-label">NIK</label>
                                <input class="form-control" type="text" placeholder="" name="nik" value="{{ $loan->nik }}">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Nama Lengkap</label>
                                <input class="form-control" type="text" id="formFile" name="name" value="{{ $loan->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="phone_number" value="{{ $loan->phone_number }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address">{{ $loan->address }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Nominal Uang</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="nominal" value="{{ $loan->nominal }}">
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Pilih Berapa Bulan</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" name="tenor" value="{{ $loan->tenor }}">
                            </div>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Biaya Perbulan</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" name="monthly_fee" value="{{ $loan->monthly_fee }}" >
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto KTP</label> <br />
                                <img src="{{ $loan->ktp_path }}" width="500px">
                                <input class="form-control mt-2" type="file" id="formFile" name="ktp" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto Memegang KTP</label> <br />
                                <img src="{{ $loan->holding_ktp_path }}" width="500px">
                                <input class="form-control mt-2" type="file" id="formFile" name="holding_ktp" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto Kartu Keluarga</label> <br />
                                <img src="{{ $loan->kk_path }}" width="500px">
                                <input class="form-control mt-2" type="file" id="formFile" name="kk" accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Update Status</label> <br />
                                <select class="form-control" id="barang" name="status" required>
                                    <option selected disabled value="">Pilih Status</option>
                                    @if (in_array($loan->status, array(1)))
                                        <option value="2">Approve</option>
                                        <option value="3">Reject</option>
                                    @elseif (in_array($loan->status, array(2)))
                                        <option value="5">Done</option>
                                        <option value="0">Cancel</option>
                                    @elseif (in_array($loan->status, array(3)))
                                        <option value="0">Cancel</option>
                                    @endif
                                </select>
                            </div>

                            <input type="submit" class="btn btn-warning" value="Update">
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