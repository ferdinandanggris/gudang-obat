<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisObat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'm_jenis_obat';

    public function obats()
    {
        return $this->hasMany(Obat::class, 'penerimaan_obat_id', 'id');
    }
}
