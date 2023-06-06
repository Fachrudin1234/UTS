<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class satuanseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'code' => 'ES',
                'name' => 'Barang Ekonomis',
            ],
            [
                'code' => 'KM',
                'name' => 'Barang Inovasi',
            ],
            [
                'code' => 'MR',
                'name' => 'Barang Biasa',
            ],
        ]);

    }
}
