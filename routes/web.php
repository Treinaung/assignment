<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\userAccountController;

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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/userRegister', [userAccountController::class, 'userRegister']);


Route::get('/store', function () {
    return view('store');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/', [user_controller::class, 'index']);
Route::get('/store', [user_controller::class, 'index1']);

//Create, Edit and Delete
Route::post('/register', [user_controller::class, 'register']);
Route::get('/edit/{post}', [user_controller::class, 'editPage']);
Route::put('/edit/{post}', [user_controller::class, 'updatePage']);
Route::delete('/delete/{post}', [user_controller::class, 'deletePage']);

// Route::post('/store', [user_controller::class, 'submit']);

// Route::get('home', function() {
    
//     return view('home', );
// });