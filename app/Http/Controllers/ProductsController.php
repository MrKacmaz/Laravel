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
        return view('welcome', compact('products', 'catagoryName'));
    }


    public function index()
    {
        $products = Product::all();
        $catagoryName = 'Electronic';
        return view('welcome', compact('products', 'catagoryName'));
    }


    public function mechanism()
    {
        $products = Product::all();
        $catagoryName = 'Mechanism';
        return view('welcome', compact('products', 'catagoryName'));
    }


    public function architect()
    {
        $products = Product::all();
        $catagoryName = 'Architect';
        return view('welcome', compact('products', 'catagoryName'));
    }
}
