<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Country;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create(['email' => 'admin@yahoo.com']);
        User::factory(10)->create();
        Product::factory()->count(10)->create();
        Testimonial::factory()->count(10)->create();
        Country::factory()->count(5)->create();
        $this->call([GeneralTableSeeder::class]);
    }
}
