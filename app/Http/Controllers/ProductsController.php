<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function shop() 
    {
        $products = \App\Product::all();
        return view('products.shop', compact('products'));
    }
}
