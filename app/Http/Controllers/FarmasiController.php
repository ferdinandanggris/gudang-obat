<?php

namespace App\Http\Controllers;

use App\Models\ObatFarmasi;
use App\Models\Polindes;
use Illuminate\Http\Request;

class FarmasiController extends Controller
{
    public function index()
    {
        return view('farmasi.index', [
            'obats' => ObatFarmasi::all(),
        ]);
    }

    public function penerimaanObat()
    {
        return view('farmasi.penerimaan', []);
    }

    public function distribusiObat()
    {
        return view('farmasi.distribusi', []);
    }
}
