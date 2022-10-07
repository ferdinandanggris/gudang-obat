<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        for ($i = 0; $i < 10; $i++) {

            DB::table('m_jenis_obat')->insert([
                'type' => 'jenis_obat_' . $i
            ]);
            DB::table('t_obat')->insert([
                'name' => 'obat ' . $i,
                'jumlah' => $i + 1,
                'tanggal_kadaluarsa' => '2022-10-12',
                'satuan' => 'kaplet',
                'sumber_dana' => 'Pemerintah',
                'jenis_obat_id' => $i + 1,
                'tanggal' => '2022-10-12',
                'keterangan' => 'test',
            ]);

            // DB::table('t_transaksi_gudang')->insert([
            //     'lokasi' => 'Farmasi',
            //     'tanggal' => '2022-10-12',
            //     'keterangan' => 'Test transaksi',
            // ]);
        }

        DB::table('m_polindes')->insert([
            'name' => 'Polindes Trutup',
        ]);
        DB::table('m_polindes')->insert([
            'name' => 'Polindes Kepohagung',
        ]);
        DB::table('m_polindes')->insert([
            'name' => 'Polindes Kesamben',
        ]);
        DB::table('m_polindes')->insert([
            'name' => 'Polindes  Cangkring',
        ]);
        DB::table('m_polindes')->insert([
            'name' => 'Polindes  Sumurjalak',
        ]);
        DB::table('m_polindes')->insert([
            'name' => 'Polindes  Plumpang',
        ]);
        DB::table('m_polindes')->insert([
            'name' => 'Polindes  Ngrayung',
        ]);
        DB::table('m_polindes')->insert([
            'name' => 'Polindes  Sumberagung',
        ]);
        DB::table('m_polindes')->insert([
            'name' => 'Polindes  Magersari',
        ]);
        DB::table('m_polindes')->insert([
            'name' => 'Polindes  Jatimulyo',
        ]);
        DB::table('m_polindes')->insert([
            'name' => 'Polindes  Penidon',
        ]);
        DB::table('m_polindes')->insert([
            'name' => 'Pustu  Kepohagung',
        ]);
        DB::table('m_polindes')->insert([
            'name' => 'Pustu  Magersari',
        ]);
    }
}
