<?php

namespace App\Http\Controllers;

use App\Http\Resources\KupovinaResource;
use App\Models\Kupovina;
use App\Models\Putovanje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request) //POST
    {
        $validator = Validator::make($request->all(), [
            'datum' => 'required|string|max:50',
            'klijent_id' => 'required|integer',
            'putovanje_id' => 'required|integer', 
          
            
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $obj = Kupovina::create([
            'datum' => $request->datum, 
            'klijent_id' => $request->klijent_id, 
            'putovanje_id' => $request->putovanje_id, 
           


        ]);
        $obj->save();
        return response()->json(['Objekat je  kreiran', $obj]);
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
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'datum' => 'required|string|max:50',
            'klijent_id' => 'required|integer',
            'putovanje_id' => 'required|integer', 
          
            
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());

            $obj = Kupovina::find($id);
            if($obj){
                $obj->datum=$request->datum;
                $obj->klijent_id=$request->klijent_id;
                $obj->putovanje_id=$request->putovanje_id;   
                $obj->save();
                return response()->json( ["Uspesno izmenjeno!",$obj]);
            }else{
                return response()->json("Objekat ne postoji u bazi");
            }




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kupovina  $kupovina
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id) //DELETE
    {
         $k = Kupovina::find($id);
         if($k){
            $k->delete();
            return response()->json(["Uspesno obrisano",$k]);
         }else{
            return response()->json("Greska");
         }
    }
}
