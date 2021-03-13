<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
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
                'name' => 'Annisa',
                'title' => 'CEO',
                'phone' => '08123465798',
                'address' => 'Situbondo'
            ],
            [
                'name' => 'Mukhtar',
                'title' => 'President Director',
                'phone' => '0878909132',
                'address' => 'Bali'
            ],
            [
                'name' => 'Vincenzo',
                'title' => 'General Manager',
                'phone' => '08389694947',
                'address' => 'Jakarta'
            ],
            [
                'name' => 'Wahyu',
                'title' => 'Assistant Manager',
                'phone' => '08889994567',
                'address' => 'Kediri'                
            ],
            [
                'name' => 'Cassano',
                'title' => 'Cashier',
                'phone' => '0871534249',
                'address' => 'Jakarta'
            ],
        ];
        DB::table('pegawais')->insert($data);
    }
}
