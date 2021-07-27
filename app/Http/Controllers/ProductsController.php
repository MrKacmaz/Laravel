<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
       $product = DB::table('products')->get();

        return view('product.index', ['products' => $product]);
    }
}
