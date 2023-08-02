@extends('layout.template')
<!-- START FORM -->
@section('konten')

@if ($errors->any())
<div class="pt-3">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
    
@endif

<form action='{{url('catering')}}' method='post'>
@csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('catering') }}" class="btn btn-secondary">Kembali</a>
        <div class="mb-3 row">
            <label for="nama_paket" class="col-sm-2 col-form-label">Nama Paket</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_paket' id="nama_paket">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="customer" class="col-sm-2 col-form-label">Customer</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='customer' id="customer">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nomorHP" class="col-sm-2 col-form-label">Nomor HP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nomorHP' id="nomorHP">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='lokasi' id="lokasi">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pembayaran" class="col-sm-2 col-form-label">Pembayaran</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pembayaran' id="pembayaran">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
@endsection