<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Image; // $composer require intervention/image
use File;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::All();
        return view('/dashboard', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create([
            'title'       => $request->title,
            'description' => $request->description,
            'color'       => $request->color,
            'price'       => $request->price,
            'file'        => $request->file,
        ]);
        

        $requestImage = $request->file;

        $filename = uniqid(rand(1,9999)) . '.' . $requestImage->getClientOriginalExtension();
        if (!is_dir(public_path() . '/img')) {
            mkdir(public_path() . '/img', 0777, true);
        }
        if (!is_dir(public_path() . '/img/product')) {
            mkdir(public_path() . '/img/product/', 0777, true);
        }
        if (!is_dir(public_path() . '/img/product/'.$product->id)) {
            mkdir(public_path() . '/img/product/'.$product->id, 0777, true);
        }
            
        $location = public_path('/img/product/'.$product->id.'/' . $filename);
        Image::make($requestImage)->save($location);
    
        
        $product->file = $filename;
        $product->save();


        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('cafe.product', compact('product'));

        // return $product;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
