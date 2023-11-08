<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // public function accountRegister (Request $request) {
    //     $request->validate ([
    //         'name' => 'required|unique:restaurants',
    //         'email' => 'required',
    //         'password' => 'required'
            
    //     ]);

    //     $item = Restaurant::create ([
    //         'name' => $request->input('name'),
    //         'email' =>  $request->input('email'),
    //         'password' =>  $request->input('password')
    //     ]);
    //     // $request -> session()->flash('status', 'Product registered successfully.');
    //     return redirect ('/store');
    // }

    
}
