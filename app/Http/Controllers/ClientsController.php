<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\productcategories;
use App\Models\productsubcategories;
use Illuminate\Http\Request;
use App\Models\products;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=productcategories::with('subcategories')->get();
        $users=user::all();
        $products=products::all();


        return view('frontend.master',compact('categories','users','products'));
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
        $subcategory_id=$request->subcategory;
        $category_id=productsubcategories::find($subcategory_id);


        $category = productcategories::where('id','$request->subcategory');
        products::create([
            'name'=>$request->productname,
            'user_id'=>1,
            'category_id'=>$category_id->category_id,
            'subcategory_id'=>$subcategory_id,
            'description'=>$request->description,

        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(clients $clients)
    {
        //
    }
}
