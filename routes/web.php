<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home', ['name' => 'hello']);
// });

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/store', function () {
    return view('store');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/', [user_controller::class, 'index']);
Route::get('/store', [user_controller::class, 'index1']);


// Route::post('/store', [user_controller::class, 'submit']);

// Route::get('home', function() {
    
//     return view('home', );
// });