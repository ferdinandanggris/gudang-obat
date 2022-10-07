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

    public function detTransaksiGudang()
    {
        return $this->hasMany(DetTransaksiGudang::class, "id_transaksi_gudang", "id");
    }

    public function store(array $payload)
    {
        return $this->create($payload);
    }

    public function polindes()
    {
        return $this->hasOne(Polindes::class, 'id', 'lokasi');
    }
}
