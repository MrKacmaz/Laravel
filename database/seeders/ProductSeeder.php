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


        // Electronic
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

        // Mechanism
        DB::table('products')->insert([
            'category' => 'Mechanism',
            'name' => 'Motherboard',
            'stock' => 850,
            'price' => 1299,
        ]);

        DB::table('products')->insert([
            'category' => 'Mechanism',
            'name' => 'CPU',
            'stock' => 755,
            'price' => 799,
        ]);
        DB::table('products')->insert([
            'category' => 'Mechanism',
            'name' => 'RAM',
            'stock' => 872,
            'price' => 135,
        ]);
        DB::table('products')->insert([
            'category' => 'Mechanism',
            'name' => 'GPU',
            'stock' => 250,
            'price' => 9999,
        ]);
        DB::table('products')->insert([
            'category' => 'Mechanism',
            'name' => 'PSU',
            'stock' => 350,
            'price' => 149,
        ]);
        DB::table('products')->insert([
            'category' => 'Mechanism',
            'name' => 'Cooler',
            'stock' => 142,
            'price' => 89,
        ]);

        // Architect
        DB::table('products')->insert([
            'category' => 'Architect',
            'name' => 'Gaming Chair',
            'stock' => 240,
            'price' => 499,
        ]);

        DB::table('products')->insert([
            'category' => 'Architect',
            'name' => 'Gaming Table',
            'stock' => 159,
            'price' => 799,
        ]);
        DB::table('products')->insert([
            'category' => 'Architect',
            'name' => 'Carpet',
            'stock' => 40,
            'price' => 67,
        ]);
        DB::table('products')->insert([
            'category' => 'Architect',
            'name' => 'Decoration Stuff',
            'stock' => 2000,
            'price' => 35,
        ]);
        DB::table('products')->insert([
            'category' => 'Architect',
            'name' => 'Tool Utensil',
            'stock' => 350,
            'price' => 149,
        ]);
        DB::table('products')->insert([
            'category' => 'Architect',
            'name' => 'table fan',
            'stock' => 85,
            'price' => 99,
        ]);
    }
}
