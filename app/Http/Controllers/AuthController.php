<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    
    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'password' =>  'required' , 
                'name' => 'required|string|max:100', 
                'email' => 'required|string|max:100|email',
                 

            ]
        );
        if ($validator->fails()) 
            return response()->json($validator->errors());


         
            

        $user = User::create([
            'name' => $request->name, 
            'email' => $request->email,  
            'password' => Hash::make($request->password)]);
            


        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(['data' => $user, 'acess_token' => $token, 'token_type' => 'Bearer']);
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success'=>false]);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['poruka' => 'Pogresan email ili password!']);
        }

        $user = User::where('email', $request['email'])->firstOrFail();


        if(!$user){
            return response()->json([
                'status'=>401,
                'message'=>'Invalid credentials',
            ]);
        }else{
             
                $token = $user->createToken($user->email.'_Token',[''])->plainTextToken;
            
        }

     

        $response = [
            'status'=>200,
            'id'=>$user->id,
            'username'=>$user->name,
            'token' => $token,
           
           
        ];

        return response()->json([$response,'success'=>true ]);
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json(['Uspešno ste se odjavili!']);
    }






}
