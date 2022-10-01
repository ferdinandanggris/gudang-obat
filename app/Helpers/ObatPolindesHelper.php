<?php

namespace App\Helper;

use App\Models\ObatPolindes;

class PolindesHelper{
    protected $polindesModel;

    public function __construct()
    {
        $this->polindesModel = new ObatPolindes();
    }

    public function create($payload){
        $this->polindesModel->store($payload->post());
    }
    
}