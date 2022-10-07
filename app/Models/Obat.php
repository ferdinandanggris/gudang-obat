<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 't_obat';
    protected $fillable = [
        'name',
        'jumlah',
        'tanggal_kadaluarsa',
        'satuan',
        'jenis_obat_id',
        'sumber_dana',
        'tanggal',
        'keterangan',
    ];
    public function jenisObat()
    {
        return $this->hasOne(JenisObat::class, 'id', 'jenis_obat_id');
    }
}
