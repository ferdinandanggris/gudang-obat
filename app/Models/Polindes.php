<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polindes extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'm_polindes';
    protected $fillable = [
        'name',
    ];
    public function store(array $payload)
    {
        return $this->create($payload);
    }
}
