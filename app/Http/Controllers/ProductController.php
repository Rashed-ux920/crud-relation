<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productes = product::all();
        return view('product',['productes' => $productes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('addproduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new product;

        $product->p_name = $request->name;
        $product->	p_description = $request->description;
        $product->	p_price = $request->price;
        $product->	cat_id = $request->type;

        $product->save();

        return to_route('addproduct');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $productes = product::findOrFail($id);

        return view('editpro', ['productes' => $productes]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
