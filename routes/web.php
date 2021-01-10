<?php

use Illuminate\Support\Facades\Route;
use App\Models\Sectors;

use App\Http\Controllers\SectorsController;
use App\Http\Controllers\ProductcategoriesController;
use App\Http\Controllers\ProductsubcategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Models\productcategories;
use App\Models\productsubcategories;
use App\Models\products;
use App\Models\user;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {


    $all=Sectors::with('category')->get();

    //dd($all);
    $procats=Productcategories::with('sectorcat','subcategories')->get();
    $subcats=Productsubcategories::with('categories')->get();
    $products=Products::with('subcategories','seller')->get();
    $sellers=user::all();

   // dd($procats);
    return view('backend.layouts.home',compact('all','procats','subcats', 'sellers', 'products'));
});

Route::post('/sector/store',[SectorsController::class,'store'])->name('sector.store');
Route::post('/productcategory/store',[ProductcategoriesController::class,'store'])->name('procat.store');
Route::post('/productsubcategory/store',[ProductsubcategoriesController::class,'store'])->name('prosubcat.store');
Route::post('/products/store',[ProductsController::class,'store'])->name('product.store');


Route::get('/sectors', function () {
    $all=Sectors::with('category')->get();

    //dd($all);
    $procats=Productcategories::with('sectorcat','subcategories')->get();
    $subcats=Productsubcategories::with('categories')->get();
    $products=Products::with('subcategories','seller')->get();
    $sellers=user::all();
    return view('backend.layouts.sectors',compact('all','procats','subcats', 'sellers', 'products'));
})->name('sector.list');



Route::get('/productcategories', function () {
    $all=Sectors::with('category')->get();

    //dd($all);
    $procats=Productcategories::with('sectorcat','subcategories')->get();
    $subcats=Productsubcategories::with('categories')->get();
    $products=Products::with('subcategories','seller')->get();
    $sellers=user::all();
    return view('backend.layouts.productcategories',compact('all','procats','subcats', 'sellers', 'products'));
})->name('productcategories.list');



Route::get('/productsubcategories', function () {
    $all=Sectors::with('category')->get();

    //dd($all);
    $procats=Productcategories::with('sectorcat','subcategories')->get();
    $subcats=Productsubcategories::with('categories')->get();
    $products=Products::with('subcategories','seller')->get();
    $sellers=user::all();
    return view('backend.layouts.productsubcategories',compact('all','procats','subcats', 'sellers', 'products'));
})->name('productsubcategories.list');


Route::get('/seller/registration', function() {
$sectors=Sectors::all();
return view('backend.layouts.sellerregistration',compact('sectors'));
})->name('registration');

Route::post('/seller/reg',[UserController::class,'store'])->name('seller.store');

Route::post('/seller/pro',[UserController::class,'index'])->name('seller.show');

Route::get('/seller/dash',[UserController::class,'create'])->name('seller.dash');











