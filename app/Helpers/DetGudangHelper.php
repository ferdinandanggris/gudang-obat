<?php

namespace App\Helpers;

use Exception;
use App\Models\Obat;
use App\Models\TransaksiGudang;
use App\Models\DetTransaksiGudang;
use App\Models\ObatFarmasi;
use App\Models\ObatPolindes;

class DetGudangHelper
{
    protected $detGudangModel;
    protected $parent;

    public function __construct(TransaksiGudang $transaksiGudang)
    {
        $this->parent = $transaksiGudang;
        $this->detGudangModel = new DetTransaksiGudang();
    }

    public function create($request)
    {
        /**
         * Variabel untuk menyimpan data detail Transaksi Gudang sementara
         * @var array $detTransaksiGudang
         */
        $detTransaksiGudang = [];

        /**
         * Looping data obat
         */
        for ($i = 0; $i < $request['jml_obat']; $i++) {

            /**
             * Variabel untuk menyimpan satu data obat
             * @var object $obat
             */
            $obat = Obat::find($request['obat_id_' . ($i + 1)]);

            /**
             * Update Jml Obat
             */
            Obat::where('id', $obat->id)
                ->update(['jumlah' => $obat->jumlah - $request['jumlah_' . ($i + 1)],]);

            /**
             * Memasukkan data ke 
             * @var array $detTransaksiGudang
             */
            $detTransaksiGudang[$i] = [
                'id_transaksi_gudang' => $this->parent->id,
                'name' => $obat->name,
                'jumlah' => $request['jumlah_' . ($i + 1)],
                'tanggal_kadaluarsa' => $obat->tanggal_kadaluarsa,
                'satuan' => $obat->satuan,
                'jenis_obat' => $obat->jenisObat->type,
                'sumber_dana' => $obat->sumber_dana
            ];

            if ($request['lokasi'] != '0') {
                $obatPolindes = $detTransaksiGudang[$i];
                $obatPolindes['polindes_id'] = $request['lokasi'];
                (new ObatPolindes())->store($obatPolindes);
            } else {
                (new ObatFarmasi())->store($detTransaksiGudang[$i]);
            }

            /**
             * Menambahkan data ke tabel t_det_transaksi_gudang
             */
        }
        return DetTransaksiGudang::insert($detTransaksiGudang);
    }


    public static function obatReady($request)
    {
        for ($i = 0; $i < $request['jml_obat']; $i++) {
            for ($j = $i; $j < $request['jml_obat']; $j++) {
                if ($request['obat_id_' . ($i + 1)] == $request['obat_id_' . ($j + 1)] && $i != $j) {
                    throw new Exception("Tidak bisa menginputkan 1 item yang dalam kolom yang beda", 1);
                }
            }
        }

        for ($i = 0; $i < $request['jml_obat']; $i++) {

            /**
             * Variabel untuk menyimpan satu data obat
             * @var object $obat
             */
            $obat = Obat::find($request['obat_id_' . ($i + 1)]);

            /**
             * Kondisi banyak jumlah obat 
             */
            if (($obat->jumlah - $request['jumlah_' . ($i + 1)]) < 0) {
                // TransaksiGudang::destroy($lastTransaksiGudang->id);
                // return response('jumlah obat tidak mencukupi', 422);
                return false;
            } else {
                // Obat::where('id', $obat->id)
                //     ->update(['jumlah' => $obat->jumlah - $request->post()['jumlah_' . ($i + 1)],]);
                // return true;
            }
        }
        return true;
    }
}
