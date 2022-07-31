<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Obats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jumlah');
            $table->dateTime('tanggal_kadaluarsa');
            $table->string('satuan');
            $table->foreignId('jenis_obat_id');
            $table->string('sumber_dana');
            $table->string('tanggal');
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
