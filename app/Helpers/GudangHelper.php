<?php

namespace App\Helpers;

use Exception;
use App\Models\TransaksiGudang;
use App\Models\DetTransaksiGudang;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class GudangHelper
{
    protected $gudangModel;
    protected $detGudangModel;

    public function __construct()
    {
        $this->gudangModel = new TransaksiGudang();
    }

    public function create($payload)
    {
        try {

            /**
             * Menambahkan data ke tabel t_transaksi_gudang
             */
            $obatFlag = DetGudangHelper::obatReady($payload->post());

            if (!$obatFlag) {
                throw new Exception("Obat tidak cukup!", 1);
            }
            $dataGudang = $this->gudangModel->store($payload->post());
            // dd($this->gudangModel->store($payload->post()));
            // dd($dataGudang);
            (new DetGudangHelper($dataGudang))->create($payload->post());
            return [
                'status' => true,
                'message' => "Data berhasil disimpan!"
            ];
        } catch (\Throwable $th) {
            // Redirect::back();
            // Alert::error('Gagal', $th->getMessage());
            return [
                'status' => false,
                'message' => $th->getMessage()
            ];
        }
    }
}
