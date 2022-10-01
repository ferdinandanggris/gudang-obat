<?php

namespace App\Helper;

use App\Models\ObatFarmasi;

class FarmasiHelper{
    protected $farmasiModel;

    public function __construct()
    {
        $this->farmasiModel = new ObatFarmasi();
    }

    public function create($payload){
        $this->farmasiModel->store($payload->post());
    }
    
}