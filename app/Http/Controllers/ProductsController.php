<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductsController extends Controller
{
    public function home()
    {
        $products = Product::all();
        // return view('welcome', ['products' => $products]);
        return view('userPage', compact('products'));
    }


    public function index()
    {
        $products = Product::where('category', 'Electronic')
            ->get();
        return view('userPage', compact('products'));
    }


    public function mechanism()
    {
        $products = Product::where('category', 'Mechanism')
            ->get();
        return view('userPage', compact('products'));
    }


    public function architect()
    {
        $products = Product::where('category', 'Architect')
            ->get();
        return view('userPage', compact('products'));
    }


    // 
    // ------------------------------------------------
    // 

    public function signIn()
    {
        $users = User::all();
        return view('welcome', compact('users'));
    }

    public function signUp()
    {
        $users = User::all();
        return view('welcome', compact('users'));
    }


    // 
    // ------------------------------------------------
    // 

    public function newUserStore(Request $request)
    {
        $newUserName = $request->input('userSignInName');
        $newUserSurname = $request->input('userSignInSurname');
        $newUserEmail = $request->input('userSignInEmail');
        $newUserPassword = $request->input('userSignInPassword');

        dd($newUserName);
        dd($newUserSurname);
        dd($newUserEmail);
        dd($newUserPassword);
    }
}
