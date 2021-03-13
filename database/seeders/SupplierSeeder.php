<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
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
                'name' => 'Titan',                
                'phone' => '0810928374',
                'address' => 'Magelang'
            ],
            [
                'name' => 'Vienn',
                'phone' => '0887995368',
                'address' => 'Bali'
            ],
            [
                'name' => 'Arra',
                'phone' => '0838765432',
                'address' => 'Jogja'
            ],
            [
                'name' => 'Jukyung',            
                'phone' => '08117789243',
                'address' => 'Batu'                
            ],
            [
                'name' => 'Belle',                
                'phone' => '0898891122',
                'address' => 'Jakarta'
            ],
        ];
        DB::table('suppliers')->insert($data);
    }
}