<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    // public function register (Request $request) {
    //     $incomingFields = $request->validate ([
    //         'name' => 'required',
    //         'type' => 'required'
    //     ]);
    //     return 'Item Registered.';
    //     Restaurant::create($incomingFields);
    // }

    public function register (Request $request) {
        $request->validate ([
            'name' => 'required|unique:restaurants',
            'type' => 'required'
            
        ]);

        $item = Restaurant::create ([
            'name' => $request->input('name'),
            'type' =>  $request->input('type')
        ]);
        $request -> session()->flash('status', 'Product registered successfully.');
        return redirect ('/store');
    }

    public function deletePage(Restaurant $post, Request $request) {
        $post->delete();   
        $request -> session()->flash('delete', 'Product deleted successfully.');
        return redirect ('/store');
        // return redirect('store')->with('delete', 'Product deleted successfully.');
    }

    public function editPage(Restaurant $post) {
        return view ('edit', ['post' => $post]);
    }

    public function updatePage(Restaurant $post, Request $request) {
        $incomingFields = $request->validate ([
            'name'=> 'required',
            'type' => 'required'
        ]);
        $post->update($incomingFields);
        $request -> session()->flash('update', 'Product updated successfully.');
        return redirect('/store');
    }

    


    // public function register () {
    //     Restaurant::create([
    //         'name' => request('name'),
    //         'type' =>  request('type')
    //     ]);
    //     return 'Item Registered.';
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
