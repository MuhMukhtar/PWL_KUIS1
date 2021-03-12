<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
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
                'name'=>'Americano 1',
                'image'=>'img/menu-1.jpg',
                'desc'=>'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. Red ipsum',
                'price'=>'<span class="tm-product-price-currency">$</span>30'
            ],
            [
                'name'=>'Americano 2',
                'image'=>'img/menu-2.jpg',
                'desc'=>'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. Red ipsum',
                'price'=>'<span class="tm-product-price-currency">$</span>20'
            ],
            [
                'name'=>'Americano 3',
                'image'=>'img/menu-3.jpg',
                'desc'=>'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. Red ipsum',
                'price'=>'<span class="tm-product-price-currency">$</span>15'
            ],
            [
                'name'=>'Americano 4',
                'image'=>'img/menu-4.jpg',
                'desc'=>'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. Red ipsum',
                'price'=>'<span class="tm-product-price-currency">$</span>25'
            ],
            [
                'name'=>'Americano 5',
                'image'=>'img/menu-5.jpg',
                'desc'=>'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. Red ipsum',
                'price'=>'<span class="tm-product-price-currency">$</span>45'
            ]
            ];
            DB::table('menus')->insert($data);
    }
}
