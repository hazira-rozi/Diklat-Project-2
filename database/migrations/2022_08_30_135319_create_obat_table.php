<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {

            $table->id()->unique();
            $table->string('kode_obat', 10);
            $table->string('nama_obat', 35);
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->string('satuan', 10);
            $table->integer('jumlah_stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat');
    }
}
