<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member');
    }

    public function fetch()
    {
        return response()->json(['member'=>Member::with('user')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $member = Member::create(
            [
                'image'=> $request->image,
                'member_info'=>$request->member_info
            ]
        );

        $member->save();

        return response()->json(['member'=>Member::with('user')->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Member::where('id', $id)->update(
            [
                'image'=> $request->image,
                'member_info'=>$request->member_info
            ]
        )->save();

        $member->save();
        
        return response()->json('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Member::where('id', $id)->delete();
        
        return response()->json("delete");
        
        // if ($res) {
        //     return response()->json() ([
        //         'status'=>'1',
        //         'msg'=>'success'
        //     ]);
        // } else {
        //     return response()->json() ([
        //         'status'=>'0',
        //         'msg'=>'fail'
        //     ]);
        // }
    }
}
