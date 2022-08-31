@extends('layout.template')

@section('content')
<div class="col-lg-12">
    <!-- general form elements -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Obat</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('obat.update', $obat->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="kode_obat">Kode Obat</label>
                    <input type="text" class="form-control" name="kode_obat" id="kode_obat" value="{{ $obat->kode_obat }}" placeholder="Isikan Kode Obat">
                </div>
                <div class="form-group">
                    <label for="namainput">Nama Obat</label>
                    <input type="text" class="form-control" name="nama_obat" id="nama_obat"  value="{{ $obat->nama_obat }}" placeholder="Isi Nama Obat">
                </div>
                <div class="form-group">
                    <label for="beliinput">Harga Beli</label>
                    <input type="number" class="form-control" name="harga_beli" id="harga_beli"   value="{{ $obat->harga_beli }}" placeholder="Isi Harga Beli Obat">
                </div>
                <div class="form-group">
                    <label for="jualinput">Harga Jual</label>
                    <input type="number" class="form-control" name="harga_jual" id="harga_jual"  value="{{ $obat->harga_jual }}" placeholder="Isi Harga Jual Obat">
                </div>
                <div class="form-group">
                    <label for="satuaninput">Satuan</label>
                    <input type="text" class="form-control" name="satuan" id="satuan"  value="{{ $obat->satuan }}" placeholder="Isi Satuan">
                </div>
                <div class="form-group">
                    <label for="stokinput">Jumlah Stok</label>
                    <input type="number" class="form-control" name="jumlah_stok" id="jumlah_stok" value="{{ $obat->jumlah_stok }}" placeholder="Isi Jumah Stok">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer d-flex justify-content-center">

                <button type="submit" class="btn btn-primary mr-5">Save <i class="fa fa-save"> </i></button>
                <button type="reset" class="btn btn-warning">Clear <i class="fa fa-eraser"></i></button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@endsection