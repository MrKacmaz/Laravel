<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function home()
    {
        $products = Product::all();
        $catagoryName = 'All';
        // return view('welcome', ['products' => $products]);
        return view('welcome', compact('products'));
    }


    public function index()
    {
        $products = Product::where('category', 'Electronic')
            ->get();
        $catagoryName = 'Electronic';
        return view('welcome', compact('products'));
    }


    public function mechanism()
    {
        $products = Product::where('category', 'Mechanism')
            ->get();
        return view('welcome', compact('products'));
    }


    public function architect()
    {
        $products = Product::where('category', 'Architect')
            ->get();
        $catagoryName = 'Architect';
        return view('welcome', compact('products'));
    }
}
