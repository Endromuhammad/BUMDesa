@extends('admin.layouts.layout')

@section('content')
<div class="main-content-inner">         
    <!-- Berita -->
    <div class="row mt-5 mb-5">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Peminjaman Barang</h4>
                        <a href="{{ route('layanan_peminjaman-create') }}" class="btn btn-primary">Add</a>
                    </div>
                    <div>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Total Peminjaman</th>
                                <th scope="col">Total Barang</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($loans as $key => $loan)
                                <tr>
                                  <td>{{ $key+1 }}</td>
                                  <td>{{ $loan->nik }}</td>
                                  <td>{{ $loan->name }}</td>
                                  <td>{{ number_format($loan->total_price) }}</td>
                                  <td>{{ number_format($loan->total_price) }}</td>
                                  <td>
                                    <a href="{{ route('layanan_peminjaman-view', $loan->id) }}" class="btn btn-xs btn-primary"><i class="bi bi-eye"></i></a>
                                    <a href="{{ route('layanan_peminjaman-edit', $loan->id) }}" class="btn btn-xs btn-warning"><i class="bi bi-pencil"></i></a>
                                    <a href="{{ route('layanan_peminjaman-delete', $loan->id) }}" class="btn btn-xs btn-success"><i class="bi-check-square"></i></a>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- overview area end -->
    <!-- row area start -->
</div>
@stop