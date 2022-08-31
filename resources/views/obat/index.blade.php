@extends('layout.template')
@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Siswa</h3>
            <a class="btn btn-sm btn-primary float-right" href="{{ route('obat.create') }}">Add Data <i class="fa fa-plus"></i></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th class="text-left">Kode Obat</th>
                        <th class="text-left">Nama Obat</th>
                        <th class="text-right">Harga Beli</th>
                        <th class="text-right">Harga Jual</th>
                        <th class="text-left">Satuan</th>
                        <th class="text-right">Jumlah Stok</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_obat as $obat)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td class="text-left">{{ $obat->kode_obat }}</td>
                        <td class="text-left">{{ $obat->nama_obat }}</td>
                        <td class="text-right">{{ $obat->harga_beli }}</td>
                        <td class="text-right">{{ $obat->harga_jual }}</td>
                        <td class="text-left">{{ $obat->satuan }}</td>
                        <td class="text-right">{{ $obat->jumlah_stok }}</td>
                        <td class="text-center">
                            <form action="{{ route('obat.destroy' ,$obat->id)}}" method="post">
                                @csrf
                                <!-- <a  class="btn btn-sm btn-primary" data-toggle="modal" id="trigger-button" data-target="#modal-xl"
                                data-attr="{{ route('obat.show', $obat->id) }}" title="show"> -->
                                <a  class="btn btn-sm btn-primary" href="{{ route('obat.show', $obat->id) }}" title="show">
                                Show  <i class="fa fa-eye"></i></a>
                            </a>
                                <a class="btn btn-sm btn-success" href="{{ route('obat.edit',$obat->id) }}">Edit <i class="fa fa-edit"></i></a>
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus obat: {{$obat->nama_obat}}?')">Delete <i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="card-footer clearfix">
                <div class="d-flex justify-content-center">
                    Showing {{($data_obat->currentpage()-1)*$data_obat->perpage()+1}} to {{ $data_obat->currentpage()*(($data_obat->perpage() < $data_obat->total()) ? $data_obat->perpage(): $data_obat->total())}} of {{ $data_obat->total()}} entries</div>
                <div class="d-flex justify-content-center">{!! $data_obat->links() !!}</div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <div class="modal fade" id="modal-xl" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Obat</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" id="xl-body">
                    <div>

                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection