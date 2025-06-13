<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tabel_user')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin123'), 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
