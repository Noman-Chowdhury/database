<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Http\Controllers\SectorsController;
use App\Http\Controllers\ProductcategoriesController;
use App\Http\Controllers\ProductsubcategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ClientsController;

use App\Models\productcategories;
use App\Models\productsubcategories;
use App\Models\products;

use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $credentials= $request->except(['_token']);


        dd(Auth::attempt($credentials));

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('seller.dash')->with('message','Invalid Credentitals');
        }
        else{
            return redirect()->route('registration')->with('message','Invalid Credentitals');
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcats=productsubcategories::with('categories')->get();
        $products=products::with('subcategories')->get();


        return view('backend.layouts.dashboard',compact('subcats','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'company_name'=>$request->company_name,
            'sector_id'=>$request->sector_id,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>bcrypt($request->spassword),

        ]);
        return redirect()->back()->with('message','You have successfully Registered, You Can Now Login');
    }

    public function login()
    {
        return view('backend.layouts.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sellers  $sellers
     * @return \Illuminate\Http\Response
     */
    public function show(user $sellers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sellers  $sellers
     * @return \Illuminate\Http\Response
     */
    public function edit(user $sellers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sellers  $sellers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sellers  $sellers
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $users)
    {
        //
    }
}
