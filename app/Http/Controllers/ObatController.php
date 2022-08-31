<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_obat = Obat::latest()->paginate('10');
        return view('obat.index', [
            'data_obat' => $data_obat,
            'title' => 'Home',
            'sitemap' => 'Obat',
        ])->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obat.create', [
            'title' => 'Tambah Data',
            'sitemap' => 'Obat',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_validasi=$request->validate([
            'kode_obat'=>'required',
            'nama_obat'=>'required',
            'harga_beli'=>'required',
            'harga_jual'=>'required',
            'satuan'=>'required',
            'jumlah_stok'=>'required'

        ]);

        Obat::create($data_validasi); //memanggil model yang akan dimanipulasi

        return redirect()->route('obat.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obat = Obat::find($id);
        return view('obat.show', [
            "obat" => $obat,
            "title" => "Data Siswa",
            "sitemap" => "Lihat Data Siswa"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obat = Obat::find($id);
        //tambah code 
        
        return view('obat.edit', [
            "obat" => $obat,
            "title" => "Edit Data Obat",
            "sitemap" => "Edit Data Obat"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_validasi=$request->validate([
            'kode_obat'=>'required',
            'nama_obat'=>'required',
            'harga_beli'=>'required',
            'harga_jual'=>'required',
            'satuan'=>'required',
            'jumlah_stok'=>'required'
        ]);

        $obat = Obat::find($id);
        $obat->update($data_validasi);
        return redirect()->route('obat.index')->with('success', 'Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obat = Obat::find($id);

        $obat->delete();

        return redirect()->route('obat.index')->with('success', 'Data berhasil dihapus');
    }
}
