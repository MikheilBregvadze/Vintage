<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    public function welcome(){
    	return view('welcome');
    }

    public function cafe(){

        $product = Product::All();
    	return view('cafe', compact('product'));
     }
    public function cruz(){
        return view('cruz');
    }
    public function scrambler(){
        return view('scrambler');
    }
    public function cart(){
        return view('cafe.cart');
    }
    public function shop(){
        return view('cafe.shop.index');
    }
}
