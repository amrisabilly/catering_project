<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class menuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
        {
            DB::table('tabel_menu')->insert([
        [
            'kode_menu'   => 'MN-1',
            'nama_menu'   => 'Ayam Geprek',
            'keterangan'  => 'Ayam geprek - Lalapan - Pisang',
            'harga'       => 20000,
            'gambar'      => 'img/admin/daftarmenu/ordermenu1.png',
            'kategori'    => 'main course',
        ],
        [
            'kode_menu'   => 'MN-2',
            'nama_menu'   => 'Ayam Katsu',
            'keterangan'  => 'Ayam katsu - sayur capcay - pudding',
            'harga'       => 20000,
            'gambar'      => 'img/admin/daftarmenu/ordermenu2.png',
            'kategori'    => 'main course',
        ],
        [
            'kode_menu'   => 'MN-3',
            'nama_menu'   => 'Ayam Saos Tiram',
            'keterangan'  => 'Ayam Saos Tiram - Kol Tumis - Puding',
            'harga'       => 20000,
            'gambar'      => 'img/admin/daftarmenu/ordermenu3.png',
            'kategori'    => 'main course',
        ],
        [
            'kode_menu'   => 'MN-4',
            'nama_menu'   => 'Lele Goreng',
            'keterangan'  => 'Lele Goreng - Mie Goreng - Pisang',
            'harga'       => 20000,
            'gambar'      => 'img/admin/daftarmenu/ordermenu4.png',
            'kategori'    => 'main course',
        ],
        [
            'kode_menu'   => 'MN-5',
            'nama_menu'   => 'Telur Dadar',
            'keterangan'  => 'Telur Dadar - Kangkung - Tempe - Pisang',
            'harga'       => 20000,
            'gambar'      => 'img/admin/daftarmenu/ordermenu5.png',
            'kategori'    => 'main course',
        ],
        [
            'kode_menu'   => 'MN-6',
            'nama_menu'   => 'Telur Puyuh',
            'keterangan'  => 'Telur Puyuh Sambal - Kangkung',
            'harga'       => 20000,
            'gambar'      => 'img/admin/daftarmenu/ordermenu6.png',
            'kategori'    => 'main course',
        ],
        [
            'kode_menu'   => 'RB-1',
            'nama_menu'   => 'Ayam Mentega',
            'keterangan'  => 'Ayam Saos Mentega - Telur Dadar Rawis',
            'harga'       => 20000,
            'gambar'      => 'img/admin/daftarmenu/bowl1.png',
            'kategori'    => 'rice bowl',
        ],
        [
            'kode_menu'   => 'RB-2',
            'nama_menu'   => 'Ayam Katsu',
            'keterangan'  => 'Ayam Katsu',
            'harga'       => 20000,
            'gambar'      => 'img/admin/daftarmenu/bowl2.png',
            'kategori'    => 'rice bowl',
        ],
        [
            'kode_menu'   => 'RB-3',
            'nama_menu'   => 'Ayam Asam Manis',
            'keterangan'  => 'Ayam Asam Manis',
            'harga'       => 20000,
            'gambar'      => 'img/admin/daftarmenu/bowl3.png',
            'kategori'    => 'rice bowl',
        ],
    ]);
    }
}
