<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'status' => 2,
            'name' => 'Alperen',
            'surname' => 'Kaçmaz',
            'email' => 'alperen@mail.com',
            'password' => md5(123456),
            'sign_in_date' => date("Y-m-d H:i:s"),
        ]);
    }
}
