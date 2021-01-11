<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SectorsController;
use App\Http\Controllers\ProductcategoriesController;
use App\Http\Controllers\ProductsubcategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ClientsController;

use App\Models\productcategories;
use App\Models\productsubcategories;
use App\Models\products;

class UController extends Controller
{
    public function dashboard()
    {
        $subcats=productsubcategories::with('categories')->get();
        $products=products::with('subcategories')->get();
        return view('frontend.user.master');
    }
    public function products()
    {
        $subcats=productsubcategories::with('categories')->get();
        $products=products::with('subcategories')->get();
        return view('frontend.user.layouts.products',compact('subcats','products'));
    }
}
