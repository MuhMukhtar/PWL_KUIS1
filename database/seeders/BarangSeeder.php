<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Biji Kopi',
                'desc' => 'Untuk kopi americano nich',
                'stock' => '5 kg'
            ],
            [
                'name' => 'Susu',
                'desc' => 'Susu sapi segar',
                'stock' => '3 Liter'
            ],
            [
                'name' => 'Gula',
                'desc' => 'Biar kopinya tidak sepahit kehidupan ini',
                'stock' => '2 kg'
            ],
            [
                'name'=>'Creamer Bubuk',
                'desc'=>'Biar ada putih putih diatas kopinya',
                'stock'=>'3 kg'
            ],
            [
                'name'=>'Cokelat Bubuk',
                'desc'=>'Untuk campuran kopi ntar',
                'stock'=>'1 kg'
            ]
        ];
        DB::table('barangs')->insert($data);
    }
}
