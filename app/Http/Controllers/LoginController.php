<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Cookie;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // debug($request->user_id);
        // debug($request->password);
        // // $credentials = $request->only('user_id', 'password');
        // $credentials = [
        //     'user_id' => $request->user_id,
        //     'password' => $request->password
        // ];

        // if(!auth()->attempt($credentials)) {
        //     debug('로그인 정보가 정확하지 않습니다.');
        // }

        // debug(auth()->user()->name);
        

        // return response()->json();
        // debug($credentials);

        // if (Auth::attempt($credentials, true)) {
        //     // Authentication passed...
        //     return redirect()->intended('dashboard');
        // }
        // dump(session()->all());
        $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|string',
        ]);
        $credentials = request(['email', 'password']);
        debug($credentials);
        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('Personal Access Token')->accessToken;
            $cookie=$this->getCookieDetails($token);
            return response()->json(['logged_in_user'=>$user,'token'=>$token], 200)->cookie($cookie['name'], $cookie['value'],$cookie['domain'],$cookie['secure'],$cookie['httponly'],$cookie['samesite']);
        } else {
            return  response()->json(['error'=>'invaild-credentials'],422);
        }
    }
    
    private function getCookieDetails($token) {
        return [
            'name'=>'_token',
            'value'=>$token,
            'minutes'=>1440,
            'path'=>null,
            'domain'=>null,
            // 'secure'=>true,
            'secure'=>null,
            'httponly'=>true,
            'samesite'=>true,
        ];
    }

    public function logout(Request $request) {
        $request->user()->token()->revoke();
        $cookie= Cookie::forget('_token');
        return response()->json([
            'message'=>'successful-logout'
        ])->withCookie($cookie);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
