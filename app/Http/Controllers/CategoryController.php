<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categores = category::all();
        return view('welcome',['categores' => $categores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            //code...
            $categores = new category;
            $categores->cat_name = $request->name;

            $categores->save();

            return to_route('home');
        } catch (\Exception $e) {
            //throw $th;
            die('error: ' . $e->getMessage());
        }

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //
    }
}
