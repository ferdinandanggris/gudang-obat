<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiGudang extends Model
{
    use HasFactory;
    protected $table = "t_transaksi_gudang";
    protected $primaryKey = "id";
    protected $guarded = ['id'];

    public function detTransaksiGudang(){
        return $this->hasMany(DetTransaksiGudang::class,"id_transaksi_gudang","id");
    }
}
