<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'TV01', 'barang_nama' => 'Televisi', 'harga_beli' => 3000000, 'harga_jual' => 3500000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'HP02', 'barang_nama' => 'Handphone', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'KA01', 'barang_nama' => 'Kemeja', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'JS02', 'barang_nama' => 'Jeans', 'harga_beli' => 200000, 'harga_jual' => 250000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'NS01', 'barang_nama' => 'Nasi Goreng', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'MI02', 'barang_nama' => 'Mie Ayam', 'harga_beli' => 12000, 'harga_jual' => 18000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'ES01', 'barang_nama' => 'Es Teh', 'harga_beli' => 5000, 'harga_jual' => 8000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'JK02', 'barang_nama' => 'Jus Alpukat', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'BL01', 'barang_nama' => 'Bola', 'harga_beli' => 50000, 'harga_jual' => 80000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'SR02', 'barang_nama' => 'Sepatu Olahraga', 'harga_beli' => 200000, 'harga_jual' => 250000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
