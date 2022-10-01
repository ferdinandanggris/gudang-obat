<?php

namespace App\Http\Controllers;

use App\Models\ObatFarmasi;
use Illuminate\Http\Request;

class FarmasiController extends Controller
{
    public function index()
    {
        return view('farmasi.index', [
            'obat' => ObatFarmasi::all()
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
