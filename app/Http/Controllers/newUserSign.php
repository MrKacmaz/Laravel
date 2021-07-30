<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\User;


class newUserSign extends Controller
{
    public $timestamps = false;
    const UPDATED_AT = null;
    public function addDbNewUser(Request $request)
    {

        // ERROR
        // Illuminate\Database\QueryException
        // SQLSTATE[42S22]: Column not found: 1054 Unknown column 'updated_at' in 'field list' (SQL: insert into `users` 
        // (`status`, `name`, `surname`, `email`, `password`, `sign_in_date`, `updated_at`, `created_at`) 
        // values (1, ali, aliali, ali@ali.com, aliali, 2021-07-30 13:00:05, 2021-07-30 13:00:05, 2021-07-30 13:00:05))
        
        $newUser = new User();
        $newUser->status = 1;
        $newUser->name = $request->input('userSignInName');
        $newUser->surname = $request->input('userSignInSurname');
        $newUser->email = $request->input('userSignInEmail');
        $newUser->password = $request->input('userSignInPassword');
        // $user->wachtwoord = Hash::make(Input::get('password'));
        $newUser->sign_in_date = date("Y-m-d H:i:s");

        // User::created($newUser);
        $newUser->save();
    }
}
