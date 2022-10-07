<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Polindes;
use Illuminate\Http\Request;
use App\Helpers\GudangHelper;
use App\Models\TransaksiGudang;
use App\Models\DetTransaksiGudang;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiGudangController extends Controller
{
    protected $transaksiGudangModel;
    protected $obatModel;
    protected $gudangHelper;

    public function __construct()
    {
        $this->transaksiGudangModel = new TransaksiGudang();
        $this->obatModel = new Obat();
        $this->gudangHelper = new GudangHelper();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaksi-gudang/index', [
            'transaksi_gudang' => $this->transaksiGudangModel->with('detTransaksiGudang')->get(),
            'jenis_obats' => [],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi-gudang.create', [
            'obats' => Obat::all(),
            'farmasi' => Polindes::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataGudang = $this->gudangHelper->create($request);
        if ($dataGudang['status'] == true) {
            Alert::success('Success', $dataGudang['message']);
            return redirect('/transaksi-gudang');
        }
        Alert::error('Gagal', $dataGudang['message']);
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
