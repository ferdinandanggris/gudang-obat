<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TTransaksiGudang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_transaksi_gudang', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');
            $table->date('tanggal');
            $table->string('keterangan');
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
