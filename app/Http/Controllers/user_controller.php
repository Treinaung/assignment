<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    // Register Item
    public function register (Request $request) {
        $request->validate ([
            'name' => 'required|unique:restaurants',
            'type' => 'required'
            
        ]);
        //Create item
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
    }
    //Edit Page
    public function editPage(Restaurant $post) {
        return view ('edit', ['post' => $post]);
    }
    //Update Page 
    public function updatePage(Restaurant $post, Request $request) {
        $incomingFields = $request->validate ([
            'name'=> 'required',
            'type' => 'required'
        ]);
        $post->update($incomingFields);
        $request -> session()->flash('update', 'Product updated successfully.');
        return redirect('/store');
    }
    public function index () {    
        $restaurants = Restaurant::get();
        return view('home',['name' => 'Hello', 'restaurants' => $restaurants]);
    }

    public function index1 () {
        $restaurants = Restaurant::get();
        return view('store', ['name' => 'Hello', 'restaurants' => $restaurants]);
    }
    //Get Menu List
    public function get_menu() {
        $restaurants = Restaurant::get();
        return response()->json([
            'message'=>'Restaurant_Menu',
            'status'=>'success',
            'resturants'=> $restaurants
        ]);
    }
    public function update_menu($id, Request $request) {
        $incomingFields = $request->validate ([
            'name'=> 'required',
            'type' => 'required'
        ]);
        $restaurants=Restaurant::find($id);
        $restaurants->name=$request->name;
        $restaurants->type=$request->type;
        $restaurants->save();
        return response()->json([
            'message'=>'Resturant updated',
            'data'=>$restaurants
        ]);    
    }
    //Create Menu
    public function create_menu(Request $request) {
        $restaurants = new Restaurant();
        Restaurant::create([
            'name'=> $request->name,
            'type'=> $request->type,
        ]);
        return response()->json([
            'message'=>'Restaurant',
            'status'=>'success',
            'restaurant'=>$restaurants
        ]);   
    }    
    //Delete Menu
    public function delete_menu($id) {
        $restaurant = Restaurant::find($id);
        $restaurant->delete();

        return response()->json([
            'message'=> "Deleted"
        ]);
    }            
}
