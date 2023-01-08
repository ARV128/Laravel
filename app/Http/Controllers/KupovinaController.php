<?php

namespace App\Http\Controllers;

use App\Http\Resources\KupovinaResource;
use App\Models\Kupovina;
use Illuminate\Http\Request;

class KupovinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return KupovinaResource::collection(Kupovina::all());
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
     * @param  \App\Models\Kupovina  $kupovina
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        return new KupovinaResource(Kupovina::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kupovina  $kupovina
     * @return \Illuminate\Http\Response
     */
    public function edit(Kupovina $kupovina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kupovina  $kupovina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kupovina $kupovina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kupovina  $kupovina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kupovina $kupovina)
    {
        //
    }
}
