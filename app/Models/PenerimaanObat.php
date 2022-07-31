<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaanObat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'sumber_dana',
        'tanggal',   
        'keterangan',
    ];
    public function obats(){
        return $this->hasMany(Obat::class,'penerimaan_obat_id','id');
    }
}
