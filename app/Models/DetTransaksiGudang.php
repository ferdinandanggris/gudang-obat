<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetTransaksiGudang extends Model
{
    use HasFactory;
    protected $table = "t_det_transaksi_gudang";
    protected $primaryKey = "id";
    protected $guarded = ['id'];
    
}
