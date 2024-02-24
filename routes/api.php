<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/restaurants',[user_controller::class,'get_menu']);
Route::post('/restaurants',[user_controller::class,'create_menu']);
Route::put('/restaurants/{id}/update',[user_controller::class,'update_menu']);
Route::delete('/restaurants/{id}/delete',[user_controller::class,'delete_menu']);
Route::get('/test_restaurant',function() {
    return response()->json([
    'message'=>'Restaurant' 
    ]);
}); 
