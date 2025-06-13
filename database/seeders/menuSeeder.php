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
            'kode_menu'   => 'MN-001',
            'nama_menu'   => 'Ayam Geprek',
            'keterangan'  => 'Ayam geprek pedas dengan sambal bawang.',
            'harga'       => 20000,
            'gambar'      => 'img/bgmenu1.png',
            'kategori'    => 'main course',
        ],
        [
            'kode_menu'   => 'MN-002',
            'nama_menu'   => 'Nasi Goreng',
            'keterangan'  => 'Nasi goreng spesial dengan telur dan ayam.',
            'harga'       => 18000,
            'gambar'      => 'img/bgmenu1.png',
            'kategori'    => 'main course',
        ],
        [
            'kode_menu'   => 'MN-003',
            'nama_menu'   => 'Mie Goreng',
            'keterangan'  => 'Mie goreng dengan sayur dan ayam.',
            'harga'       => 17000,
            'gambar'      => 'img/bgmenu1.png',
            'kategori'    => 'ricebowl',
        ],
    ]);
    }
}
