@extends('layout.template')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Detail Data Obat</h3>
            <div class="d-flex flex-row-reverse">
                <div class="p-2"><a class="btn btn-sm btn-primary mr-2" href="{{ route('obat.index') }}"><i class="fa fa-arrow-left"></i> Back </a></div>
                <div class="p-2"><a class="btn btn-sm btn-primary float-right" href="{{ route('obat.create') }}">Add Data <i class="fa fa-plus"></i></a></div>
            </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Kode Obat</th>
                        <td>{{ $obat->kode_obat }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nama Obat</th>
                        <td>{{ $obat->nama_obat }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Harga Beli</th>
                        <td>{{ $obat->harga_beli }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Harga Jual</th>
                        <td>{{ $obat->harga_jual }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Jumlah Stock</th>
                        <td>{{ $obat->jumlah_stok }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Satuan</th>
                        <td>{{ $obat->satuan }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</div>
@endsection