<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangdbseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangdbs')->insert([
            [
                'name_barang' => 'ES',
                'deskripsi' => 'Barang Ekonomis berguna',
                'stok' => 20,
                'harga' => 2000,
                'satuan_id' => 1
            ],
        ]);
    }
}
