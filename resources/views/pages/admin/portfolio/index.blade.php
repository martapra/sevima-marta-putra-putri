@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
          <a href="{{ route('portfolio.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
              <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Portfolio
          </a>
      </div>

      <!-- Content Row -->
      <div class="row">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                      <tr>
                          <th width="10px">ID</th>
                          <th>Gambar</th>
                          <th>Deskripsi</th>
                          <th width="10%">Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      @forelse($items as $item)
                          <tr>
                              <td>{{ $item->id }}</td>
                              <td>
                                @if($item['image']!= '')
                                    <img class="img-thumbnail" src="{{ asset('storage/'. $item['image']) }}" alt="" width="150px">
                                @else
                                    <img class="img-thumbnail" src="{{ asset("backend/img/no-image.jpg") }}" alt="" width="150px">
                                @endif


                                {{-- <img src="{{ Storage::url($item->image) }}" alt="" style="width: 150px" class="img-thumbnail"> --}}
                              </td>
                              <td>{{ $item->desk }}</td>
                              <td>
                                  <a href="{{ route('portfolio.edit', $item->id) }}" class="btn btn-info">
                                      <i class="fa fa-pencil-alt"></i>
                                  </a>
                                  <form action="{{ route('portfolio.destroy', $item->id) }}" method="post" class="d-inline">
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-danger">
                                          <i class="fa fa-trash"></i>
                                      </button>
                                  </form>

                              </td>
                          </tr>
                      @empty
                          <td colspan="7" class="text-center">
                              Data Kosong
                          </td>
                      @endforelse
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
    <!-- /.container-fluid -->
@endsection
