<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatPolindes extends Model
{
    use HasFactory;

    protected $table = "t_obat_polindes";

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public function store($payload)
    {

        return $this->create($payload);
    }

    public function polindes()
    {
        return $this->hasOne(Polindes::class, 'id', 'polindes_id');
    }
}
