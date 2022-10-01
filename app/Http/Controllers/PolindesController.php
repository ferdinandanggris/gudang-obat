<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolindesController extends Controller
{
    public function index()
    {
        return view('polindes.index', []);
    }

    public function penerimaanObat()
    {
        return view('polindes.penerimaan', []);
    }

    public function show(){
        return view('polindes.view',[]);
    }

    public function distribusiObat()
    {
        return view('polindes.distribusi', []);
    }
}
