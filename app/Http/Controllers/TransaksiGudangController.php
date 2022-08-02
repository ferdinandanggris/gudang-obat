<?php

namespace App\Http\Controllers;

use App\Models\DetTransaksiGudang;
use App\Models\Obat;
use App\Models\TransaksiGudang;
use Illuminate\Http\Request;

class TransaksiGudangController extends Controller
{
    protected $transaksiGudangModel;
    protected $obatModel;

    public function __construct()
    {
        $this->transaksiGudangModel = new TransaksiGudang();
        $this->obatModel = new Obat();
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
            'obats' => Obat::all()
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
        /**
         * Variabel untuk menyimpan data transaksi gudang sementara
         * @var array transaksiGudang 
         */
        $transaksiGudang = [
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
        ];

        /**
         * Menambahkan data ke tabel t_transaksi_gudang
         */
        TransaksiGudang::create($transaksiGudang);

        /**
         * Variabel untuk menyimpan data transaksiGudang terakhir
         * @var object $lastTransaksiGudang
         */
        $lastTransaksiGudang = TransaksiGudang::latest()->first();

        /**
         * Variabel untuk menyimpan data detail Transaksi Gudang sementara
         * @var array $detTransaksiGudang
         */
        $detTransaksiGudang = [];

        /**
         * Looping data obat
         */
        for ($i = 0; $i < $request->jml_obat; $i++) {

            /**
             * Variabel untuk menyimpan satu data obat
             * @var object $obat
             */
            $obat = Obat::find($request->post()['obat_id_' . ($i + 1)]);

            /**
             * Kondisi banyak jumlah obat 
             */
            if (($obat->jumlah - $request->post()['jumlah_' . ($i + 1)]) < 0) {
                TransaksiGudang::destroy($lastTransaksiGudang->id);
                return response('jumlah obat tidak mencukupi', 422);
            } else {
                Obat::where('id', $obat->id)
                    ->update(['jumlah' => $obat->jumlah - $request->post()['jumlah_' . ($i + 1)],]);
            }

            /**
             * Memasukkan data ke 
             * @var array $detTransaksiGudang
             */
            $detTransaksiGudang[$i] = [
                'id_transaksi_gudang' => $lastTransaksiGudang->id,
                'name' => $obat->name,
                'jumlah' => $request->post()['jumlah_' . ($i + 1)],
                'tanggal_kadaluarsa' => $obat->tanggal_kadaluarsa,
                'satuan' => $obat->satuan,
                'jenis_obat' => $obat->jenisObat->type,
                'sumber_dana' => $obat->sumber_dana
            ];
        }

        /**
         * Menambahkan data ke tabel t_det_transaksi_gudang
         */
        DetTransaksiGudang::insert($detTransaksiGudang);
        return redirect('/transaksi-gudang');
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
