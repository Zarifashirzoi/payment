<?php

namespace Database\Seeders;

use App\Models\General;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generals = [
            [
                'id' => 1, 
                'type' => 'banner', 
                'name' => 'Buy any digital accessory or books',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde illum mollitia inventore voluptas eos magnam maiores sunt rem fugiat odio commodi facere tenetur pariatur, repudiandae, minima animi consequatur perspiciatis atque suscipit? Doloremque quisquam perspiciatis est. Suscipit dicta cumque earum sequi.',
                'image' => 'images/computer.png',
            ],
            [
                'id' => 2, 
                'type' => 'about', 
                'name' => 'About Yaganchiz',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde illum mollitia inventore voluptas eos magnam maiores sunt rem fugiat odio commodi facere tenetur pariatur, repudiandae, minima animi consequatur perspiciatis atque suscipit? Doloremque quisquam perspiciatis est. Suscipit dicta cumque earum sequi.',
                'image' => 'images/yaganchiz.png',
            ],
           
        ];

        General::upsert($generals, ['id']);
    }
}
