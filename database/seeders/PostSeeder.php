<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
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
                'name'=>'<span class="tm-handwriting-font bigger-first-letter">a</span>mericano',
                'image'=>'img/popular-1.jpg',
                'desc'=>'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum'
            ],
            [
                'name'=>'<span class="tm-handwriting-font bigger-first-letter">c</span>appuccino',
                'image'=>'img/popular-2.jpg',
                'desc'=>'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum'
            ],
            [
                'name'=>'<span class="tm-handwriting-font bigger-first-letter">m</span>ocha',
                'image'=>'img/popular-3.jpg',
                'desc'=>'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum'
            ],
            [
                'name'=>'<span class="tm-handwriting-font bigger-first-letter">a</span>mericano',
                'image'=>'img/popular-1.jpg',
                'desc'=>'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum'
            ],
            [
                'name'=>'<span class="tm-handwriting-font bigger-first-letter">c</span>appuccino',
                'image'=>'img/popular-2.jpg',
                'desc'=>'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum'
            ],
            [
                'name'=>'<span class="tm-handwriting-font bigger-first-letter">m</span>ocha',
                'image'=>'img/popular-3.jpg',
                'desc'=>'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum'
            ]
            ];
        DB::table('posts')->insert($data);
    }
}
