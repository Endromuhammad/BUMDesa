@extends('admin.layouts.layout')

@section('content')
<div class="main-content-inner">     
    <!-- Berita -->
    <div class="row mt-5 mb-5">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Portofolio</h4>
                        <a href="{{ route('portofolio-create')}}" class="btn btn-sm btn-primary">Add</a>
                    </div>
                    <div>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Content</th>
                                <th scope="col">Category</th>
                                <th scope="col">Project Date</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($portofolios as $key => $portofolio)
                              <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $portofolio->title }}</td>
                                <td>{{ $portofolio->description }}</td>
                                <td>{{ $portofolio->category }}</td>
                                <td>{{ date("d M Y", strtotime($portofolio->project_date)) }}</td>
                                <td>
                                  <a href="{{ route('portofolio-view', $portofolio->id) }}" class="btn btn-xs btn-primary"><i class="bi bi-eye"></i></a>
                                  <a href="{{ route('portofolio-edit', $portofolio->id) }}" class="btn btn-xs btn-warning"><i class="bi bi-pencil"></i></a>
                                  <a href="{{ route('portofolio-delete', $portofolio->id) }}" class="btn btn-xs btn-danger"><i class="bi bi-trash"></i></a>
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