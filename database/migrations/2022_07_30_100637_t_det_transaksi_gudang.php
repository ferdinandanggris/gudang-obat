<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TDetTransaksiGudang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_det_transaksi_gudang', function (Blueprint $table) {
            $table->id();
            $table->integer('id_transaksi_gudang');
            $table->string('name');
            $table->string('jumlah');
            $table->date('tanggal_kadaluarsa');
            $table->string('satuan');
            $table->string('jenis_obat');
            $table->string('sumber_dana');
            $table->timestamp('last_used_at')->nullable();
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
        //
    }
}
