@extends('layout.template')

@section('konten')
    
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{url('catering/create')}}' class="btn btn-primary">Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-2">Nama Paket</th>
                            <th class="col-md-2">Customer</th>
                            <th class="col-md-2">Nomor HP</th>
                            <th class="col-md-2">Lokasi</th>
                            <th class="col-md-2">Pembayaran</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$item->nama_paket}}</td>
                            <td>{{$item->customer}}</td>
                            <td>{{$item->nomorHP}}</td>
                            <td>{{$item->lokasi}}</td>
                            <td>{{$item->pembayaran}}</td>
                            <td>
                                
                                <a href='{{url('catering/'.$item->nama_paket.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Yakin Ingin Menghapus Data ???')" class="d-inline" action="{{url('catering/'.$item->nama_paket)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>               
          </div>
@endsection