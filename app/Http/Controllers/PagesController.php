<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
    	return view('welcome');
    // 	$title = "Outlow ";
    // 	return view('welcome')->with('title', $title);
    }

    public function cafe(){
    	return view('cafe');
    // 	$title = "Cafe ";
    // 	return view('cafe')->with('title', $title);
     }
    public function cruz(){
        return view('cruz');
    //     $title = "cruz ";
    //     return view('cruz')->with('title', $title);
    }
    public function scrambler(){
        return view('scrambler');
    //     $title = "scrambler ";
    //     return view('scrambler')->with('title', $title);
    }
    public function cart(){
        return view('cafe.cart');
    //     $title = "scrambler ";
    //     return view('scrambler')->with('title', $title);
    }
    public function shop(){
        return view('cafe.shop.index');
    //     $title = "scrambler ";
    //     return view('scrambler')->with('title', $title);
    }
}
