<?php

use App\Http\Controllers\KupovinaController;
use App\Http\Controllers\PutovanjeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get("/putovanje",[PutovanjeController::class,'index']);
Route::get("/putovanje/{id}",[PutovanjeController::class,'show']);

Route::get("/kupovine",[KupovinaController::class,'index']);
Route::get("/kupovine/{id}",[KupovinaController::class,'show']);


Route::delete("/kupovine/{id}",[KupovinaController::class,'destroy']);
Route::post("/kupovine",[KupovinaController::class,'store']);
Route::put("/kupovine/{id}",[KupovinaController::class,'update']);




 