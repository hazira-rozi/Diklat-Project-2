<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'obat';
    // protected $primaryKey = 'kode_obat';
    protected $fillable = ([
        'kode_obat',
        'nama_obat',
        'harga_beli',
        'harga_jual',
        'satuan',
        'jumlah_stok'
    ]);
}
