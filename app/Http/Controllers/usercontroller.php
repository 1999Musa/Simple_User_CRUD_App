<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function register (Request $request){
        $incomingFields = $request->validate([
            'name'=>['required', 'min:3', 'max:10'],
            'email'=>['required', 'email'],
            'password'=>'required'
        ]);
        $incomingFields['password']=bcrypt($incomingFields['password']);
        User::create($incomingFields);


        return 'Hi from my pc';
    }
}
