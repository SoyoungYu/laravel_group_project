<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Cookie;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
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
        $request->validate([
            'user_id' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = request(['user_id', 'password']);
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $token = $user->createToken('Personal Access Token')->accessToken;
            $cookie = $this->getCookieDetails($token);
            return response()->json([
                'logged_in_user' =>$user,
                'token' => $token,
            ], 200)->cookie($cookie['name'], $cookie['value'],$cookie['minutes'],$cookie['path'],$cookie['domain'],
            $cookie['secure'],$cookie['httponly'],$cookie['samesite']);
        }else{
            return response()->json(['error'=>'invalid-credentials'],422);
        }
    }

    private function getCookieDetails($token)
    {
        return [
            'name' => '_token',
            'value' => $token,
            'minutes' => 1440,
            'path' => null,
            'domain' => null,
            'secure' => null,
            'httponly' => true,
            'samesite' => true,
        ];
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        $cookie = Cookie::forget('_token');
        return response()->json([
            'msg' => 'successful_logout'
        ])->withCookie($cookie);
    }
}
