<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    
    public function register(Request $request)
    {
        $request['password'] = bcrypt($request->password);

        $user = new User();
        $user->user_id = $request->user_id;
        $user->sex = $request->sex;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        
        // User::create($request->all());

        return response()->json(['msg'=>"Success"]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, true)) {
            // Authentication passed...
            return response()->json(['msg'=>"Success"]);
        }
    }

    public function logout(Request $request)
    {

    }
}
