<?php

namespace App\Http\Controllers;

use App\Models\productsubcategories;
use Illuminate\Http\Request;

class ProductsubcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        productsubcategories::create([
            'name'=>$request->name,
            'category_id'=>$request->category,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productsubcategories  $productsubcategories
     * @return \Illuminate\Http\Response
     */
    public function show(productsubcategories $productsubcategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productsubcategories  $productsubcategories
     * @return \Illuminate\Http\Response
     */
    public function edit(productsubcategories $productsubcategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productsubcategories  $productsubcategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productsubcategories $productsubcategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productsubcategories  $productsubcategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(productsubcategories $productsubcategories)
    {
        //
    }
}
