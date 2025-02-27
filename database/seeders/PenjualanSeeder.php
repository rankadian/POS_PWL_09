<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'pembeli' => 'Burhan',
                'penjualan_kode' => 'PJ001',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Udin',
                'penjualan_kode' => 'PJ002',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Supri',
                'penjualan_kode' => 'PJ003',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Siti',
                'penjualan_kode' => 'PJ004',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Romlah',
                'penjualan_kode' => 'PJ005',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Junaidi',
                'penjualan_kode' => 'PJ006',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Ari',
                'penjualan_kode' => 'PJ007',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Asep',
                'penjualan_kode' => 'PJ008',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Ujang',
                'penjualan_kode' => 'PJ009',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Cecep',
                'penjualan_kode' => 'PJ010',
                'penjualan_tanggal' => now(),
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
