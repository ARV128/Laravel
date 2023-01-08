<?php

namespace App\Http\Controllers;

use App\Models\Putovanje;
use Illuminate\Http\Request;

class PutovanjeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //GET
    {
        return Putovanje::all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Putovanje  $putovanje
     * @return \Illuminate\Http\Response
     */
    public function show($id) //GET
    {
         return Putovanje::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Putovanje  $putovanje
     * @return \Illuminate\Http\Response
     */
    public function edit(Putovanje $putovanje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Putovanje  $putovanje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Putovanje $putovanje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Putovanje  $putovanje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Putovanje $putovanje)
    {
        //
    }
}
