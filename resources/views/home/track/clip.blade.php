@extends('layouts.main')

@section('content')
<div class="row justify-content-center m-lg-3">
  <div class="col-md-6">
    <form action="/transaksi" method="get">
      @csrf
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search by Token ..." name="search" value="{{ request('search') }}">
        <button class="btn btn-dark" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

@if($tracks->all())
<div class="container">
  <div class="row m-lg-2">
    @foreach ($tracks as $data)
    <div class="col-4">
      <div class="card text-center my-3 overflow-hidden">
      <small class="text-sm-start text-bg-dark">Berat Pesanan : {!! $data->berat !!} KG</small>
        <div class="card-body">
          <h5 class="card-title">{!! $data->toko->nama !!}</h5>
          <p class="card-text">Jam buka : {!! \Carbon\Carbon::parse($data->toko->jam_buka)->format('H:i') !!} WITA / Jam tutup : {!! Carbon\Carbon::parse($data->toko->jam_tutup)->format('H:i') !!} WITA</p>
          <p class="card-text">Token : {!! $data->token !!}</p>
          <p class="card-text">Layanan/Status : {!! $data->layanan->jenis !!}/{!! $data->status->status !!}</p>
          <p class="card-text">Nama Pemesan : {!! $data->nama !!}</p>
          {{-- <a href="/transaksi/{{ $data->token }}" class="btn btn-dark">Lihat Token</a> --}}
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@else
<p class="d-flex justify-content-center align-items-center fs-2 text-danger bar">Not Found</p>
@endif
{{ $tracks->links() }}
@endsection
