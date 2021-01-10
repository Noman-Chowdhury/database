<?php

namespace App\Http\Controllers;

use App\Models\sectors;
use Illuminate\Http\Request;

class SectorsController extends Controller
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
 Sectors::create(
     [
         'name'=>$request->sector,
     ]
     );

     return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sectors  $sectors
     * @return \Illuminate\Http\Response
     */
    public function show(sectors $sectors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sectors  $sectors
     * @return \Illuminate\Http\Response
     */
    public function edit(sectors $sectors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sectors  $sectors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sectors $sectors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sectors  $sectors
     * @return \Illuminate\Http\Response
     */
    public function destroy(sectors $sectors)
    {
        //
    }
}
