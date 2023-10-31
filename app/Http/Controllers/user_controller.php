<?php

namespace App\Http\Controllers;

// use App\Models\Users;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    // public function submit (Request $request) {
    //     return 'Hello World';
    //     $incomingFields = $request->validate ([
    //         'name' => 'required',
    //         'type' => 'required',
    //     ]);
    //     User::create($incomingFields);
    // }
    public function index () {
        
        $restaurants = Restaurant::get();
        return view('home',['name' => 'Hello', 'restaurants' => $restaurants]);
        

    }

    public function index1 () {
        $restaurants = Restaurant::get();
        return view('store', ['name' => 'Hello', 'restaurants' => $restaurants]);
    }
}
