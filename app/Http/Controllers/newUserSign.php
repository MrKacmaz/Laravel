<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\User;


class newUserSign extends Controller
{
    public function addDbNewUser(Request $request)
    {
        $newUser = new User();
        $newUser->status = 1;
        $newUser->name = $request->input('userSignInName');
        $newUser->surname = $request->input('userSignInSurname');
        $newUser->email = $request->input('userSignInEmail');
        $newUser->password = $request->input('userSignInPassword');
        // $user->password = Hash::make(input('userSignInPassword'));
        $newUser->sign_in_date = date("Y-m-d H:i:s");

        // User::created($newUser);
        $newUser->save();

        return redirect("/asdas");
    }
}
