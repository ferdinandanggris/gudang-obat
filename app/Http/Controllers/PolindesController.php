<?php

namespace App\Http\Controllers;

use App\Models\ObatPolindes;
use App\Models\Polindes;
use Faker\Core\Number;
use Illuminate\Http\Request;

class PolindesController extends Controller
{
    public function index()
    {
        return view('polindes.index', [
            'polindes' => Polindes::all()
        ]);
    }

    public function penerimaanObat()
    {
        return view('polindes.penerimaan', []);
    }

    public function show($id)
    {
        // dd(Polindes::where('id', '=', $id)->get());
        return view('polindes.view', [
            'obats' => ObatPolindes::where('polindes_id', '=', (int) $id)->get(),
            'polindes' => Polindes::where('id', '=', $id)->first()
        ]);
    }

    public function distribusiObat()
    {
        return view('polindes.distribusi', []);
    }
}
