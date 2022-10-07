<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TObatPolindes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_obat_polindes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('polindes_id');
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
    }
}
