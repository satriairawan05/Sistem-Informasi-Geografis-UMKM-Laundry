@extends('admin.layouts.main')

@section('content')
@if(session('success'))
<div class="alert alert-success container container-fluid" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="container-fluid">
  @cannot('admin')
  <a href="/dashboard/layanan/create" class="btn btn-success mb-2"><i data-feather="file-plus"></i></a>
  @endcannot
  <div class="table-responsive">
    <table class="table table-striped table-bordered" id="myTable">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Usaha</th>
          <th>Jenis</th>
          @cannot('admin')
          <th>Action</th>
          @endcannot
        </tr>
      </thead>
      <tbody>
        @foreach ($layanans as $layanan)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{!! $layanan->nama_toko !!}</td>
          <td>{!! $layanan->jenis !!}</td>
          <td>
            @cannot('admin')
            <a href="/dashboard/layanan/{{ $layanan->id }}/edit" class="btn btn-warning"><i data-feather="edit"></i></a>
            <form action="/dashboard/layanan/{{ $layanan->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button href="/dashboard/layanan/{{ $layanan->id }}" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')"><i data-feather="trash"></i></button>
            </form>
            @endcannot
          </td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Nama Usaha</th>
          <th>Jenis</th>
          @cannot('admin')
          <th>Action</th>
          @endcannot
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@endsection
