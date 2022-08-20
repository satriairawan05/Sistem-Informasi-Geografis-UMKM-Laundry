@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
  <form class="form-horizontal" method="post" action="/dashboard/layanan">
    @csrf
    <div class="card-body mb-2">
      <h4 class="card-title d-flex justify-content-center pb-2">Create Data</h4>
      <div class="form-group row mb-2">
        <label for="jenis" class="col-sm-3 text-end control-label col-form-label">Jenis Layanan</label>
        <div class="col-md-6">
          <input type="text" class="form-control @error('jenis')
                  is-invalid
              @enderror" id="jenis" name="jenis" placeholder="Jenis Pelayanan" required value="{{ old('jenis') }}" />
          @error('jenis')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="toko_id" class="col-sm-3 text-end control-label col-form-labe">Nama Usaha</label>
        <div class="col-md-6">
          <select class="form-select" name="toko_id">
            @foreach($tokos as $toko)
                @if(old('toko_id') == $toko->id)
                <option value="{{ $toko->id }}" selected>{{ $toko->nama }}</option>
                @else
                <option value="{{ $toko->id }}">{{ $toko->nama }}</option>
                @endif
            @endforeach
          </select>
          @error('toko_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="card-body d-flex justify-content-center">
        <a href="{{ route('layanan.index') }}" class="btn btn-info me-1"><i data-feather="arrow-left"></i></a>
        <button type="submit" class="btn btn-success">
          <i data-feather="file-plus"></i>
        </button>
      </div>
    </div>
  </form>
</div>
@endsection
