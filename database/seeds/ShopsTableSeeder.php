<?php

use Illuminate\Database\Seeder;
use App\Shop;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::insert([
            ['title' => String::random(5)]
        ]);
    }
}
