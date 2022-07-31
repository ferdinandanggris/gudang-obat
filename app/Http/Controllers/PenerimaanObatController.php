<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenerimaanObat;
use App\Models\Obat;
use App\Models\JenisObat;

class PenerimaanObatController extends Controller
{
    protected $obatModel;

    public function __construct(){
        $this->obatModel = new Obat();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerimaanObats = $this->obatModel->with('jenisObat')->get();
        return view('penerimaan-obat/index', [
            'penerimaan_obats' => $penerimaanObats,
            'jenis_obats' => JenisObat::all(),
        ]);
    }
}
