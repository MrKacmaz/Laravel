<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'category' => 'Electronic',
            'name' => 'Computer',
            'stock' => 500,
            'price' => 4999,
        ]);

        DB::table('products')->insert([
            'category' => 'Electronic',
            'name' => 'Laptop',
            'stock' => 400,
            'price' => 3999,
        ]);
        DB::table('products')->insert([
            'category' => 'Electronic',
            'name' => 'Keyboard',
            'stock' => 350,
            'price' => 199,
        ]);
        DB::table('products')->insert([
            'category' => 'Electronic',
            'name' => 'Headphone',
            'stock' => 350,
            'price' => 249,
        ]);
        DB::table('products')->insert([
            'category' => 'Electronic',
            'name' => 'Mouse',
            'stock' => 350,
            'price' => 149,
        ]);
        DB::table('products')->insert([
            'category' => 'Electronic',
            'name' => 'Mouse Pad',
            'stock' => 350,
            'price' => 19,
        ]);
    }
}
