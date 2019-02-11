<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
    	return view('welcome');
    }

    public function cafe(){
    	return view('cafe');
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
