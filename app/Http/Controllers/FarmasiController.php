<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmasiController extends Controller
{
    public function index()
    {
        return view('farmasi.index', []);
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
