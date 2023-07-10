@extends('admin.layouts.layout')

@section('content')
<div class="main-content-inner">     
    <!-- Berita -->
    <div class="row mt-5 mb-5">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Berita</h4>
                        <a href="{{ route('berita-create')}}" class="btn btn-sm btn-primary">Add</a>
                    </div>
                    <div>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Created By</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($news_list as $key => $news)
                              <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $news->title }}</td>
                                <td>{{ $news->name }}</td>
                                <td>{{ date("d-m-Y H:i", strtotime($news->created_at)) }}</td>
                                <td>
                                  <a href="{{ route('berita-view', $news->id) }}" class="btn btn-xs btn-primary"><i class="bi bi-eye"></i></a>
                                  <a href="{{ route('berita-edit', $news->id) }}" class="btn btn-xs btn-warning"><i class="bi bi-pencil"></i></a>
                                  <a href="{{ route('berita-delete', $news->id) }}" class="btn btn-xs btn-danger"><i class="bi bi-trash"></i></a>
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