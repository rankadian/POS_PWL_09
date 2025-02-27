<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'B001',
                'barang_nama' => 'Laptop ASUS',
                'harga_beli' => 8000000,
                'harga_jual' => 10000000,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'B002',
                'barang_nama' => 'Smartphone Samsung',
                'harga_beli' => 5000000,
                'harga_jual' => 7000000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'B003',
                'barang_nama' => 'Kaos Polos',
                'harga_beli' => 50000,
                'harga_jual' => 80000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'B004',
                'barang_nama' => 'Jeans Slim Fit',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'B005',
                'barang_nama' => 'Keripik Kentang',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'B006',
                'barang_nama' => 'Coklat Batang',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'B007',
                'barang_nama' => 'Air Mineral',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'B008',
                'barang_nama' => 'Jus Jeruk',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'B009',
                'barang_nama' => 'Meja Kayu',
                'harga_beli' => 300000,
                'harga_jual' => 400000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'B010',
                'barang_nama' => 'Kursi Plastik',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
            ],
        ];

        // Insert data into the 'm_barang' table
        DB::table('m_barang')->insert($data);
    }
}
