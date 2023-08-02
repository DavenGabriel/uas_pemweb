<?php

namespace App\Http\Controllers;

use App\Models\catering;
use Illuminate\Http\Request;

class cateringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = catering::orderBy('nama_paket', 'desc')->get();
        return view('catering.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catering.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_paket'=>'required',
            'customer'=>'required',
            'nomorHP'=>'required',
            'lokasi'=>'required',
            'pembayaran'=>'required',
        ], [
            'nama_paket.required' => 'Nama Paket wajib diisi',
            'customer.required' => 'Nama Customer wajib diisi',
            'nomorHP.required' => 'Nomor HP wajib diisi',
            'lokasi.required' => 'Lokasi wajib diisi',
            'pembayaran.required' => 'Pembayaran wajib diisi',
        ]);
        $data = [
            'nama_paket' => $request->nama_paket,
            'customer' => $request->customer,
            'nomorHP' => $request->nomorHP,
            'lokasi' => $request->lokasi,
            'pembayaran' => $request->pembayaran,
        ];
        catering::create($data);
        return redirect()->to('catering')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nama_paket)
    {
        $data = catering::where('nama_paket', $nama_paket)->first();
        return view('catering.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nama_paket)
    {
        $request->validate([
            'customer'=>'required',
            'nomorHP'=>'required',
            'lokasi'=>'required',
            'pembayaran'=>'required',
        ], [
            'customer.required' => 'Nama Customer wajib diisi',
            'nomorHP.required' => 'Nomor HP wajib diisi',
            'lokasi.required' => 'Lokasi wajib diisi',
            'pembayaran.required' => 'Pembayaran wajib diisi',
        ]);
        $data = [
            'customer' => $request->customer,
            'nomorHP' => $request->nomorHP,
            'lokasi' => $request->lokasi,
            'pembayaran' => $request->pembayaran,
        ];
        catering::where('nama_paket', $nama_paket)->update($data);
        return redirect()->to('catering')->with('success', 'Berhasil Mengupdate Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nama_paket)
    {
        catering::where('nama_paket', $nama_paket)->delete();
        return redirect()->to('catering')->with('succes', 'Berhasil Menghapus Data !!!');
    }
}
