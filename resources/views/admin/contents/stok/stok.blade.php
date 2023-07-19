@extends('admin.layouts.layout')

@section('content')
<div class="main-content-inner">     
    <!-- Berita -->
    <div class="row mt-5 mb-5">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Stok Barang</h4>
                        <a href="{{ route('stok-create')}}" class="btn btn-sm btn-primary">Add</a>
                    </div>
                    <div>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($list_barang as $key => $barang)
                              <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $barang->name }}</td>
                                <td>{{ $barang->qty }}</td>
                                <td>
                                  <a href="{{ route('stok-view', $barang->id) }}" class="btn btn-xs btn-primary"><i class="bi bi-eye"></i></a>
                                  <a href="{{ route('stok-edit', $barang->id) }}" class="btn btn-xs btn-warning"><i class="bi bi-pencil"></i></a>
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