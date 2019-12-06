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
        $request->validate([    // 유효성 검사 use_id 가 string형인지
            'user_id' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = request(['user_id', 'password']);
        if(Auth::attempt($credentials)){    // 키/값 배열 받음, DB테이블에서 사용자 찾는데 사용, 비교 전 자동 해시 처리되기 때문에 password 지정 값을 해시처리하면 안됨 / True/Flase 반환
            $user = Auth::user();
            $token = $user->createToken('Personal Access Token')->accessToken;
            $cookie = $this->getCookieDetails($token);
            return response()->json([
                'logged_in_user' =>$user,
                'token' => $token,
            ], 200)->cookie($cookie['key'], $cookie['value'],$cookie['minutes'],$cookie['path'],$cookie['domain'],
            $cookie['secure'],$cookie['httponly'],$cookie['samesite']);
        }else{
            return response()->json(['error'=>'invalid-credentials'],422);
        }
    }

    private function getCookieDetails($token)
    {
        return [
            'key' => '_token',
            'value' => $token,
            'minutes' => 1440,
            'path' => null,
            'domain' => null,
            'secure' => null,
            'httponly' => false,
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
