<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class userAccountController extends Controller
{
    public function userRegister (Request $request) {
        $incomingFields = $request->validate ([
            'name' => ['required', 'min:3', 'max:10'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:3', 'max:10']
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        User::create($incomingFields);
        return 'Item Registered.';
    }
}
