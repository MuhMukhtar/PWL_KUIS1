<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
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
                'name' => 'Hafiz',
                'phone' => '081285816955',
                'address' => 'Jakarta'
            ],
            [
                'name' => 'Erlangga',
                'phone' => '0818591518',
                'address' => 'Batu'
            ],
            [
                'name' => 'Suwanto',
                'phone' => '089633309773',
                'address' => 'Malang'
            ],
            [
                'name' => 'Fadhil',
                'phone' => '085125486452',
                'address' => 'Malang'
            ],
            [
                'name' => 'Helmi',
                'phone' => '0821655985456',
                'address' => 'Surabaya'
            ]
        ];
        DB::table('pelanggans')->insert($data);
    }
}
