<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatFarmasi extends Model
{
    use HasFactory;

    protected $table = "t_obat_farmasi";

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public function store($payload)
    {
        
        return $this->create($payload);
    }
}
